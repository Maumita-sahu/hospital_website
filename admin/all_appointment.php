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
  <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
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
        <div class="card-header bg-white">
            <h5 class="mb-0">ALL APPOINTMENT DETAILS'</h5>
        </div>
        <div class="table-responsive">
                  <?php
                global $con;
                $sql="SELECT * FROM appointment";
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0){
                 echo'<table class="table table-hover table-nowrap">';
                 echo '<thead class="bg-midnight-bloom text-white">';
                    echo'<tr>';
                        echo'<th scope="col">Name</th>';
                        echo'<th scope="col">Date</th>';
                        echo'<th scope="col">Service</th>';
                        echo'<th scope="col">Fees</th>';
                        echo'<th scope="col">Meeting</th>';
                        // echo'<th scope="col">Action</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody>';
                    while($data=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        // if($data['date']==date('Y-m-d')){
                      echo"<tr>";                          
                      echo '<td>'.$data["username"].'</td>';
                      echo '<td>'.$data["date"].'</td>';
                      echo '<td>'.$data["service"].'</td>';
                      echo '<td>';
                          echo '$3.500';
                      echo '</td>';
                      echo '<td><span class="badge-dot">';
                      echo $data["cancel_status"]?'<i class="text-danger fa fa-circle"></i>&nbspCancelled':'<i class="text-success fa fa-circle"></i>&nbspScheduled';
                      echo'</span></td>';
                      // echo'<td class="text-end">
                      //   <a href="#" class="btn btn-sm btn-neutral view">View</a>
                      //   <a href="#" class="btn btn-sm btn-neutral mr-5"><i class="fa fa-trash text-danger"></i></a>   
                      // </td>';
                        echo"</tr>";
                      // }
                  }
                echo'</tbody>';
            echo'</table>';

           }
        ?>                 
        </div>
        <div class="card-footer border-0 ">
            <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
        </div>
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