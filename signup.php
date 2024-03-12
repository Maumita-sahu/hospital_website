<?php
include ('db_connect.php');
global $con;
$username=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$dob=$_POST["dob"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$image=$_FILES['image']['name'];
if($image!=''){
	$image_size=$_FILES['image']['size'];
	$image_tmp_name=$_FILES['image']['tmp_name'];
	$image_folder='image/upload_img/'.$image;
}
else{
	$image_folder='';
}

date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d H:i:s');
$exists=false;
if(($password==$cpassword) && $exists==false){
	$sql="INSERT INTO `patient` (`name`, `email`, `password`, `phone`, `dob`, `address`, `image`, `date`) VALUES ('$username','$email','$password','$phone','$dob','$address','$image','$date')";
	$result=mysqli_query($con,$sql);
	if($result){
		if($image!=''){
			move_uploaded_file($image_tmp_name, $image_folder);
		}
		echo "<script>alert('Sucess!your account created.Now you can login.');window.location.href='index.php'</script>";
	}
	
}
else{
	echo "<script>alert('Error!Password not matched');window.location.href='index.php'</script>";
	if ($image_size>200000) {
		echo "<script>alert('image size is too large!');window.location.href='index.php'</script>";
	}

}

?>
