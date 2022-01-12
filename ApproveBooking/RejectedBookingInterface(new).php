<?php
	 $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
     mysqli_select_db($link, "fkisdb") or die(mysqli_error($link));
     $sql = "SELECT * FROM booking WHERE Booking_Status='Rejected'";
     
     $result = mysqli_query($link, $sql) or die(mysqli_error($link));
     
  mysqli_close($link);
	?>
<!DOCTYPE html>	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejected Booking</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
    <h1><b>Rejected Booking list</b></h1>
<center>
    <form name ="goodsform" action="" method="post"> 
      <table style="border: 3px solid maroon;margin:10px;padding:50px; width:60%;">
      <tr>
          <th colspan="5">Booking ID</th>
		  <th colspan="5">Staff ID</th>
		  <th colspan="5">Status</th>
          <th colspan="5">Note</th>
        </tr>
        
    <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        if($i%2==0)
             $classname="evenRow";
        else
             $classname="oddRow";
    ?>
         <tr class="<?php if(isset($classname)) echo $classname;?>">
          <td><input type="checkbox" name="booking[]" value="<?php echo $row["Booking_ID"]; ?>" ><?php echo $row["Booking_ID"];?></td>
          <td colspan="5"><?php echo $row['Booking_ID']?></td>
		  <td colspan="5"><?php echo $row['Staff_ID']?></td>
		  <td colspan="5"><?php echo $row['Booking_Status']?></td>
          <td colspan="5"><?php echo $row['Note']?></td>
        </tr>
    <?php
        $i++;
        }
    ?>
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
		  <script type="text/javascript" src="updatedelete.js"></script>
          <td><input type="submit" name="approve" value="Approve" onClick="updateGood();"></td>
          <td><input type="submit" name="delete" value="Delete"  onClick="deleteBooking();"></td>
          </tr>
          
          
        </table>
        </form> 
 
		
      </div>
	</center>
  </body>
</html>
