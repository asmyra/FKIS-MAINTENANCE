<?php include('RecoverController.php'); ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Recovery</title>
	<link rel="stylesheet" href="main2.css">
</head>
<body>

	<form class="login-form" action="login2.php" method="post" style="text-align: center;">
		<p>
			We sent a token as temporary password to <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	</form>
	<p><center><p><a href="AccLoginInterface.php">BACK TO LOGIN PAGE</a></</center></p>	
</body>
</html>