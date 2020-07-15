<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Science | Administrator</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/backend/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/backend/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url();?>assets/backend/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/icon.png"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-full-width">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top mega-menu">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?php echo site_url().'/Dashboard'; ?>">
			<img src="<?php echo base_url();?>assets/backend/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<li class="classic-menu-dropdown active">
					<a href="<?php echo site_url().'/Dashboard'; ?>">
						 <i class="fa fa-qrcode"></i> Main Menu
						<span class="selected">
						</span>
					</a>
				</li>
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" data-hover="dropdown" data-close-others="true" href="">
					<i class="fa fa-tasks"></i> Live Data <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>	Charts View
							</a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-th-list"></i>	 Table View
							</a>
						</li>
					</ul>
				</li>
				<li class="classic-menu-dropdown">
					<a data-toggle="dropdown" data-hover="dropdown" data-close-others="true" href="">
					<i class="fa fa-bars"></i> Historical Data <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>	Charts View
							</a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-th-list"></i>	 Table View
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo base_url();?>assets/backend/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li id="header_notification_bar" style="padding-top:10px;">
               <span class="label"><i class="fa fa-calendar"></i> Date :<?php echo date("D d-m-Y"); ?></span>
            </li>
			<!-- END TODO DROPDOWN -->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			 <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="<?php echo base_url().'assets/backend/img/avatar1_small.jpg'; ?>"/>
               <span class="username"><?php echo $tampil_nama_user; ?></span>
               <i class="fa fa-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url().'/logout'; ?>"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
               </ul>
            </li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN EMPTY PAGE SIDEBAR -->
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
			<li>
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>
			<li class="active">
				<a href="index.html">
					 <i class="fa fa-qrcode"></i> Main Menu
					<span class="selected">
					</span>
				</a>
			</li>
			<li>
				<a>
					<i class="fa fa-tasks"></i> Live Data 
					<span class="arrow">
					</span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#">
							<i class="fa fa-bar-chart-o"></i>	Charts View
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-th-list"></i>	 Table View
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class="fa fa-bars"></i> Historical Data 
					<span class="arrow">
					</span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="#">
							<i class="fa fa-bar-chart-o"></i>	Charts View
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-th-list"></i>	 Table View
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- END EMPTY PAGE SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-3 sidebar-content ">
					<ul class="ver-inline-menu tabbable margin-bottom-25">
						<li class="active">
							 <a href="<?php echo site_url().'/Dashboard'; ?>">
								<i class="fa fa-home"></i> Dashboard
							</a>
							<span class="after">
							</span>
						</li>
						<li>
							 <a href="<?php echo site_url().'/Manage_user'; ?>">
								<i class="fa fa-group"></i> Manage User
							</a>
						</li>
						<li>
							 <a href="<?php echo site_url().'/Manage_station'; ?>">
								<i class="fa fa-building-o"></i> Manage Station
							</a>
						</li>
						<li>
							 <a href="<?php echo site_url().'/Manage_sensor'; ?>">
								<i class="fa fa-video-camera"></i> Manage Sensor
							</a>
						</li>
						<li>
							 <a href="<?php echo site_url().'/Manage_station_sensor'; ?>">
								<i class="fa fa-credit-card"></i> Manage Data Station Sensor
							</a>
						</li>
						<li>
							 <a href="<?php echo site_url().'/Manage_frontend'; ?>">
								<i class="fa fa-desktop"></i> Manage Website Frontend
							</a>
						</li>
						
					</ul>
					<!-- BEGIN PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title line">
							<div class="caption">
								<i class="fa fa-comments"></i>Quick Form
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<h4>Create Record</h4>
							<form action="#">
								<div class="form-group">
									<div class="input-icon">
										<i class="fa fa-envelope"></i>
										<input type="text" class="form-control" placeholder="Title"/>
									</div>
								</div>
								<div class="form-group">
									<div class="input-icon">
										<i class="fa fa-envelope"></i>
										<input type="password" class="form-control" placeholder="Email"/>
									</div>
								</div>
								<div class="form-group">
									<div class="input-icon">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" placeholder="Remarks"/>
									</div>
								</div>
								<div class="form-group">
									<label class="checkbox">
									<input type="checkbox"/> Notify admin </label>
								</div>
								<button type="submit" class="btn purple">Submit</button>
							</form>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-9">
					<!-- BEGIN PAGE HEADER-->
					<div class="row">
							 <div class="col-md-12">
							   </h3><!-- BEGIN PAGE TITLE & BREADCRUMB--><br>
							   <h3 class="page-title">
								  Halaman Administrator <small>(Science)</small>
							   </h3>
							 <ul class="page-breadcrumb breadcrumb">
								
							  </ul>
							   <!-- END PAGE TITLE & BREADCRUMB-->
							</div>
					<?php 
                        $this->load->view($namamodule.'/'.$namafileview);
                    ?>
					
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2018 &copy; Science by Team.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/backend/plugins/excanvas.min.js"></script>
<script src="assets/backend/plugins/respond.min.js"></script>  
<![endif]-->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/backend/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/flot/jquery.flot.crosshair.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/backend/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/backend/scripts/core/app.js"></script>
<script src="<?php echo base_url();?>assets/backend/scripts/custom/charts.js"></script>
<script src="<?php echo base_url();?>assets/backend/scripts/custom/table-editable.js"></script>
<script src="<?php echo base_url();?>assets/backend/scripts/custom/form-validation.js"></script>
<script>
jQuery(document).ready(function() {       
   App.init();
   Charts.init();
   Charts.initCharts();
   Charts.initPieCharts();
   Charts.initBarCharts();
   TableEditable.init();
   FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>