<?php
	require_once "connect.php";
    $result = mysqli_query($conn, "SELECT * FROM booking WHERE Booking_Status='Approved'");
	?>
<!DOCTYPE html>	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Booking</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
    <h1><b>Approved Booking List</b></h1>
<center>
    <form name ="goodsform" action="" method="post"> 
      <table style="border: 3px solid maroon;margin:10px;padding:50px; width:60%;">
      <tr>
          <th>Booking ID</th>
                <th>Staff ID</th>
				<th>Collection Date</th>
                <th>Item Code</th>
                <th>Item Quantity</th>
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
          <td><input type="checkbox" name="booking[]" value="<?php echo $row["Booking_ID"]; ?>"><?php echo $row["Booking_ID"];?></td>
          <td><?php echo $row["Staff_ID"]?></td>
          <td><?php echo $row["Collection_Date"]?></td>
		  <td><?php echo $row["Item_Code"]?></td>
		  <td><?php echo $row["Item_Quantity"]?></td>
		  
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
		  <script type="text/javascript" src="updatedelete.js"></script>
          <td><input type="submit" name="delete" value="Delete"  onClick="deleteBooking();"></td>
          </tr>
        </table>
        </form> 
      </div>
	</center>
  </body>
</html>
