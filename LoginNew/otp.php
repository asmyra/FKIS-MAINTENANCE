<?php include('RecoverController.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>otp</title>
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    <form class="login-form" action="otp.php" method="post">
        <h2 class="form-title">otp check</h2>
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
            <label>Please enter the correct code</label>
            <input type="number" name="otp">
        </div>
        <div class="form-group">
            <button type="submit" name="verify" class="login-btn">Verify</button>
        </div>
    </form>
  
</body>
</html>