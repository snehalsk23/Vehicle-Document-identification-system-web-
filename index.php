<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/meto/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:24:34 GMT -->
<head>
<meta charset="utf-8">
<title>Vehicle Document Identification System</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon-1.gif" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
  <?php include "header.php";?>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>meto@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	
	<!-- Banner Section Two -->
    <section class="banner-section-two">
		<div class="pattern-layer-one" style="background-image: url(images/icons/pattern-1.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/cross-icon.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-5.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/banner-icon-1.png)"></div>
		<div class="pattern-layer-five" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="auto-container">
            
			<div class="row clearfix">
					
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column" style="padding-top: 150px;">
						<h1>Vehicle Document<br> Identification System</h1>
						<div class="text"></div>
						<div class="btns-box">
							<a href="user_login.php" class="theme-btn btn-style-five"><span class="txt">Login</span></a>
							<a href="user_registration.php" class="theme-btn btn-style-five"><span class="txt">Register</span></a>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12"style="margin-top: 15%;">
					<div class="inner-column" style="    margin-top: -10%;">
						<div class="image">
							<img src="images/front.png" alt="" />
						</div>
					</div>
				</div>
			
			</div>
			
        </div>
        <!--Waves end-->
	</section>
	<!--End Banner Section-->
	

	<!-- Testimonial Section -->
	<section class="testimonial-section style-two" style="margin-top: 3%;">
		<div class="outer-section">
			<div class="cloud-one" style="background-image: url(images/icons/cloud-4.png)"></div>
			<div class="cloud-two" style="background-image: url(images/icons/cloud-4.png)"></div>
			<div class="cloud-three" style="background-image: url(images/icons/cloud-4.png)"></div>
			<div class="cloud-four" style="background-image: url(images/icons/cloud-4.png)"></div>
			
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="title">Real Testimonials</div>
					<h2>Feedback From User</h2>
					
				</div>
				
				<!-- Inner Container -->
				<div class="inner-container">
					<div class="testimonial-carousel owl-carousel owl-theme">
						
						<!-- Testimonial Block -->

						<?php 
						include "db.php";
						$asd = mysqli_query($con,"select * from feedback_table") or die (mysqli_error($con));
						$Total = mysqli_num_rows($asd);
						?>
						<?php while($fetch=mysqli_fetch_array($asd)){
						extract($fetch)

						?>
						<div class="testimonial-block style-two">
							<div class="inner-box">
								<div class="quote-icon flaticon-quote-3"></div>
								<div class="text"><?php echo $message; ?></div>
								<div class="lower-box">
									<div class="clearfix">
										<div class="pull-left">
											<div class="author-name"><?php echo $user_name; ?></div>
											<div class="designation">Subject: <?php echo $subject; ?></div>
										</div>
										<div class="pull-right">
											
										</div>
									</div>
								</div>
							</div>
						</div>
						  <?php } ?>
                       
						
				
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	

	
	<!-- Main Footer -->
   <?php include "footer.php";?>
	<!-- End Main Footer -->
	
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>

<!-- Mirrored from expert-themes.com/html/meto/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:25:23 GMT -->
</html>