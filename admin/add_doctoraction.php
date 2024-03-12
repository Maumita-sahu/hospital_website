<?php
	session_start();
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include '../db_connect.php';
		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$cpassword=$_POST['cpassword'];
		$city=$_POST['city'];
		$specialist=$_POST['specialist'];
		$doj=$_POST["doj"];
		$country=$_POST['country'];
		$qualification=$_POST['qualification'];
		$address=$_POST['address'];	
		global $con;
		date_default_timezone_set("Asia/Kolkata");
		$date=date('Y-m-d');
		$exists=false;
		if(($password==$cpassword) && $exists==false){
			$sql="INSERT INTO `doctor` (`name`, `phone`, `email`,`password`, `city`, `specialist`,`doj`, `country`,`Qualification`,`address`,`date`) VALUES ('$name', '$phone', '$email','$password','$city', '$specialist','$doj','$country','$qualification','$address','$date');";
			// echo $sql;
			$result=mysqli_query($con,$sql);
			if($result){
				
				echo "<script>alert('Sucess! your account created.Now you can login.');window.location.href='Add_doctor.php'</script>";
			}	
		}
		else{
			echo "<script>alert('Error! Password not matched');window.location.href='Add_doctor.php'</script>";
		}
	}
?>