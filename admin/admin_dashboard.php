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
                         <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Active Doctor</div>
                                            <div class="">20</div>
                                        </div>
                                        <div class="widget-content-right">
                                           <div class="widget-numbers text-white"><i class="fa fa-user-md ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Active Patient</div>
                                            <div class="">400</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-users ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Representative</div>
                                            <div class="">15</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-user ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-3">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Active Nurse</div>
                                            <div class="">150</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-user-md ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-3">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Pharmashist</div>
                                            <div class="">20</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-medkit ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bg-secondary">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Labratorist</div>
                                            <div class="">33</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-user-md ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bg-primary">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Accountant</div>
                                            <div class="">15</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-users ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3 widget-content bg-warning">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Receptionist</div>
                                            <div class="">50</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><i class="fa fa-users ml-4"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <div class="card shadow border-0 mb-7">
        <div class="card-header bg-white">
            <h5 class="mb-0">TODAY'S PATIENT</h5>
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
                        if($data['date']==date('Y-m-d')){
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
                      }
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
                        
<!-- 
      <div class="row mt-3" >
            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Income Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Expenses Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Spendings Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Target</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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