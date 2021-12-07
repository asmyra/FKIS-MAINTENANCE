<?php
require_once "connect.php";
$rowCount = count($_POST["booking"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE from booking WHERE Booking_ID='". $_POST["booking"][$i] ."'");
}
header("Location:ViewBookingInterface.php");
?>
