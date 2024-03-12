        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="">ADMIN</div>
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
                                <i class="nav-link-icon fa fa-envelope"> </i>
                                Mail
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-bell"></i>
                                Notification
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
                  <div class="ml-4 text-danger">
                      <span class="d-block text-sm font-semibold">
                          <?php echo $_SESSION['admin_name']; ?>
                      </span>
                      <span class="d-block text-xs font-regular">
                          Paris, FR <i class="fa fa-comment text-success"></i>
                      </span>
                  </div>
                    <div class="header-btn-lg pr-0 ">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                  <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img class="rounded-circle" src="../assets/image/default-avatar.webp" alt="" style="height:40px;border-radius:50%;width:40px;">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                        <a href="" class="dropdown-item ml-3">Add Account</a>
                                        <a href="" class="dropdown-item ml-4"> Settings</a>
                                        <a href="admin_logout.php" class="dropdown-item ml-4">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 