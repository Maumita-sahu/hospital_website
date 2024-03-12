<?php
 include ('../db_connect.php');
 global $con;
 $username = $_POST['username'];
 $password = $_POST['password'];


 $sql="SELECT * FROM `admin` WHERE email='".$username."' AND password='".$password."'";
 $result=mysqli_query($con,$sql);
 $rows=mysqli_num_rows($result);
 if($rows){
 	$rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
 	session_start();
 	$_SESSION['username']=$rows['email'];
   $_SESSION['admin_name']=$rows['name'];
   $_SESSION['user_id']=$rows['id'];
 	header('location:admin_dashboard.php');
 }
 else{
 	echo"<script>alert('username or password don't exist');window.location.href='index.php';</script>";
 }

?>