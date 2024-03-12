<?php
        session_start();
        include('../db_connect.php');
        if(!isset($_SESSION['admin_name'])){
          header("location:index.php");
        }
     ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin_Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin_dashboard.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
    <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
    <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
    </a>
    <!-- User menu (mobile) -->
    <div class="navbar-user d-lg-none">
    <!-- Dropdown -->
    <div class="dropdown">
      <!-- Toggle -->
      <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar-parent-child">
              <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
              <span class="avatar-child avatar-badge bg-success"></span>
          </div>
      </a>
      <!-- Menu -->
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
          <a href="#" class="dropdown-item">Profile</a>
          <a href="#" class="dropdown-item">Settings</a>
          <a href="#" class="dropdown-item">Billing</a>
          <hr class="dropdown-divider">
          <a href="#" class="dropdown-item">Logout</a>
      </div>
    </div>
    </div>

        <!-- Divider -->
    <hr class="navbar-divider my-5 opacity-20">
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-4">
      <li>
          <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
              Contacts
              <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
          </div>
      </li>
      <li>
          <a href="#" class="nav-link d-flex align-items-center">
              <div class="me-4">
                  <div class="position-relative d-inline-block text-white">
                      <img alt="Image Placeholder" src="" class="avatar rounded-circle">
                      <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                  </div>
              </div>
              <div>
                  <span class="d-block text-sm font-semibold">
                      <?php echo $_SESSION['admin_name']; ?>
                  </span>
                  <span class="d-block text-xs text-muted font-regular">
                      Paris, FR
                  </span>
              </div>
              <div class="ms-auto">
                  <i class="bi bi-chat"></i>
              </div>
          </a>
      </li>
    </ul>
        <!-- Push content down -->
    <div class="mt-auto"></div>
    <!-- User (md) -->
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="bi bi-person-square"></i> Account
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="admin_logout.php">
              <i class="bi bi-box-arrow-left"></i> Logout
          </a>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidebarCollapse">
    <!-- Navigation -->
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-home" aria-hidden="true"></i> Dashboard
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-user-md" aria-hidden="true"></i> Doctor
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-user" aria-hidden="true"></i> Patient
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-sitemap" aria-hidden="true"></i> Depertment
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-users" aria-hidden="true"></i> Users
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-list-alt" aria-hidden="true"></i> Schedule
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Appointment
          </a>
      </li>
      <li class="nav-item dropdown-active">
          <a class="nav-link" href="#">
              <i class="fa fa-credit-card" aria-hidden="true"></i> Payment
          </a>
          <span></span>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-file-text" aria-hidden="true"></i> Report
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Human Resource
          </a>
      </li>
            <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-bed" aria-hidden="true"></i> Bed Manager
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-file-text-o" aria-hidden="true"></i> Notice
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-envelope" aria-hidden="true"></i> Mail
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-file-text" aria-hidden="true"></i> Pages
          <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>

          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="fa fa-list-alt faw" aria-hidden="true"></i> User Interface
          </a>
      </li>
    </ul>
    </div>
    </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
    <!-- Header -->
    <header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
    <div class="mb-npx">
      <div class="row align-items-center">
          <div class="col-sm-6 col-12 mb-4 mb-sm-0">
              <!-- Title -->
              <h1 class="h2 mb-0 ls-tight">Application</h1>
          </div>
          <!-- Actions -->
          <div class="col-sm-6 col-12 text-sm-end">
              <div class="mx-n1">
                  <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                      <span class=" pe-2">
                          <i class="bi bi-pencil"></i>
                      </span>
                      <span>Edit</span>
                  </a>
                  <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                      <span class=" pe-2">
                          <i class="bi bi-plus"></i>
                      </span>
                      <span>Create</span>
                  </a>
              </div>
          </div>
      </div>
      <!-- Nav -->
      <ul class="nav nav-tabs mt-4 overflow-x border-0">
          <li class="nav-item ">
              <a href="#" class="nav-link active">All files</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link font-regular">Shared</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link font-regular">File requests</a>
          </li>
      </ul>
    </div>
    </div>
    </header>
    <!-- Main -->
    <main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
    <!-- Card stats -->
    <div class="row g-6 mb-6">
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Active Doctors</span>
                          <span class="h3 font-bold mb-0">120</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                              <i class="fa fa-user-md ml-5"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>13%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Active Patient</span>
                          <span class="h3 font-bold mb-0">400</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                              <i class="fa fa-users"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>30%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Representative</span>
                          <span class="h3 font-bold mb-0">12</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                              <i class="fa fa-user"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>5%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Active Nurse</span>
                          <span class="h3 font-bold mb-0">100</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                              <i class="fa fa-user-md" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>10%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <div class="row g-6 mb-6">
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Pharmashist</span>
                          <span class="h3 font-bold mb-0">20</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                              <i class="fa fa-user"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>12%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Labratorist</span>
                          <span class="h3 font-bold mb-0">33</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                              <i class="fa fa-users"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>30%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Accountant</span>
                          <span class="h3 font-bold mb-0">15</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                              <i class="fa fa-users"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>5%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2">Receptionist</span>
                          <span class="h3 font-bold mb-0">50</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                              <i class="fa fa-users" aria-hidden="true"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          <i class="bi bi-arrow-up me-1"></i>10%
                      </span>
                      <span class="text-nowrap text-xs text-muted">Since last month</span>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <div class="card shadow border-0 mb-7">
      <div class="card-header">
          <h5 class="mb-0">TODAY'S PATIENT</h5>
      </div>
      <div class="table-responsive">
                <?php
              global $con;
              $sql="SELECT * FROM appointment";
              $result=mysqli_query($con,$sql);
              if(mysqli_num_rows($result)>0){
               echo'<table class="table table-hover table-nowrap">';
               echo '<thead class="thead-light">';
                  echo'<tr>';
                      echo'<th scope="col">Name</th>';
                      echo'<th scope="col">Date</th>';
                      echo'<th scope="col">Service</th>';
                      echo'<th scope="col">Fees</th>';
                      echo'<th scope="col">Meeting</th>';
                  echo'</tr>';
              echo'</thead>';
              echo'<tbody>';
                  while($data=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  echo"<tr>";                          
                      //echo"<td>" .$data['id']."</td";
                  echo '<td>'.$data["username"].'</td>';
                        // echo '<img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">';
                        // '<a class="text-heading font-semibold" href="#">
                        //     </a>'
                    echo '<td>'.$data["date"].'</td>';
                    echo '<td>'.$data["service"].'</td>';
                    echo '<td>';
                        echo '$3.500';
                    echo '</td>';
                    echo"<td>";
                    echo '<span class="badge badge-lg badge-dot">
                      <i class="bg-success"></i>Scheduled
                    </span>';
                    echo"</td>";
                      // echo'<td class="text-end">
                      //     <a href="#" class="btn btn-sm btn-neutral">View</a>
                      //     <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                      //       <i class="bi bi-trash"></i>
                      //   </button>';
                      // echo'</td>';
                      echo"</tr>";
                    }
              echo'</tbody>';
          echo'</table>';
         }
      ?>
                     <!--  <td>
                          Feb 15, 2021
                      </td>
                      <td>
                          <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png" class="avatar avatar-xs rounded-circle me-2">
                          <a class="text-heading font-semibold" href="#">
                              Dribbble
                          </a>
                      </td>
                      <td>
                          $3.500
                      </td>
                      -->
                         
      </div>
     <!-- <div class="card-footer border-0 py-5">
        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
      </div>-->
</div>
</div>
</main>
</div>
</div>
<script type="text/javascript" src="../assets/js/hospital.js"></script>
</body>
</html>