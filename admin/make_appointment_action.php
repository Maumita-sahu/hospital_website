<?php
	
	include '../db_connect.php';
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$service=$_POST['service'];
// $patient_id=$_POST['patient_id'];

$sql="INSERT INTO `appointment`(`username`,`email`,`phone`,`date`,`time`,`service`) VALUES ('$username','$email','$phone','$date','$time','$service')";

	$result=mysqli_query($con,$sql);
	
	if($result){
		echo "<script>alert('Sucessfully your appointment registerd.');window.location.href='make_appointment.php'</script>";
	}
	else{
		echo "<script>alert('Sorry!not regiterd your apointment');window.location.href='make_appointment.php'</script>";
	}
?>