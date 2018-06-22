<?php 

?> 
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/src2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 07:20:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/favicon.ico">

    <title>Crypto Admin - Dashboard</title>
    
  	<!-- Bootstrap 4.0-->
  	<link rel="stylesheet" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
      
  	<!--amcharts -->
  	<link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
  	
  	<!-- Bootstrap-extend -->
    <link rel="stylesheet" href="css/bootstrap-extend.css">
    
    <!-- cryptocoins fonts -->
    <link rel="stylesheet" href="css/webfont/cryptocoins-colors.css">
    <link rel="stylesheet" href="css/webfont/cryptocoins.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
  

  	<!-- theme style -->
  	<link rel="stylesheet" href="css/master_style.css">
  	
  	<!-- Crypto_Admin skins -->
  	<link rel="stylesheet" href="css/skins/_all-skins.css">
  	
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

     
  </head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			
		  
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
           
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header">Crypto News</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu inner-content-div" >
                  <!-- <li id="newstories">
                    <a href="#">
                       Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li> -->
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks -->
         
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="http://html-templates.multipurposethemes.com/bootstrap-4/admin/crypto-admin/crypto-dark-admin/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  <?php print($userRow['user_name']); ?>
                  <small class="mb-5"><?php print($userRow['user_email']); ?></small>
                  <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="#"><i class="ti-settings"></i> Account Setting</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="logout.php?logout=true"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>