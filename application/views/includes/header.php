
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/foxia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 17:49:16 GMT -->
<head>
    
        <meta charset="utf-8">
        <title>GES | CRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="GES | CRM" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css">
<!-- Responsive datatable examples -->
<link href="<?php echo base_url();?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <!-- DataTables -->
      <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
     <!-- Plugin css -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/%40fullcalendar/core/main.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/%40fullcalendar/daygrid/main.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/%40fullcalendar/bootstrap/main.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/%40fullcalendar/timegrid/main.min.css" type="text/css">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- DataTables -->
    <link href="<?php echo base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url();?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    
    <!-- Sweet Alert-->
    <link href="<?php echo base_url();?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    
    <!-- Sweet Alert-->
    <link href="<?php echo base_url();?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    </head>

    <body data-sidebar="colored">


        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="d-flex">
        <div class="navbar-brand-box text-center">
            <a href="<?php echo base_url();?>index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="20">
                </span>
                <span class="logo-lg">
                    <img src="<?php echo base_url();?>assets/images/logo.png" alt="" height="30">
                </span>
            </a>
          
        </div>

        <div class="navbar-header">    
            <button type="button" class="button-menu-mobile waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button> 
            <div class="d-flex ms-auto">
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search">
                        <a href="<?php echo base_url();?>#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>


               
             
                
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user me-2" src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="Header Avatar"> 
                        <span class="d-none d-md-inline-block ms-1"><?php if ($this->session->userdata('admin_first_name')): ?>
                          <span class="d-none d-md-inline-block ms-1">
                          <?php echo htmlspecialchars($this->session->userdata('admin_first_name')); ?>
        
                        </span>
                           <?php endif; ?>
                          <i class="mdi mdi-chevron-down"></i> </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="<?php echo base_url();?>#"><i class="dripicons-user font-size-16 align-middle d-inline-block me-1"></i> Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>#"><i class="dripicons-wallet font-size-16 align-middle d-inline-block me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="<?php echo base_url();?>#"><span class="badge bg-success float-end">11</span><i class="dripicons-gear font-size-16 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>#"><i class="dripicons-lock-open font-size-16 align-middle d-inline-block me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="<?php echo base_url();?>admin/logout"><i class="dripicons-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

             
                <div class="dropdown">
                   <a href="<?php echo base_url();?>admin/logout"><button type="button" class="btn header-item  waves-effect"  data-target="#search-wrap">
                    <i class="fas fa-power-off font-size-16 align-middle me-1 text-danger"></i>
    Logout
                    </button></a> 
                </div>
            </div>
        </div>    
    </div>    
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title text-uppercase">Main</li>


                            <li>
                                <a href="<?php echo base_url();?>admin/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/lead" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="fas fa-envelope-open-text"></i>
                                    <span>Lead Services Table </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>#" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="fas fa-envelope-open-text"></i>
                                    <span>Lead Training Table </span>
                                </a>
                            </li>
                            <li>
                                 <a href="javascript: void(0);" class="has-arrow waves-effect">
                                      <i class="fas fa-cogs"></i>
                                     <span> Leads Settings </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                               
                                 <li><a href="<?php echo base_url();?>admin/lead_status"><i class="typcn typcn-cog-outline"></i>Lead Status</a></li>
                                  
                                    <li><a href="<?php echo base_url();?>admin/lead_source"><i class="typcn typcn-cog-outline"></i>Lead Source </a></li>
                                    <li><a href="<?php echo base_url();?>Masterdata/LeadServicesRequired_controller/index"><i class="typcn typcn-cog-outline"></i>Services Required</a></li>
                                    <li><a href="<?php echo base_url();?>Masterdata/Line_of_business/index"><i class="typcn typcn-cog-outline"></i>Line of business</a></li>
                                    
                                </ul>
                            </li>
                       
                            <li>
                                 <a href="javascript: void(0);" class="has-arrow waves-effect">
                                 <i class="ion ion-md-analytics"></i>
                                    <span>Create Deal</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                               
                                 <li><a href="<?php echo base_url();?>Deal_it_service/index"><i class="typcn typcn-chart-pie"></i>IT Services</a></li>
                                  
                                    <li><a href="<?php echo base_url();?>IT_Trainings/index"><i class="typcn typcn-chart-pie"></i>IT Trainings</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                 <a href="javascript: void(0);" class="has-arrow waves-effect">
                                      <i class="fas fa-cogs"></i>
                                     <span> IT Services Settings </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                               
                                <li>
                                <a href="<?php echo base_url();?>Masterdata/Project_Category_controller/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Project Category</span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url();?>Masterdata/Services_required_controller/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Services required</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Next_step_controller/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Next Step</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Project_value_controller/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Project Value </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Stages/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Stage</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Conversion_rate/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Conversion rate </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Campaign_source/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Campaign Source </span>
                                </a>
                            </li>
                            
                                </ul>
                            </li>
                           
                            <li>
                                 <a href="javascript: void(0);" class="has-arrow waves-effect">
                                      <i class="fas fa-cogs"></i>
                                     <span> IT Training Settings </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                               
                                <li>
                                <a href="<?php echo base_url();?>CustomerType_controller/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Customer Type</span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url();?>TrainingCategoryController/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Training Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Courses/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-cog-outline"></i>
                                    <span>Courses Required </span>
                                </a>
                            </li>
                            
                            </ul>
                            <li>
                                <a href="<?php echo base_url();?>ActivityController/index" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <i class="typcn typcn-contacts"></i>
                                    <span>Activity Scheduler </span>
                                </a>
                            </li>
                            <li>
                                 <a href="javascript: void(0);" class="has-arrow waves-effect">
                                      <i class="fas fa-cogs"></i>
                                     <span>Activity Settings </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                               
                                 <li><a href="<?php echo base_url();?>Type_of_Activity/index"><i class="typcn typcn-cog-outline"></i>Type of Activity</a></li>
                                 <li><a href="<?php echo base_url();?>ProjectController/index"><i class="typcn typcn-cog-outline"></i>Project</a></li>
                                 
                                 
                                </ul>
                            </li>
                       
                            <li>
                                <a href="<?php echo base_url();?>admin/calendar" class="waves-effect">
                                    <i class="dripicons-calendar"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            
          
                

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

      <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                <div class="container-fluid">