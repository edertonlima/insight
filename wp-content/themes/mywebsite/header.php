<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
	<link rel="stylesheet" id="archi-style-css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" media="all">
	
	<!-- JQUERY -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
	<script type="text/javascript">
		jQuery.noConflict();
	</script>

	<?php /* 
	<!-- CARROUSEL -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript">
		jQuery(function(){
			jQuery('#depoimento').owlCarousel({
			    loop:true,
			    nav:true,
			    items: 1,
			    mouseDrag: false,
			    touchDrag: false,
			    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"]
			})
		})
	</script>
	*/ ?>
	
</head>

<body <?php body_class(); ?>>

<!-- Page Loader -->
<div id="pageloader">
	<div class="loader-item fa fa-spin colored-border"></div>
</div>
<!-- Header Top section -->
<div class="header-top" id="top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Top Navbar Begins -->
				<div  class="navbar">
					<!-- Mail and Phone Number -->
					<div class="navbar-header">
						<ul class="header-top-left">
							<li class="dropdown collapse navbar-collapse" id="bs-example-navbar-collapse-1">Language
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"> [ <span>Eng<i class="fa fa-angle-down"></i></span> ]</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#"><span><img src="images/top-navigation/flag1.jpg" alt="flag"></span>English</a></li>
									<li><a href="#"><span><img src="images/top-navigation/flag2.jpg" alt="flag"></span>German</a></li>
									<li><a href="#"><span><img src="images/top-navigation/flag3.jpg" alt="flag"></span>French</a></li>
									<li><a href="#"><span><img src="images/top-navigation/flag4.jpg" alt="flag"></span>Italian</a></li>
									<li><a href="#"><span><img src="images/top-navigation/flag5.jpg" alt="flag"></span>Spanish</a></li>
								</ul>
							</li>
							<li> <a href="mailto:email@example.com"> <i class="flaticon-black164"></i> info@yoursite.com </a> </li>
							<li> <a href="#"> <i class="flaticon-phone46"></i> +12 123 456 789 </a> </li>
						</ul>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3"> <i class="flaticon-list50"></i> </button>
					</div>
					<!-- Social Icons -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
						<ul class="nav navbar-nav navbar-right header-top-right">
							<li><a href="#"><i class="flaticon-rss24 rss-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-facebook55 facebook-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-twitter20 twitter-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-youtube8 youtube-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-google29 google-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-dribbble14 dribble-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-vimeo3 vimeo-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-skype skype-icon"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- Top Navbar Ends -->
			</div>
		</div>
	</div>
</div>
<!-- Header Top section Ends -->
	<?php //wp_nav_menu(); ?>
	