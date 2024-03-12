<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include('db_connect.php');
		$email = $_POST['email'];
		$password =$_POST['password'];
		$error = "Invalid username/password";

	    //to prevent from mysqli injection
	    $email= stripslashes($email);
	    $password =stripslashes($password);
	    $email= mysqli_real_escape_string($con, $email);
	    $password = mysqli_real_escape_string($con, $password);

	    
	    $sql="SELECT * FROM `patient` WHERE password='$password' AND email='$email'";
	    // echo $sql; die();
	    $result = mysqli_query($con,$sql);
	    $count = mysqli_num_rows($result);

	    if($count>0){  
	    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	    session_start();
	    $_SESSION['user_id']=$row['patient_id'];
	    $_SESSION['email']=$row['email'];
	    $_SESSION['phone']=$row['phone'];
	    $_SESSION['name']=$row['name'];
	    $_SESSION['password']=$row['password'];
	    $_SESSION['image']=$row['image'];
	    header('location:index.php');		
            // echo "<script>alert('Sucessfully login in our website');window.location.href='index.php'</script>";  
        }  
        else{  
            echo "<script>alert('Error!invalid username and password.');window.location.href='index.php'</script>";
        }     
	}
?>

