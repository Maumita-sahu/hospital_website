<?php 
include 'db_connect.php';
global $con;
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$service=$_POST['service'];
$doctor=$_POST['doctor'];
$gender=$_POST['gender'];
$patient_id=$_POST['patient_id'];

$sql="INSERT INTO `appointment`(`patient_id`,`username`,`email`,`phone`,`date`,`time`,`service`,`doctor`,`gender`) VALUES ('$patient_id','$username','$email','$phone','$date','$time','$service','$doctor','$gender')";

$result=mysqli_query($con,$sql);
if($result){
	echo "<script>alert('successfully your appointment registerd');window.location.href='index.php'</script>";
}
else{
	echo "<script>alert('sorry!not registerd your appointment');window.location.href='index.php'</script>";
}
?>