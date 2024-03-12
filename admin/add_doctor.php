<?php
  session_start();
  include('../db_connect.php');
  if(!isset($_SESSION['admin_name'])){
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin login</title>
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <style type="text/css">
      .container{
      width:500px;
      border:none;
      padding:23px;
      color:darkblue;
      background:silver;
      margin-bottom:5%;
      border-radius:10px;
    }
    button{margin-left:40%;}
  </style>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow">
            <?php include('header.php'); ?>       

<div class="ui-theme-settings">
    <div class="theme-settings__inner">
        <div class="scrollbar-container">
            <div class="theme-settings__options-wrapper">
                <div class="p-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                            <div class="switch-animate switch-on">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                            <div class="switch-animate switch-on">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>        

<div class="app-main">
    <?php include('sidebar.php'); ?>

        <div class="app-main__outer">
          <div class="app-main__inner">              
    <div class="container">
        <h2 class="text-center">Doctor Registration</h2>
    <form action="add_doctoraction.php" method="post">
        <div class="form-group mt-3">
    <label for="firstname">Your Name</label>
    <input type="text" class="form-control" id="exampleInputfirstname" name="name">
  </div>
  <div class="form-group">
    <label for="phoneno">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputphoneno" name="phone">
  </div>
  <div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="d-flex">
  <div class="form-group col-md-6">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="Password">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="cpassword">
  </div>
</div>
<div class="d-flex">
    <div class="col-md-6">
        <div class="form-group">
            <?php
            $sql = "SELECT * FROM city GROUP BY id;";
            $result = mysqli_query($con,$sql);
            if ($result) {
            echo '<label class="control-label" for="">City:</label>';
            echo '<select id="" name="city" class="form-control">';
                echo '<option>Select</option>';
                $num_results = mysqli_num_rows($result);
                for ($i=0;$i<$num_results;$i++) {
                    $row = mysqli_fetch_array($result);
                    $name = $row['city'];
                    echo '<option value="' .$name. '">' .$name. '</option>';
                }
            echo '</select>';
            }
            // mysqli_close($conn);
            ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php
            $sql = "SELECT * FROM specialist GROUP BY id;";
            $result = mysqli_query($con,$sql);
            if ($result) {
            echo '<label class="control-label" for="appointmentfor">Specialist:</label>';
            echo '<select id="appointmentfor" name="specialist" class="form-control">';
                echo '<option>Select</option>';
                $num_results = mysqli_num_rows($result);
                for ($i=0;$i<$num_results;$i++) {
                    $row = mysqli_fetch_array($result);
                    $name = $row['specialist'];
                    echo '<option value="' .$name. '">' .$name. '</option>';
                }
            echo '</select>';
            }
            // mysqli_close($conn);
            ?>
        </div>
    </div>
</div>
<div class="d-flex">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">Date of Joining:</label>
            <input type="date" name="doj" id="date" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php
            $sql = "SELECT * FROM country GROUP BY id;";
            $result = mysqli_query($con,$sql);
            if ($result) {
            echo '<label class="control-label" for="appointmentfor">Country:</label>';
            echo '<select id="appointmentfor" name="country" class="form-control">';
                echo '<option>Select</option>';
                $num_results = mysqli_num_rows($result);
                for ($i=0;$i<$num_results;$i++) {
                    $row = mysqli_fetch_array($result);
                    $name = $row['country'];
                    echo '<option value="' .$name. '">' .$name. '</option>';
                }
            echo '</select>';
            }
            // mysqli_close($con);
            ?>
        </div>
    </div>
</div>
<div class="d-flex">
    <div class="col-md-6">
        <div class="form-group">
            <?php
            $sql = "SELECT * FROM qualification GROUP BY id;";
            $result = mysqli_query($con,$sql);
            if ($result) {
            echo '<label class="control-label" for="appointmentfor">Qualification:</label>';
            echo '<select id="appointmentfor" name="qualification" class="form-control">';
                echo '<option>Select</option>';
                $num_results = mysqli_num_rows($result);
                for ($i=0;$i<$num_results;$i++) {
                    $row = mysqli_fetch_array($result);
                    $name = $row['qualification'];
                    echo '<option value="' .$name. '">' .$name. '</option>';
                }
            echo '</select>';
            }
            mysqli_close($con);
            ?>
        </div>
    </div>
        <div class="form-group col-md-6">
            <label for="address">Address:</label>
            <textarea name="address" rows="1" class="form-control" placeholder="Enter address"></textarea>
        </div>
    </div>
  <button type="submit" class="btn btn-primary" name="create">Sign up</button>
</form>
</div>
    </div>
  </div>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </div>
    </div>
  <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery-3.6.4.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  </script>
  </body>
</html>