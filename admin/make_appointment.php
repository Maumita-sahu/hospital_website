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
  <link rel="stylesheet" type="text/css" href="admin_dashboard.css">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
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
     <div class="card shadow border-0 mb-7">
        
    <div class="formbold-main-wrapper">
      <div class="formbold-form-wrapper">
        <h3 class="text-center mt-3">BOOK APPOINTMENT</h3>
        <form action="make_appointment_action.php" method="POST"> 
            <div class="d-flex mt-5">
      <div class="form-group mb-5 col-md-6">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input type="text"name="username"id="name"placeholder="Full Name"class="form-control"/>
      </div>
      <div class="form-group mb-5 col-md-6">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input type="text"name="phone"id="phone"placeholder="Enter your phone number"class="form-control"/>
      </div>
  </div>
        <div class="d-flex">
      <div class="form-group mb-5 col-md-6">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input type="email"name="email"id="email"placeholder="Enter your email"class="form-control"/>
      </div>
      <div class="flex flex-wrap formbold--mx-3 col-md-6">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="form-group mb-5">
            <label for="date" class="formbold-form-label"> Date </label>
            <input type="date"name="date"id="date" class="form-control"/>
          </div>
        </div>
    </div>
   </div>
        <div class="d-flex">

        <div class="sm:w-half formbold-px-3">
          <div class="form-group mb-5">
            <label for="time" class="formbold-form-label"> Time </label>
            <input type="time"name="time"id="time"class="form-control"/>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?php
                $sql = "SELECT * FROM service GROUP BY id;";
                $result = mysqli_query($con,$sql);
                if ($result) {
                echo '<label class="control-label text-dark" for="">Appointment For</label>';
                echo '<select id="" name="service" class="form-control">';
                    echo '<option>Select</option>';
                    $num_results = mysqli_num_rows($result);
                    for ($i=0;$i<$num_results;$i++) {
                        $row = mysqli_fetch_array($result);
                        $name = $row['service'];
                        echo '<option value="' .$name. '">' .$name. '</option>';
                    }
                echo '</select>';
                }
                // mysqli_close($con);
                ?>
            </div>
        </div>
    </div>


<!--       <div class="form-group mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2 ml-3">
          Address Details
        </label>
        <div class="flex flex-wrap formbold--mx-3">
            <div class="d-flex ml-2">
            <div class="form-group col-md-6">
              <input type="text"name="area"id="area"placeholder="Enter area"class="form-control"/>
            </div>

            <div class="form-group mb-5 col-md-6">
              <input type="text"name="city"id="city"placeholder="Enter city"class="form-control"/>
            </div>
      </div>
            <div class="d-flex ml-2">
            <div class="form-group mb-5 col-md-6">
              <input type="text" name="state"id="state"placeholder="Enter state"class="form-control"/>
            </div>
            <div class="form-group mb-5 col-md-6">
              <input type="text"name="pin-code"id="pin-code"placeholder="Pin Code"class="form-control"/>
            </div>
          </div>
        </div>
      </div> -->

      <div class="text-center">
       <button id="singlebutton" name="singlebutton" class="formbold-btn">Submit</button>
      </div>
    </form>
  </div>
</div>
 </div>
    </div>
  </div>
  <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
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