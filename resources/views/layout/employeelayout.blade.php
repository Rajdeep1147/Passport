
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{asset('css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendor/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/vendor/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{asset('css/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading" data-layout="topnav" data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="" class="topnav-logo">
                                <span class="topnav-logo-lg">
                                    <img src="{{asset('images/logo-light.png')}}" alt="" height="16">
                                </span>
                                <span class="topnav-logo-sm">
                                    <img src="{{asset('images/logo_sm_dark.png')}}" alt="" height="16">
                                </span>
                            </a>

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li class="dropdown notification-list d-lg-none">
                                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-search noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                        <form class="p-3">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        </form>
                                    </div>
                                </li>
            
                                <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{asset('images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down align-middle"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="{{asset('images/flags/germany.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="{{asset('images/flags/italy.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                        </a>
                    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="{{asset('images/flags/spain.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                        </a>
    
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="{{asset('images/flags/russia.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                        </a>
    
                                    </div>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="dripicons-bell noti-icon"></i>
                                        <span class="noti-icon-badge"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
    
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5 class="m-0">
                                                <span class="float-right">
                                                    <a href="javascript: void(0);" class="text-dark">
                                                        <small>Clear All</small>
                                                    </a>
                                                </span>Notification
                                            </h5>
                                        </div>
    
                                        <div style="max-height: 230px;" data-simplebar>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                                <p class="notify-details">Caleb Flakelar commented on Admin
                                                    <small class="text-muted">1 min ago</small>
                                                </p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                                <p class="notify-details">New user registered.
                                                    <small class="text-muted">5 hours ago</small>
                                                </p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-heart"></i>
                                                </div>
                                                <p class="notify-details">Carlos Crouch liked
                                                    <b>Admin</b>
                                                    <small class="text-muted">13 days ago</small>
                                                </p>
                                            </a>
                                        </div>
    
                                      
                                    </div>
                                </li>

                                <li class="dropdown notification-list d-none d-sm-inline-block">
                                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-view-apps noti-icon"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg p-0">
    
                                        <div class="p-2">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('images/brands/slack.png')}}" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('images/brands/github.png')}}" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('images/brands/dribbble.png')}}" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>
    
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('images/brands/bitbucket.png')}}" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('images/brands/dropbox.png')}}" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{asset('images/brands/g-suite.png')}}" alt="G Suite">
                                                        <span>G Suite</span>
                                                    </a>
                                                </div>
                
                                            </div>
                                        </div>
    
                                    </div>
                                </li>

                                <li class="notification-list">
                                    <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                                        <i class="dripicons-gear noti-icon"></i>
                                    </a>
                                </li>
    
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="account-user-avatar"> 
                                            <img src="{{asset('images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name">Dominic Keller</span>
                                            <span class="account-position">Founder</span>
                                        </span>
                                    </a>
                                    
                                </li>

                            </ul>
                            <a class="navbar-toggle"  data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <div class="app-search dropdown">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </div>
                 
                                </form>

                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                                    </div>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-notes font-16 mr-1"></i>
                                        <span>Analytics Report</span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-life-ring font-16 mr-1"></i>
                                        <span>How can I help you?</span>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="uil-cog font-16 mr-1"></i>
                                        <span>User profile settings</span>
                                    </a>
    
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>
    
                                    <div class="notification-list">
                                       <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="media">
                                                <img class="d-flex mr-2 rounded-circle" src="{{asset('images/users/avatar-5.jpg')}}" alt="Generic placeholder image" height="32">
                                                <div class="media-body">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <div class="topnav shadow-sm">
                        <div class="container-fluid">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-dashboard mr-1"></i>Dashboards <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
                                                <a href="dashboard-analytics.html" class="dropdown-item">Analytics</a>
                                                <a href="dashboard-crm.html" class="dropdown-item">CRM</a>
                                                <a href="index.html" class="dropdown-item">Ecommerce</a>
                                                <a href="dashboard-projects.html" class="dropdown-item">Projects</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil-apps mr-1"></i>Apps <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                                <a href="apps-calendar.html" class="dropdown-item">Calendar</a>
                                                <a href="apps-chat.html" class="dropdown-item">Chat</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Ecommerce <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                        <a href="apps-ecommerce-products.html" class="dropdown-item">Products</a>
                                                        <a href="apps-ecommerce-products-details.html" class="dropdown-item">Products Details</a>
                                                        <a href="apps-ecommerce-orders.html" class="dropdown-item">Orders</a>
                                                        <a href="apps-ecommerce-orders-details.html" class="dropdown-item">Order Details</a>
                                                        <a href="apps-ecommerce-customers.html" class="dropdown-item">Customers</a>
                                                        <a href="apps-ecommerce-shopping-cart.html" class="dropdown-item">Shopping Cart</a>
                                                        <a href="apps-ecommerce-checkout.html" class="dropdown-item">Checkout</a>
                                                        <a href="apps-ecommerce-sellers.html" class="dropdown-item">Sellers</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Email <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="apps-email-inbox.html" class="dropdown-item">Inbox</a>
                                                        <a href="apps-email-read.html" class="dropdown-item">Read Email</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Projects <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-project">
                                                        <a href="apps-projects-list.html" class="dropdown-item">List</a>
                                                        <a href="apps-projects-details.html" class="dropdown-item">Details</a>
                                                        <a href="apps-projects-gantt.html" class="dropdown-item">Gantt</a>
                                                        <a href="apps-projects-add.html" class="dropdown-item">Create Project</a>
                                                    </div>
                                                </div>
                                                <a href="apps-social-feed.html" class="dropdown-item">Social Feed</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tasks" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Tasks <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-tasks">
                                                        <a href="apps-tasks.html" class="dropdown-item">List</a>
                                                        <a href="apps-tasks-details.html" class="dropdown-item">Details</a>
                                                        <a href="apps-kanban.html" class="dropdown-item">Kanban Board</a>
                                                    </div>
                                                </div>
                                                <a href="apps-file-manager.html" class="dropdown-item">File Manager</a>
                                            </div>
                                        </li>
                                

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                   @yield('content')

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

          <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
              <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
          </div>

          <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
              <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout width, etc.
              </div>

              <!-- Settings -->
              <h5 class="mt-3">Color Scheme</h5>
              <hr class="mt-1" />

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check"
                  checked />
                <label class="custom-control-label" for="light-mode-check">Light Mode</label>
              </div>

              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
              </div>

              <!-- Width -->
              <h5 class="mt-4">Width</h5>
              <hr class="mt-1"/>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                <label class="custom-control-label" for="fluid-check">Fluid</label>
              </div>
              <div class="custom-control custom-switch mb-1">
                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                <label class="custom-control-label" for="boxed-check">Boxed</label>
              </div>

      

              <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

              <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>
            </div> <!-- end padding-->

          </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="{{asset('js/vendor.min.js')}}"></script>
        <script src="{{asset('js/app.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{asset('js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/vendor/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('js/vendor/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('js/vendor/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/vendor/buttons.html5.min.js')}}"></script>
        <script src="{{asset('js/vendor/buttons.flash.min.js')}}"></script>
        <script src="{{asset('js/vendor/buttons.print.min.js')}}"></script>
        <script src="{{asset('js/vendor/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('vendor/dataTables.select.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->

    </body>
</html> 