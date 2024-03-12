<?php 
date_default_timezone_set('Asia/Kolkata');
?>
<div class="row top_header1">
	<div class="col-md-3 email_logo">
		<a href=""><i class="fa fa-envelope" aria-hidden="true"></i> abc123@gmail.com</a>
			</div>
			<div class="col-md-2 icon_logo">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-linkedin" aria-hidden="true"></i>
			</div>
			<div class="col-md-3 header_ph">
			<a href=""><i class="fa fa-phone" aria-hidden="true"></i> +91 8005977593</a>
			</div>
</div>


<div class="row top_header2 bg-white">
	<div class="col-md-12 d-flex">
		<div class="col-md-1 meanu_logo">
		<img src="assets/image/logo.png" class="imag d-block">
	</div>
	  <div class="col-md-11">
		<nav class="navbar navbar-expand-lg navbar-light nv p-1">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars"></i>
		</button>
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ml-auto">
	      	<li class="nav-item active ml-2">
	        	<a class="nav-link" href="index.php">Home</a>
	      	</li>
	      
	      	<li class="nav-item dropdown active">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patients</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="#">Patient Guide</a>
	          		<a class="dropdown-item" href="#">Find a Doctor</a>
	          		<a class="dropdown-item" href="#">International Patients</a>
	          		<a class="dropdown-item" href="#">Billing</a>
	          		<a class="dropdown-item" href="#">Insurance</a>
	          		<a class="dropdown-item" href="#">Corporate</a>
	          		<a class="dropdown-item" href="#">Rights & Responsibilities</a>
	    		</div>
			</li>

	      	<li class="nav-item dropdown active">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Spacialities</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="#">Centers of Excellence</a>
	          		<a class="dropdown-item" href="#">Depertments</a>
	          		<a class="dropdown-item" href="#">Emergency Care</a>
	        	</div>
	      	</li>
	      	<li class="nav-item active">
	        	<a class="nav-link" href="health@home.php">Health@Home</a>
	      	</li>
	      	<li class="nav-item dropdown active">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wellness</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="healthpackage.php">Health Packages</a>
	          		<a class="dropdown-item" href="#">Healthy Living</a>
	          		<a class="dropdown-item" href="#">Health Seminars</a>
	        	</div>
	      	</li>
	      	
	      	<li class="nav-item active">
	        	<a class="nav-link" href="academic.php">Academics</a>
	      	</li>
	      	<li class="nav-item dropdown active">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="#">Events</a>
	          		<a class="dropdown-item" href="#">Videos</a>
	          		<a class="dropdown-item" href="#">Press Conference</a>
	          		<a class="dropdown-item" href="#">Campaign</a>
	          		<a class="dropdown-item" href="#">EDM</a>
	        	</div>
	      	</li>
	      	<li class="nav-item dropdown active">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="#">Enquiry</a>
	          		<a class="dropdown-item" href="#">Feedback</a>
	          		<a class="dropdown-item" href="#">Careers</a>
	          		<a class="dropdown-item" href="">Volunteer</a>
	        	</div>
	      	</li>
	      	<li class="nav-item active">
	        	<a class="nav-link" href="aboutwoodland.php">AboutUs</a>
	      	</li>

	    	</ul>
	    	<form class="form-inline ml-3">
			      <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
			    </form>


	<?php if(!isset($_SESSION['name'])){ ?>	
		<button type="button" class="btn btn-info btn-round btn_submit ml-3" data-toggle="modal" data-target="#loginModal">Login</button>
		<?php
			}
			else{
				?>
				<ul>
				<li class="nav-item dropdown active" style="list-style-type: none;">
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          	<?php
		          	$user_id = $_SESSION['user_id'];
	          		
		          		 if ($_SESSION['image']==''){
		          		 	echo '<img src="assets/image/default-avatar.webp" style="height:50px;border-radius:50%;width:50px;">';
		          		 }
		          		 else{echo '<img src="assets/image/uploaded_img/'.$_SESSION['image'].'" style="height:50px;border-radius:50%;width:50px;">';
		          		} 

		          	?>
		        	</a>
		        	<div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown">
		          		<a class="dropdown-item" href="#"><?php echo $_SESSION['name']; ?></a>
		          		<a class="dropdown-item" href="myprofile.php">My Profile</a>
		          		<a class="dropdown-item" href="myappointment.php">My Appointment</a>
		          		<a class="dropdown-item" href="logout.php"><button name="logout_user">Logout</button></a>
		        	</div>
			    </li>
				</ul>
			<?php
		}
		?>
				
		</div>
		</div>
		</nav>
	</div>
