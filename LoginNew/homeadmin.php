<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME </title>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="calculationwarden.js"></script>
</head>
<body>
  <div id="content">Welcome Admin <?php
    if(isset($_SESSION[''])){
        echo $_SESSION[''];
    }
    ?>!</div>
  <nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav> 

	<body onload="getDateTime()">

<section>
  <b>
    <ul>
      <a href="#"><img src ="images/admin.jpeg"/><br>
    </ul>
</b>
  
  <article>
    <h1> <br>
    Admin Home Page<h1>
<p>
---------------ADMIN OF FKIS SYSTEMS ONLY-------------------------.<br>
NAME: NURUL SYAHIRAH BT OMAR.<br><br><br>
EMAIL: nlsyahirah99@gmail.com.<br><br><br>
edited first version of FKIS System.<br><br><br>
<div  class="date" id="currDateTime"> </div>
</div>
</p>
</article>
</section><br>

<footer>
  <a href="/FKIS-MAINTENANCE-CB18123/Login/fb.php" class="fa fa-facebook"></a>
<a href="/FKIS-MAINTENANCE-CB18123/Login/twitter.php" class="fa fa-twitter"></a>
<a href="/FKIS-MAINTENANCE-CB18123/Login/ig.php" class="fa fa-instagram"></a>
<a href="/FKIS-MAINTENANCE-CB18123/Login/ws.php" class="fa fa-whatsapp"></a>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px; 
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-whatsapp {
  background: #128C7E  ;
  color: white;
}

.fa-instagram {
  background: #cd486b;
  color: white;
}

</style>

</footer>
  
</body>
</html> 