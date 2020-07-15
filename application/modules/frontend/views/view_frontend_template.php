<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8" />
    <title>Metronic Frontend | Home with Top Bar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo base_url();?>assets/frontend/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>assets/frontend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo base_url();?>assets/frontend/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="<?php echo base_url();?>assets/frontend/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url();?>assets/frontend/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>assets/frontend/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>assets/frontend/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url();?>assets/frontend/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>assets/frontend/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->

  <link rel="shortcut icon" href="<?php echo base_url();?>assets/icon.png"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
    <!-- BEGIN STYLE CUSTOMIZER -->
   
    <!-- END BEGIN STYLE CUSTOMIZER -->     

    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-default navbar-static-top">
        <!-- BEGIN TOP BAR -->
        <div class="front-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <ul class="list-unstyled inline">
                            <li><i class="fa fa-phone topbar-info-icon top-2"></i>Call us: <span>(1) 456 6717</span></li>
                            <li class="sep"><span>|</span></li>
                            <li><i class="fa fa-envelope-o topbar-info-icon top-2"></i>Email: <span>info@keenthemes.com</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 login-reg-links">
                        <ul class="list-unstyled inline">
						   <li class="sep"><span>|</span></li>
                            <li><a href="<?php echo site_url().'/login'; ?>"><i class="fa fa-sign-in"></i> Sign in</a></li>
                            <li class="sep"><span>|</span></li>
                         
                        </ul>
                    </div>
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->
		<div class="container">
			<div class="navbar-header">
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN LOGO (you can use logo image instead of text)-->
				<a class="navbar-brand logo-v1" href="<?php echo site_url();?>">
					<img src="<?php echo base_url();?>assets/frontend/img/logo_blue.png" id="logoimg" alt="">
				</a>
				<!-- END LOGO -->
			</div>
		
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
                     <li><a href="<?php echo site_url();?>"><i class="fa fa-home"></i> Home</a></li>
                     <li><a href="#"><i class="fa fa-bookmark-o"></i> Technical Area</a></li>
                     <li><a href="#"><i class="fa fa-rss"></i> News</a></li>                     
             </ul>                         
            </div>
            <!-- BEGIN TOP NAVIGATION MENU -->
		</div>
    </div><br><br>
    <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->   
        <div class="container min-hight margin-bottom-40">
            <div class="row">
            <div class="col-md-3">
                    <ul class="ver-inline-menu tabbable margin-bottom-10">
                      <li class="active">
                         <a data-toggle="tab" href="#tab_1">
                         General Questions
                         </a> 
                         <span class="after"></span>                                    
                      </li>
                      <li><a data-toggle="tab" href="#tab_2">Membership</a></li>
                      <li><a data-toggle="tab" href="#tab_3">Terms Of Service</a></li>
                      <li><a data-toggle="tab" href="#tab_1">License Terms</a></li>
                      <li><a data-toggle="tab" href="#tab_2">Payment Rules</a></li>
                      <li><a data-toggle="tab" href="#tab_3">Other Questions</a></li>
                    </ul>        
                </div>
                <div class="col-md-9">
                     <!-- BEGIN REVOLUTION SLIDER --> 				 
        <div class="fullwidthbanner-container slider-main">
            <div class="fullwidthabnner">
                <ul id="revolutionul" style="display:none;">            
                        <!-- THE FIRST SLIDE -->
						<?php foreach($slider as $data) { ?>
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="<?php echo base_url();?>assets/frontend/img/<?php echo $data->image;?>" alt="">
                           
                            <div class="caption lft slide_title slide_item_left"
                                 data-x="0"
                                 data-y="105"
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="" style="margin-left:20px; color:white; font-size:40px;">
                                 <?php echo $data->title;?>
                            </div>
                            <div class="caption lft slide_desc slide_item_left"
                                 data-x="0"
                                 data-y="220"
                                 data-speed="400"
                                 data-start="2500"
                                 data-easing="" style="margin-left:20px; color:white; font-size:20px;">
                                <?php echo $data->description;?>
                            </div>
                                             
                 
                        </li>
						<?php } ?>
                     
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div><br><br>
        <!-- END REVOLUTION SLIDER -->
                </div>
                <div class="col-md-3"><p></p></div>
                    <div class="col-md-9"> 
                        <div class="col-md-6">
                            <h4 style="text-align: center;"><i class="fa fa-bookmark-o"></i>  Technical Area</h4>
                            <hr>
							<?php foreach($tech as $data) { ?>
								<div class="col-md-12">
								<div class="col-md-5">
									<h4>&nbsp </h4>
									<img src="<?php echo base_url();?>assets/frontend/img/<?php echo $data->image;?>" alt="" class="img-responsive">
								</div>
								<div class="col-md-7">
									<h2><a href="#"><?php echo $data->title;?></a></h2>
									<ul class="blog-info">
										<li><i class="fa fa-calendar"></i> <?php echo $data->tgl;?></li>
									  
									</ul>
									<p><?php echo $data->description;?></p>
									<a class="more" href="detail.html">Read more <i class="fa fa-angle-right"></i></a>
								</div>
								</div>
							<?php } ?>
                        </div>
                        <div class="col-md-6">
                            <h4 style="text-align: center;"><i class="fa fa-rss"></i> What's News</h4>
                            <hr>
							<?php foreach($news as $data) { ?>
								<div class="col-md-12">
								<div class="col-md-5">
									<h4>&nbsp </h4>
									<img src="<?php echo base_url();?>assets/frontend/img/<?php echo $data->image;?>" alt="" class="img-responsive">
								</div>
								<div class="col-md-7">
									<h2><a href="#"><?php echo $data->title;?></a></h2>
									<ul class="blog-info">
										<li><i class="fa fa-calendar"></i> <?php echo $data->tgl;?></li>
									  
									</ul>
									<p><?php echo $data->description;?></p>
									<a class="more" href="detail.html">Read more <i class="fa fa-angle-right"></i></a>
								</div>
								</div>
							<?php } ?>
                        </div>
					
					

                           
				     </div>
             </div> 
         </div>

 <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <p>
                        <span class="margin-right-10">2018 © Science. ALL Rights Reserved.</span> 
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <ul class="social-footer">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
                    </ul>                
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/frontend/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="<?php echo base_url();?>assets/frontend/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/frontend/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/frontend/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/plugins/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/scripts/app.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/scripts/index.js"></script>    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
          