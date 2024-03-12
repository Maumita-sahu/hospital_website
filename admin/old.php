<?php
// session_start();
// if(!isset($_SESSION['admin_name'])){
// 	header('location:index.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>       

 <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        
                        <li class="app-sidebar__heading">UI Components</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Elements
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="elements-buttons-standard.html">
                                        <i class="metismenu-icon"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-dropdowns.html">
                                        <i class="metismenu-icon">
                                        </i>Dropdowns
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-icons.html">
                                        <i class="metismenu-icon">
                                        </i>Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-badges-labels.html">
                                        <i class="metismenu-icon">
                                        </i>Badges
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-cards.html">
                                        <i class="metismenu-icon">
                                        </i>Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-list-group.html">
                                        <i class="metismenu-icon">
                                        </i>List Groups
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-navigation.html">
                                        <i class="metismenu-icon">
                                        </i>Navigation Menus
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon">
                                        </i>Utilities
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-car"></i>
                                Components
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="components-tabs.html">
                                        <i class="metismenu-icon">
                                        </i>Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="components-accordions.html">
                                        <i class="metismenu-icon">
                                        </i>Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="components-notifications.html">
                                        <i class="metismenu-icon">
                                        </i>Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="components-modals.html">
                                        <i class="metismenu-icon">
                                        </i>Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="components-progress-bar.html">
                                        <i class="metismenu-icon">
                                        </i>Progress Bar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tooltips-popovers.html">
                                        <i class="metismenu-icon">
                                        </i>Tooltips &amp; Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">
                                        <i class="metismenu-icon">
                                        </i>Carousel
                                    </a>
                                </li>
                                <li>
                                    <a href="components-calendar.html">
                                        <i class="metismenu-icon">
                                        </i>Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-pagination.html">
                                        <i class="metismenu-icon">
                                        </i>Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href="components-scrollable-elements.html">
                                        <i class="metismenu-icon">
                                        </i>Scrollable
                                    </a>
                                </li>
                                <li>
                                    <a href="components-maps.html">
                                        <i class="metismenu-icon">
                                        </i>Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li  >
                            <a href="tables-regular.html">
                                <i class="metismenu-icon pe-7s-display2"></i>
                                Tables
                            </a>
                        </li>
                    </ul>
                </div>
              </div>
            </div>    
         </div>

         
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