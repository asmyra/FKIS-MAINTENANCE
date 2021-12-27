<?php include('RecoverController.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP verification form</title>
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    <form class="login-form" action="verifyEmail.php" method="post" autocomplete="OFF">
        <h2 class="form-title">re-enter the verification code</h2>
        <!-- form validation messages -->
        <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>      
        <div class="form-group">
            <label></label>
            <input type="number" name="OTPverify">
        </div>
        <div class="form-group">
            <button type="submit" name="verifyEmail" class="login-btn">Verify</button>
        </div>
    </form>
   
</body>
</html>