<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hackathon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/static/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/static/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/static/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/static/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/static/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/static/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php Yii::app()->createUrl('Site/Index'); ?>">HACKATHON</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="<?php Yii::app()->createUrl('Site/Index'); ?>">Home</a></li>
							<li><a href="#">Work</a></li>
							<li class="has-dropdown">
								<a href="#">Others</a>
								<ul class="dropdown">
									<li><a href="#">Dropdown 1</a></li>
									<li><a href="#">Dropdown 2</a></li>
									<li><a href="#">Dropdown 3</a></li>
								</ul>
							</li>
							<li><a href="<?php Yii::app()->createUrl('Site/About'); ?>">About</a></li>
							<li><a href="<?php Yii::app()->createUrl('Site/Contact'); ?>">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<?php echo $content; ?>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-3 fh5co-widget">
					<h4>About Neat</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Latest Posts</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Amazing Templates</a></li>
						<li><a href="#">100+ Free Download Templates</a></li>
						<li><a href="#">Neat is now available</a></li>
						<li><a href="#">Download 1000+ icons</a></li>
						<li><a href="#">Big Deal for this month of March, Join Us here</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="">gettemplates.co</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Available at <a href="http://themewagon.com/" target="_blank">Themewagon</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="<?php echo Yii::app()->request->baseUrl?>/static/js/main.js"></script>

	</body>
</html>
