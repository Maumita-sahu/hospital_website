<?php
session_start();
include('db_connect.php');
$app_id=$_GET['app_id'];

global $con;
$sql="UPDATE `appointment` SET `cancel_status`=1 WHERE id = '$app_id'";
$query=mysqli_query($con,$sql);

if ($query) {
	echo "<script>alert('Appointment Cancel.');window.location.href='myappointment.php';</script>";
}
else{
	echo "<script>alert('Something went wrong. Please try again.');window.location.href='myappointment.php';</script>";
}

?>