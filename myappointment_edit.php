<?php
session_start();
include('db_connect.php');
 global $con;
 if(isset($_POST['update_appointment'])){
 $app_id=$_POST['appointment_id'];
 $update_name=$_POST['update_name'];
 $update_date=$_POST['update_date'];
 $update_time=$_POST['update_time'];
 $update_service=$_POST['update_service'];
 $update_doctor=$_POST['update_doctor'];

   $sql="UPDATE `appointment` SET `username`='$update_name',`date`= '$update_date',`time`= '$update_time',`service`='$update_service',`doctor`='$update_doctor' WHERE id = '$app_id'";
   $query=mysqli_query($con,$sql);
   if($query){
   	$_SESSION['username']=$update_name;
   	$_SESSION['date']=$update_date;
   	$_SESSION['time']=$update_time;
   	$_SESSION['service']=$update_service;
    $_SESSION['name']=$update_doctor;
   	echo "<script>alert('Hey! Update successfuly'); window.location.href='myappointment_edit.php?app_id=".$app_id."';</script>";
	}
    else
    {
    	echo "<script>alert('Hey! Update not successfuly');window.location.href='myappointment_edit.php?app_id=".$app_id."';</script>";

	}
 }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hospital.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 </head>
 <body>
	<?php include('header.php') ?>

 	    <div class="col-md-6 mx-auto">
        <div class="well-block text-white">
            <div class="well-title">
                <h3>Change your Appointment details ! </h3>
            </div>

            <?php 
            $app_id=$_GET['app_id'];
            $sql="SELECT * FROM appointment WHERE id='".$app_id."'";
            $query=mysqli_query($con,$sql);
            $app_data=mysqli_fetch_assoc($query);
            ?>
            <form action="" method="post">
                <!-- Form start -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        	<input type="hidden" name="appointment_id" value="<?php echo $app_data['id'];?>">
                        	<input type="hidden" name="patient_id" value="<?php echo isset($_SESSION['user_id'])?$_SESSION['user_id']:''; ?>">
                            <label class="control-label" for="name">Name</label>
                            <input name="update_name" type="text" placeholder="Name" class="form-control input-md" value="<?php echo $app_data['username']; ?>">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                        <div class="form-group">
                        	<input type="hidden" name="phone" value="<?php if (isset($_SESSION['name'])) {echo $_SESSION['phone'];} ?>">
                            <label class="control-label" for="email">Email</label>
                            <input name="email" type="text" placeholder="E-Mail" class="form-control input-md"value="<?php if (isset($_SESSION['email'])) {
                            	echo $_SESSION['email'];
                            } ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="date">Preferred Date</label>
                            <input name="update_date" type="date" placeholder="Preferred Date" class="form-control input-md" id="date" value="<?php echo $app_data['date']; ?>" >
                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="time">Preferred Time</label>
                            <input name="update_time" type="time" placeholder="Preferred Time" class="form-control input-md" id="time" value="<?php echo $app_data['time']; ?>">
                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="col-md-6">
                        <div class="form-group">
                        	<?php
                        	$sql = "SELECT * FROM service GROUP BY id;";
							$result = mysqli_query($con,$sql);
                        	if ($result) {
                            echo '<label class="control-label text-light" for="appointmentfor">Appointment For</label>';
                            echo '<select id="appointmentfor" name="update_service" class="form-control">';
                            	echo '<option>Select</option>';
                            	$num_results = mysqli_num_rows($result);
							    for ($i=0;$i<$num_results;$i++) {
							        $row = mysqli_fetch_array($result);
							        $name = $row['service'];
							        $selected=$app_data['service']==$row['service']?'Selected':'';
							        echo '<option value="' .$name. '" '.$selected.'>' .$name. '</option>';
							    }
                            echo '</select>';
                        	}
                        	// mysqli_close($con);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php
                            $sql = "SELECT * FROM doctor_name GROUP BY id;";
                            $result = mysqli_query($con,$sql);
                            if ($result) {
                            echo '<label class="control-label text-light" for="doctor">Doctor</label>';
                            echo '<select id="doctor" name="update_doctor" class="form-control">';
                                echo '<option>Select</option>';
                                $num_results = mysqli_num_rows($result);
                                for ($i=0;$i<$num_results;$i++) {
                                    $row = mysqli_fetch_array($result);
                                    $name = $row['name'];
                                    $selected=$app_data['doctor']==$row['name']?'Selected':'';
                                    echo '<option value="' .$name. '" '.$selected.'>' .$name. '</option>';
                                }
                            echo '</select>';
                            }
                            // mysqli_close($con);
                            ?>
                        </div>
                        </div>
                    <!-- Button -->
               <div class="col-md-12">
                 <div class="form-group">
               		<button id="singlebutton" name="update_appointment" class="btn btn-default app bg-white">Submit</button>
                     <a href="myappointment.php" class="delete-btn text-white ml-3">go back</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- form end -->
        </div>
 </div>

 	<?php include('footer.php'); ?>

<script type="text/javascript" src="assets/js/hospital.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>