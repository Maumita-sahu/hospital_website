<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/hospital.css">

	<link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.divider:after,
		.divider:before {
		content: "";
		flex: 1;
		height: 1px;
		background: #eee;
		}
		.h-custom {
		height: calc(100% - 73px);
		}
		@media (max-width: 450px) {
		.h-custom {
		height: 100%;
		}
		}

	</style>
</head>
<body>

	<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../assets/image/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
			<form  action="adminloginaction.php" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3"></p>
            <label style="">Sign in with</label>
            <button type="button" class="btn btn-primary rounded-pill mx-1">
              <i class="fa fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary rounded-pill mx-1">
              <i class="fa fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary rounded-pill mx-1">
              <i class="fa fa-linkedin"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="std_email" class="form-control form-control-lg" placeholder="Enter a valid email address" name="username"/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="std_pass" class="form-control form-control-lg" placeholder="Enter password" name="password"/>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-sg"
              >Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
	<script type="text/javascript" href="bootstrap/js/jquery-3.6.4.min.js"></script>
	<script type="text/javascript" href="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" href="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>