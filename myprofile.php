<?php
	include('db_connect.php');
	session_start();
	$user_id=$_SESSION['user_id'];
	global $con;
	if(isset($_POST['update_profile'])){
	$update_name=$_POST['update_name'];
	$update_email=$_POST['update_email'];
	$update_pass=$_POST['update_pass'];
	$new_pass=$_POST['new_pass'];
	$confirm_pass=$_POST['confirm_pass'];
	$old_pass = $_POST['old_pass'];
	
   // $update_name = mysqli_real_escape_string($conn,$update_name);
   // $update_email = mysqli_real_escape_string($conn,$update_email);
		
   mysqli_query($con, "UPDATE `login` SET username = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   
   $update_pass = mysqli_real_escape_string($con,$update_pass);
   $new_pass = mysqli_real_escape_string($con,$new_pass);
   $confirm_pass = mysqli_real_escape_string($con,$confirm_pass);

   	if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      	if($update_pass != $old_pass){
         echo 'old password not matched!';
      	}
      	elseif($new_pass != $confirm_pass){
         echo'confirm password not matched!';
      	}
      	else{
         mysqli_query($con, "UPDATE `login` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         echo 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'assets/image/uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 200000){
         echo 'image is too large';
      }else{
         $image_update_query = mysqli_query($con, "UPDATE `login` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
            $_SESSION['image']=$update_image;
         }
         echo'image updated succssfully!';
      }
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets\css\hospital.css">
   <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
   <style>
   .update-profile{min-height: 100vh;background-color: light-bg;display: flex;align-items: center;justify-content: center;padding:20px;}
   .update-profile form{padding:20px;background-color: white;box-shadow: 10px;text-align: center;width:700px;text-align: center;border-radius: 5px;}
   .update-profile form img{height: 200px;width: 200px;border-radius: 50%;object-fit: cover;margin-bottom: 5px;}
   .update-profile form .flex{display: flex;justify-content: space-between;margin-bottom: 20px;gap:15px;}
   .update-profile form .flex .inputBox{width: 49%;padding: 0 10px;}
   .update-profile form .flex .inputBox span{text-align: left;display: block;margin-top: 15px;font-size: 17px;color:black;}
   .update-profile form .flex .inputBox .box{width: 100%;border-radius: 5px;background-color:light-bg;padding:12px 14px;font-size: 17px;color:black;margin-top: 10px;}
   .btn{width:18%;height:40px;border-radius:5px;}
   .update-profile a{text-decoration:none;}

@media (max-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}
   </style>

</head>
<body>
   
<div class="update-profile">
	<?php
      $select = mysqli_query($con, "SELECT * FROM `login` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
      }
   ?>
  	

   <form action="" method="post" enctype="multipart/form-data">
      	<?php
	  		if ($_SESSION['image']==''){
	  		 	echo '<img src="assets/image/default-avatar.webp">';
	  		}
	  		 else{echo '<img src="assets/image/uploaded_img/'.$_SESSION['image'].'">';
	  		} 
  		?>
      <div class="flex">
      	
      	<div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $_SESSION['name']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $_SESSION['email']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $_SESSION['password']; ?>" placeholder="fhvb">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
         
      <input type="submit" value="update profile" name="update_profile" class="btn bg-info text-white">
      <a href="index.php" class="delete-btn text-dark">go back</a>
   </form>

</div>

</body>
</html>