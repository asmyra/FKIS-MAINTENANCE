<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<nav>FKIS Registration SYSTEM</nav>
	<center>
	USER Register :
<?php 
	if(isset($_GET['login'])){
		if($_GET['login']=="fail"){
			echo "<div class='alert'>Username dan Password are not correct!</div>";
		}
	}
	?>
	
	
		<form action="registration.php" method="post">
			 <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?> 
            <input type="text" name="username" class="name" placeholder="Username" required><br>
            <input type="email" name="email" class="name" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="radio" name="level" id="staff" value="staff" required><label for="sstaff">Staff</label>
            <input type="radio" name="level" id="admin" value="admin" required><label for="admin">Admin</label>
            <input type="radio" name="level" id="treasurer" value="treasurer" required><label for="treasurer">Treasurer</label><br>
           
            <input type="submit" name="signup" value="Sign Up">
        </form>
        <h3>Already have a account? <a href="AccLoginInterface.php">Login</a></h3>
    </div>
			
</center>
 

</body>
</html>