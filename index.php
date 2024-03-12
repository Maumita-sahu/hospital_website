<?php
 session_start();
 include('db_connect.php');
?>
<?php
	 function getAllslider(){
	 	global $con;
	 	$sql="SELECT * FROM slider WHERE status=1 ORDER BY id ASC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }
	 ?>
<?php
	 function getOwlslider(){
	 	global $con;
	 	$sql="SELECT * FROM owlcarasol WHERE status=1 ORDER BY id ASC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link href="assets/image/hospital-logo.jpg" rel="icon">
</head>
<body>
<div class="container-fluid">
	<?php include('header.php') ?>

<!-- carousel area start -->

<section class="slider_area">
		<div class="">
		<div class="carasoul">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<?php
				$alldata=getAllslider();
				// print_r($alldata);
				// exit();
				?>
			<ol class="carousel-indicators">
				<?php
				for($i=0;$i<sizeof($alldata);$i++){
				 ?>

			<li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>" class="<?php echo $i==0?'active':''; ?>"></li>
			<?php } ?>
		</ol>
		<div class="carousel-inner">
				<?php
				
				if(!empty($alldata))
				{
					foreach ($alldata as $key => $slider_item) {
						
				?>
				<div class="carousel-item <?php echo $key==0?'active':''; ?>">
                <a href="#"><img src="<?php echo $slider_item['image'];?>" alt="" class="w-100"></a>
				<div class="carousel-caption d-none d-md-block <?php echo $slider_item['desc_postion']; ?>">
					<h2><?php echo $slider_item['title'];?></h2>
					<h4><?php echo $slider_item['sub_title'];?></h4>
					<?php echo !empty($slider_item['description'])?'<button>'.$slider_item['description'].'</button>':''; ?>
				</div>
			</div>
			<?php
     }
 }
	?>
				</div>
		<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</button>
	</div>
		</div>
	</div>
	
	</section>				

<!-- carousel area end -->

<!-- Counter st -->
					<div class="row mt-3">
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-user-md fa_icon" aria-hidden="true"></i>
								<h2 class="counter">2000</h2><i class="fa fa-plus text-white fa_plus" aria-hidden="true"></i>
								<h4>DOCTORS</h4>
							</div>
						</div>
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-user fa_icon"></i>
								<h2 class="counter">5000</h2><i class="fa fa-plus text-white fa_plus" aria-hidden="true"></i>
								<h4>PATIENT REVIEW</h4>
							</div>
						</div>
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-user-md fa_icon" aria-hidden="true"></i>
								<h2 class="counter">1500</h2><i class="fa fa-plus text-white fa_plus" aria-hidden="true"></i>
								<h4>NURSES</h4>
							</div>
						</div>
						<div class="col">
							<div class="counter-box">
								<i class="fa fa-bed fa_icon" aria-hidden="true"></i>
								<h2 class="counter">2000</h2><i class="fa fa-plus text-white fa_plus" aria-hidden="true"></i>
								<h4>BEDS</h4>
							</div>
						</div>
					</div>
<!--Counter End-->

		<div class="about_wood bg-white">
						<div class="row text-center">
						<div class="col-md-12">
							<h2 style="color:#B91533" class="mt-3">ABOUT AAROGYA</h2>
							<p>Established in 1946, Aarogyas Hospital, the flagship of Eastern India started as a secondary care unit and gradually developed as a Tertiary Care Unit over the years. In our 70 years of journey, we have touched the lives of millions of patients of Kolkata, Eastern India and other neighbouring countries. Since its inception we are committed to provide highest standard of medical care which matches the global benchmark with extreme sensitivity to patient needs and privacy.</p>
							<a href="aboutwoodland.php"><button>Read More</button></a>
						</div>
					</div>
					</div>

				<div class="Services mt-3">
					<div class="row text-white">
						<div class="col-md-3 text-center Services_box1">
							<i class="fa fa-medkit icon" aria-hidden="true"></i>
							<h4>Book an Appointment</h4>
							<h5>Book an appointment with our experienced doctors</h5>
							<a href="bookappointment.php"><button class="text-center">Book an Appointment</button></a>
						</div>
						<div class="col-md-3 text-center Services_box2">
							<i class="fa fa-user-md icon" aria-hidden="true"></i>
							<h4>Find a Doctor</h4>
							<h5>List of our experienced doctors</h5>
							<button class="services_btn text-center">Find a Doctor</button>
						</div>
						<div class="col-md-3 text-center Services_box3">
							<i class="fa fa-heartbeat icon" aria-hidden="true"></i>
						<h4>Health Packages</h4>
						<h5>Special health screening programs from Woodlands Hospital</h5>
							<a href="healthpackage.php"><button class="text-center">Learn More</button></a>
						</div>
						<div class="col-md-3 text-center Services_box4">
							<i class="fa fa-globe icon" aria-hidden="true"></i>
							<h4>International</h4>
							<h5>International Services provides 24-hour, 7-day a week access to patients seeking care</h5>
							<button class="text-center">Learn More</button>
						</div>
					</div>
					<div class="row text-white services_call">
						<div class="col-md-12 text-center mt-3">
						<h2>Call us at : 7604075551-53</h2>
					</div>
				</div>
			</div>

			<!-- Start Feautes -->
		<section class="Feautes section mt-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="fa fa-ambulance" aria-hidden="true"></i>
							</div>
							<h3>Emergency Help</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="fa fa-medkit" aria-hidden="true"></i>
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="fa fa-stethoscope" aria-hidden="true"></i>
							</div>
							<h3>Medical Treatment</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->

	<section class="blog_section mt-3">
            <!-- <div class="container"> -->
                <div class="blog_content text-white">
                    <div class="owl-carousel owl-theme">
                    	<?php 
                    	$getOwlslider=getOwlslider();
                    	// print_r($getOwlslider);

                    	if(!empty($getOwlslider)){
                    		foreach($getOwlslider AS $slide){
                    		?>

                        <div class="blog_item">
                            <div class="blog_image">
                                <img class="img-fluid" src="<?php echo $slide['image']; ?>" alt="images not found">
                                <span><i class="icon ion-md-create"></i></span>
                            </div>
                            <div class="blog_details">
                                <div class="blog_title">
                                    <h5><a href="#"><?php echo $slide['title']; ?></a></h5>
                                </div>
                                <p><?php echo $slide['sub_title']; ?></p>
                                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php
                    		}
                    	}
                    	?>                        
                       
                    </div>
                </div>
            <!-- </div> -->
        </section>


					<!-- Start Call to action -->
				<section class="call-action overlay mt-2" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<div class="content">
									<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
									<div class="button">
										<a href="#" class="btn">Contact Now</a>
										<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
<!--/ End Call to action -->

<!-- health tips -->
		<div class="mt-3">
				<div class="row health_heading">
						<h3 class="mt-3 mx-auto">HEALTH TIPS</h3>
				</div>
			     <div class="row">
					<div class="col-md-3 health_des">
						<img src="assets/image/tea.jpeg" class="health_img">
						<h5>Herbal Tea for Monsoon Blues</h5>
						<p>Drink herbal tea to combat monsoon diseases. Herbal tea has curative properties for coughs, colds and sore throat — common...</p>
						<button class="health_btn">Read more...</button>
					</div>
					<div class="col-md-3 health_des">
						<img src="assets/image/Coriander.jpg" class="health_img">
						<h5>Benefits of Coriander</h5>
						<p>Coriander is packed with potential health benefits including its use in the treatment of skin inflammation, high cholesterol levels, diarrhoea, mo...</p>
						<button class="health_btn">Read more...</button>
					</div>
					 <div class="col-md-3 health_des">
						<img src="assets/image/Curry-Leaves.jpg" class="health_img">
						<h5>Benefits of Curry leaves</h5>
						<p>Curry leaves are natural flavouring agents which make your food both healthy and tasty. They contain antioxidant properties & have the ability to...</p>
						<button class="health_btn">Read more...</button>
					</div>
					<!--<div class="col-md-12 health_des">
						<img src="assets/image/lichi.jpg" class="health_img">
						<h5>Benefits of Lychee</h5>
						<p>Lychee offers more than 100% of the daily requirement of ascorbic acid in a single serving. This delicious fruit is cholesterol-free and contains ...</p>
						<button class="health_btn">Read more...</button>
					</div>
					<div class="col-md-12 health_des">
						<img src="assets/image/date.jpg" class="health_img ml-2">
						<h5>Benefits of Dates</h5>
						<p>Dates are one of the very best sweet and versatile foods that can regulate the digestive process. It can significantly boost energy levels and pro...</p>
						<button class="health_btn">Read more...</button>
					</div>
					<div class="col-md-12 health_des">
						<img src="assets/image/cherry.jpg" class="health_img">
						<h5>Benefits of Cherries</h5>
						<p>Cherries are packed with antioxidants and offer many health benefits, including help with insomnia, gout, joint pain, cardiovascular disease and w ...</p>
						<button class="health_btn">Read more...</button>
					</div> -->
				
			
<!-- health tips -->
	<!-- <div class="col-md-4 video mt-3">
		<video autoplay loop muted style="height:100%;width:96%;">
			<source src="assets/image/hospital.mp4" type="video/mp4">
	    </video>
	</div> -->
</div>

</div>

<!-- map area end -->
 
 <!-- appoinment section start-->
 <div class="row mt-2">
 	<div class="col-md-12 text-center">
 		<h2>We Are Always Ready to Help You. Book An Appointment</h2>
		<img src="img/section-img.png" alt="#">
		<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
 	</div>
 	<div class="appointment-image col-lg-11 mr-3">
		<!-- <img src="assets/image/contact_appoint.png" alt="#"> -->
	
    <div class="col-md-6 custo">
        <div class="well-block">
            <!-- <div class="well-title">
                <h2>Need Help? Book an Appointment</h2>
            </div> -->
            <form action="appointment.php" method="post">
          
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        	<input type="hidden" name="patient_id" value="<?php echo isset($_SESSION['user_id'])?$_SESSION['user_id']:''; ?>">
                            <label class="control-label" for="name">Name</label>
                            <input name="username" type="text" placeholder="Name" class="form-control input-md" value="<?php if (isset($_SESSION['name'])) {
                            	echo $_SESSION['name'];
                            } ?>" readonly>
                        </div>
                    </div>
                 
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
                            <input name="date" type="date" placeholder="Preferred Date" class="form-control input-md" id="date">
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="time">Choose your time 10 AM-4 PM</label>
                            <input name="time" type="time" placeholder="Preferred Time" class="form-control input-md" id="time">
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                        	<?php
                        	$sql = "SELECT * FROM service GROUP BY id;";
							$result = mysqli_query($con,$sql);
                        	if ($result) {
                            echo '<label class="control-label" for="appointmentfor">Appointment For</label>';
                            echo '<select id="appointmentfor" name="service" class="form-control">';
                            	echo '<option>Select</option>';
                            	$num_results = mysqli_num_rows($result);
							    for ($i=0;$i<$num_results;$i++) {
							        $row = mysqli_fetch_array($result);
							        $name = $row['service'];
							        echo '<option value="' .$name. '">' .$name. '</option>';
							    }
                            echo '</select>';
                        	}
                        	
                            ?>
                        </div>
                    </div>   
                    <div class="col-md-6">
                        <div class="form-group">
                        	<?php
                        	$sql = "SELECT * FROM doctor_name GROUP BY id;";
							$result = mysqli_query($con,$sql);
                        	if ($result) {
                            echo '<label class="control-label" for="doctor">Doctor</label>';
                            echo '<select id="doctor" name="doctor" class="form-control">';
                            	echo '<option>Select</option>';
                            	$num_results = mysqli_num_rows($result);
							    for ($i=0;$i<$num_results;$i++){
							        $row = mysqli_fetch_array($result);
							        $name = $row['name'];
							        echo '<option value="' .$name. '">' .$name. '</option>';
							    }
                            echo '</select>';
                        	}
                        
                            ?>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <label><input type="radio" value="male" name="gender">Male</label>
						<label><input type="radio" value="famale"name="gender" class="ml-2">Famale</label>
						<label><input type="radio" value="other" name="gender" class="ml-2">Other</label>
                    </div>
                   
                 <div class="col-md-12">
                   <div class="form-group">
                     <button id="singlebutton" name="singlebutton" class="btn btn-default bg-primary text-white">Book An Appointment</button>
                        </div>
                    </div>
                    <h6>At first registered then make your appoinment.</h6>
                </div>
            </form>
           
        </div>
 </div>
 </div>
    <!-- <div class="col-md-6">
        <div class="well-block text-white">
            <div class="well-title">
                <h2>Why Appointment with Us</h2>
            </div>
            <div class="feature-block">
                <div class="feature feature-blurb-text">
                    <h4 class="feature-title">24/7 Hours Available</h4>
                    <div class="feature-content">
                        <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                    </div>
                </div>
                <div class="feature feature-blurb-text">
                    <h4 class="feature-title">Experienced Staff Available</h4>
                    <div class="feature-content">
                        <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                    </div>
                </div>
                <div class="feature feature-blurb-text">
                    <h4 class="feature-title">Low Price & Fees</h4>
                    <div class="feature-content">
                        <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
</div>
 <!-- appoirnment section end -->

 <?php include('footer.php'); ?>

</div>

<script type="text/javascript" src="assets/js/hospital.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script type="text/javascript" src="jquery.counterup.min.js"></script>
<script>
		jQuery(document).ready(function($){
			$('.counter').counterUp({
		    delay: 10,
		    time: 1000
			});
		})
</script>

	
	<script type="text/javascript" src="js/jquery-3.6.4.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:true,   
    smartSpeed: 3000, 
    autoplayTimeout:7000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>


<!-- Popper JS -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script> -->
<script type="text/javascript">
// $(document).ready(function() {             
// $('#loginModal').modal('show');
//   $(function () {
//     $('[data-toggle="tooltip"]').tooltip()
//   })
// });
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>