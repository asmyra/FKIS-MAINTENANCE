<?php 

session_start();
$errors = [];
$username = "";

$db = mysqli_connect('localhost', 'root', '', 'fkisdb');

if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $_SESSION['email'] = $email;
 
  $query = "SELECT email FROM login WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token
  $token = bin2hex(random_bytes(50));

  // generate a random Code
  $code = rand(999999, 111111);

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO recoverpassword (email, token, code) VALUES ('$email', '$token', $code)";
    $results = mysqli_query($db, $sql);

    // Send email to user with code

    if ($results) {

      $subject = 'Email Verification Code';
                $message = "our verification code is $code";
                $sender = 'From: ma382793@gmail.com';

                if (mail($email, $subject, $message, $sender)) {
                    $message = "We've sent a verification code to your Email <br> $email";

                    $_SESSION['message'] = $message;
                    header('location: otp.php');
                } else {
                    $errors['otp_errors'] = 'Failed while sending code!';
                }
            } else {
                $errors['db_errors'] = "Failed while inserting data into database!";
            }
        }
    }
// if Verify Button Clicked
    if (isset($_POST['verify'])) {
        $_SESSION['message'] = "";
        $otp = mysqli_real_escape_string($db, $_POST['otp']);
        $otp_query = "SELECT * FROM recoverpassword WHERE code = $otp";
        $otp_result = mysqli_query($db, $otp_query);

        if (mysqli_num_rows($otp_result) > 0) {
            $fetch_data = mysqli_fetch_assoc($otp_result);
            $fetch_code = $fetch_data['code'];

            $update_status = "Verified";
            $update_code = 0;

            // $update_query = "UPDATE recoverpassword SET status = '$update_status' , code = $update_code WHERE code = $fetch_code";

            $update_query = "UPDATE recoverpassword SET status = '$update_status' WHERE code = $fetch_code";
            $update_result = mysqli_query($db, $update_query);

            if ($update_result) {
                header('location: verifyEmail.php');
            } else {
                $errors['db_error'] = "Failed To Insering Data In Database!";
            }
        } else {
            $errors['otp_error'] = "You enter invalid verification code!";
        }
    }




if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($db, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM recoverpassword WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($db, $verifyQuery);
    $row = mysqli_fetch_assoc($runVerifyQuery);
    $email = $row["email"];
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE recoverpassword SET code = 0";
            $run = mysqli_query($db,$newQuery);
            header("location: newPassword.php?email=$email");
        }else{
            $errors['verification_error'] = "Invalid Verification Code";
        }
    }else{
        $errors['db_error'] = "Failed while checking Verification Code from database!";
    }
}

// change Password
if(isset($_POST['changePassword'])){
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);
    
    if (strlen($_POST['password']) < 8) {
        $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password_error'] = 'Password not matched';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE usersInfo SET password = '$password' WHERE email = '$email'";
            $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
            //session_unset($email);
            //session_destroy();
            header('location: AccLoginInterface.php');
        }
    }

}

if(isset($_POST["reset-new-password"])) {

    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $new_password = mysqli_real_escape_string($db, $_POST["password"]);
    $cf_password = mysqli_real_escape_string($db, $_POST["confirmpassword"]);

    if(empty($new_password)) {
        echo "<script>alert('Please Enter Your New Password!'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($cf_password)) {
        echo "<script>alert('Please Enter Your Confirm Password!'); window.history.go(-1);</script>";
        exit();
    }

    if($new_password != $cf_password) {
        echo "<script>alert('Password does not match!'); window.history.go(-1);</script>";
        exit();
    }

    $sql = "UPDATE login SET password = '$new_password' WHERE email = '$email'";

    if(!mysqli_query($db, $sql)) {
        echo "<script>alert('Update password failed!'); window.history.go(-1);</script>";
        exit();
    } else {
        echo "<script>alert('Update password success!'); window.location.href='AccLoginInterface.php';</script>";
        exit();
    }


}