<?php
session_start();
include('db_connect.php');
 
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
    <link href="assets/image/hospital-logo.jpg" rel="icon">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <style type="text/css">
    	.popup .content {
			 position: absolute;
			 left: 50%;
			 transform: translate(-50%,-150%) scale(0);
			 width: 350px;
			 height: 430px;
			 z-index: 2;
			 text-align: center;
			 padding: 10px;
			 border-radius: 5px;
			 background:rgb(255, 153, 153);
			 z-index: 1;
		}

		.popup .close-btn {
			 position: absolute;
			 right: 20px;
			/* top: 10px;*/
			 width: 50px;
			 height: 50px;
			 color: white;
			 font-size: 30px;
			 border-radius: 50%;
			/* padding: 2px 5px 7px 5px;*/
			 background: #237be6;
			 cursor: pointer;
		 }

		.popup.active .content {
			transition: all 300ms ease-in-out;
			transform: translate(-50%,-50%) scale(1);
		}

		.input-field .validate {
			padding: 20px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			margin-bottom: 15px;
			color:#fff;
			background:#fff;
			border: 2px solid rgb(214, 214, 214);
			width: 270px;
			outline: none;
		}

		.control-label{
			float:left;
			color:#fff;
			font-weight:700;
			font-size:17px;
		}
    </style>
</head>
<body>

	<?php include('header.php') ?>
		<div class="container mt-4 ">
			<?php

                $sql="SELECT * FROM appointment WHERE patient_id='".$_SESSION['user_id']."' ORDER BY date DESC, time DESC";
                $result=mysqli_query($con,$sql);
                $sl=1;
              if(mysqli_num_rows($result)>0){
				  echo'<table class="table table-hover">';
				  echo'<thead class="thead-dark">';
                    echo'<tr class="text-center">';
                    	echo'<th scope="col">SL</th>';
                        echo'<th scope="col">Name</th>';
                        echo'<th scope="col">Email</th>';
                        echo'<th scope="col">Phone</th>';
                        echo'<th scope="col">Date</th>';
                        echo'<th scope="col">Time</th>';
                        echo'<th scope="col">Symptoms</th>';
                        echo'<th scope="col">Action</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody>';
                    while($data=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        // if($data['date']==date('Y-m-d')){
                    	?>
                      <tr class='text-left'>
                      <td scope="row"><?php echo $sl++; ?></td>
                      <td id="username<?php echo $sl; ?>"> <?php echo $data["username"]; ?></td>
                      <td><?php echo $data["email"];?></td>
                      <td id="phone<?php echo $sl; ?>"><?php echo $data["phone"]; ?></td>
                      <td id="date<?php echo $sl ?>"><?php echo date('d-m-Y',strtotime($data["date"])); ?></td>
                      <td id="time<?php echo $sl; ?>"><?php echo date('h:i A',strtotime($data["time"])); ?></td>
                      <td id="service<?php echo $sl;?>"><?php echo $data["service"];?></td>
                    <td>
                      <button type="button" class="btn
				  	  btn-primary" onclick="togglePopup(<?php echo $sl;?>);"><i class="fa fa-eye"></i></button>
				  	  <?php 
				  	  $app_time=date('H:i',strtotime($data["time"]));
				  	  $current_time=date('H:i');
				  	  $check=$data["date"].' '.$app_time;
				  	  if($data['cancel_status']){
				  	  	echo'<p class="text-danger">cancelled</p>';
				  	  }
				  	  else{
					   if ($check>=date('Y-m-d H:i')){
					   	?>
					   	<a href="myappointment_edit.php?app_id=<?php echo $data['id']; ?>" class="btn btn-success"><i class="fa fa-edit text-light"></i></a>
	            <a href="myappointment_cancel.php?app_id=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to cancel your Appointment ?');"><i class="fa fa-ban"></i></a>	
				  		<?php } 
				  		}
				  		?>
                 	  </td>
                      </tr>
                     <?php 
                  }
                  ?>
                </tbody>
            </table>

        <?php   }
        ?> 
</div>
   <div class="popup" id="popup-1">
	   <div class="content">
	   	<div class="close-btn" onclick="togglePopup()">x</div>
	   	<form action="appointment.php" method="post">
	   	  <div class="col-md-12 mt-5">
                <div class="form-group">
                    <label class="control-label" for="name">Name</label>
                    <input name="username" type="text" placeholder="Name" class="form-control input-md bg-white" value="" id="username" readonly>
                </div>
            </div>
		  <div class="col-md-12">
	            <div class="form-group">
	               <label class="control-label" for="date">Preferred Date</label>
	                <input name="date" type="text"class="form-control input-md bg-white" value="" id='preferred_date' readonly>
	            </div>
	        </div>
	        <!-- Select Basic -->
	        <div class="col-md-12">
	            <div class="form-group">
	               <label class="control-label" for="time">Preferred Time</label>
	                <input name="time" type="text" class="form-control input-md bg-white" value="" id='preferred_time' readonly>
	            </div>
	        </div>
	        <!-- Select Basic -->
	        <div class="col-md-12">
	            <div class="form-group">
	              <label class="control-label" for="appointment">Appointment For</label>
	                <input type="text" class="form-control input-md bg-white" value="" id="appointment" readonly>
	            </div>
	        </div>
	    </form>
	   </div>
	  </div>

<!-- Modal -->
<div class="modal fade mt-5" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content bg-white text-dark">
      <div class="modal-header">
      	<h6>Are you want to cancel your appointment?</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close text-danger"></i>
        </button>
      </div>
      <div class="modal-body">
      	This change will reflect in your account after some times !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>




 	<?php include('footer.php'); ?>

<script>
 function togglePopup(sl) {
 
	$('#username').val($('#username'+sl).html());
	$('#preferred_date').val($('#date'+sl).html());
	$('#preferred_time').val($('#time'+sl).html());
	$('#appointment').val($('#service'+sl).html());

	document.getElementById("popup-1")
	  .classList.toggle("active");
}

</script>
<script type="text/javascript" src="assets/js/hospital.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>