</div>

	
		<div class="container">
		<div class="modal fade home" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered form-container" role="document">
			   <div class="modal-content">
			     <div class="modal-header border-bottom-0">
			       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <i class="fa fa-times text-white" aria-hidden="true"></i>
			        </button>
			      </div>
			      <div class="">
			      	<div id="login-form" class="tab-pane">
			        <div class="form-title text-center">
			          <h4>Login</h4>
			        </div>
			        <div class="d-flex flex-column">
			          <form action="login.php" method="post">
			            <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="std_email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="std_pass" placeholder="Enter password" name="password">
                    </div>
			         <button type="submit" class="btn btn-info btn-block btn-round btn-sg" onclick="return checkValidatelogin(this);">Login</button>
			          </form>
			          
			          <div class="text-center text-white delimiter">or use a social network</div>
			          <div class="d-flex justify-content-center social-buttons">
			            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
			              <i class="fa fa-twitter"></i>
			            </button>
			            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
			              <i class="fa fa-facebook"></i>
			            </button>
			            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
			              <i class="fa fa-linkedin"></i>
			            </button>
			        </div>
			      </div>
			   <div class="modal-footer d-flex justify-content-center">
			       <div class="signup-section">Not a member yet? <a href="#" class="text-white"data-toggle="modal" data-target="#SignuoModal" id="signup" onclick="$('#loginModal').modal('toggle');"> Sign Up</a></div>
			   </div>
		    </div>
		</div>
	</div>
</div>
</div>

	<div class="modal fade home" id="SignuoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered form-container" role="document">
			   <div class="modal-content">
			     <div class="modal-header border-bottom-0">
			       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <i class="fa fa-times text-white" aria-hidden="true"></i>
			        </button>
			      </div>
			      <div class="">
			      	<div id="login-form" class="tab-pane">
			        <div class="form-title text-center col-md-12">
			          <h4>Signup</h4>
			        </div>
			        <div class="flex-column">
			          <form action="signup.php" method="post" enctype="multipart/form-data">
			          	<div class="d-flex">
				      	<div class="form-group">
				            <label for="name">Your Name:</label>
				            <input type="text" class="form-control" id="std_name1" placeholder="Enter Your name" name="name" onkeyup="validAlfabets();">
				        </div>
				        <div class="form-group ml-2">
				            <label for="email">Email:</label>
				            <input type="email" class="form-control" id="std_email1" placeholder="Enter email" name="email">
				        </div>
				    </div>
				    <div class="d-flex">
				      	<div class="form-group">
				            <label for="pwd">Password:</label>
				            <input type="password" class="form-control" id="std_pass1" placeholder="Enter password" name="password">
				        </div>
				        <div class="form-group ml-2">
				            <label for="pwd">Confirm Password:</label>
				            <input type="password" class="form-control" id="std_password1" placeholder="Enter password" name="cpassword">
				        </div>
				    </div>
				    <div class="d-flex">
				      	<div class="form-group">
				            <label for="dob">DOB:</label>
				            <input type="date" class="form-control" id="std_dob" placeholder="Enter date of birth" name="dob">
				        </div>
				        <div class="form-group ml-5">
				            <label for="phone">Phone No:</label>
				            <input type="text" class="form-control" id="std_phone" placeholder="Enter phone no" name="phone">
				        </div>
				    </div>
			        <div class="form-group">
			            <label for="address">Address:</label>
			            <textarea name="address" class="form-control" placeholder="Enter address"></textarea>
				    </div>
				    <div class="form-group">
				            <label for="image">Image:</label>
				            <input type="file" class="form-control" id="std_image" name="image" accept="image/jpg,image/jpeg,image/png">
				    </div>
				      <button type="submit" class="btn btn-info btn-block btn-round btn-sg" onclick="return checkValidateSignUP(this);">Register</button>
				      </form>
				 
			      </div>
			          <div class="d-flex justify-content-center">
			        <div class="signup-section">If you have an account?<a href="#" class="text-white" data-toggle="modal" data-target="#loginModal" id="login" onclick="$('#SignuoModal').modal('toggle');"> Login</a>
					</div>
			      </div>
		    </div>
		</div>
	</div>
</div>
</div>
</div>
