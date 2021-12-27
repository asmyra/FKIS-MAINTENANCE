<?php include('RecoverController.php'); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main2.css">
</head>
<body>
	<form class="login-form" action="newPassword.php" method="post">
		<h2 class="form-title">Change Password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New Password</label>
			<input type="password" name="password">
			<label> Confirm new password</label>
			<input type="password" name="confirmpassword">
		</div>
		<div class="form-group">
			<button type="submit" name="reset-new-password" class="login-btn">Save</button>
			<input type="hidden" value="<?php echo $_GET["email"]; ?>" name="email">
		</div>
	</form>
	<p><center><p><a href="AccLoginInterface.php">BACK TO LOGIN PAGE</a></</center></p>
</body>
</html>