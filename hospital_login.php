<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/hospital.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="assets/image/hospital-logo.jpg" rel="icon">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
  <div class="row">
    
  <!-- Signin & Signup -->
  <a class="btn btn-primary" href="#" data-toggle="modal" data-target=".login-register-form">
  Login - Registration Modal
  </a>

  <!-- Login / Register Modal-->
  <div class="modal fade login-register-form" role="dialog">
  <div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span>
        </button>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
            <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
        </ul>
    </div>
    <div class="modal-body">
        <div class="tab-content">
            <div id="login-form" class="tab-pane fade in active">
                <form action="/">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
            <div id="registration-form" class="tab-pane fade">
                <form action="/">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="newemail">Email:</label>
                        <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
                    </div>
                    <div class="form-group">
                        <label for="newpwd">Password:</label>
                        <input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
            </div>

        </div>
    </div>
<!--<div class="modal-footer">-->
<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--</div>-->
      </div>
     </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script type="text/javascript">
$(document).ready(function() {             
$('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
</script>
</body>
</html>