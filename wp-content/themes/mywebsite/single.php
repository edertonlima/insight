<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title and Meta Tags Begins -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta charset="utf-8">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<title>In Sight Oftalmologia</title>
<!-- Title and Meta Tags Ends -->
<!-- Google Font Begins -->
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<!-- Google Font Ends -->
<!-- CSS Begins -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href='http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
<!-- Your Work -->
<link href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/YTPlayer.css" rel="stylesheet" type="text/css" />
<!--Flat Icon-->
<link href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/mb-comingsoon-iceberg.css" rel="stylesheet" type="text/css" />
<!-- Color Variations -->
<link href="<?php echo get_template_directory_uri(); ?>/css/color_panel.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/color-schemes/blue.css" id="changeable-colors" rel="stylesheet" type="text/css" />
<!-- fancynbox -->
<link href="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<!-- Main Style -->
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<!-- CSS Ends -->
</head>
<body>
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
							<?php /*
							<li class="dropdown collapse navbar-collapse" id="bs-example-navbar-collapse-1">Language
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"> [ <span>Eng<i class="fa fa-angle-down"></i></span> ]</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-navigation/flag1.jpg" alt="flag"></span>English</a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-navigation/flag2.jpg" alt="flag"></span>German</a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-navigation/flag3.jpg" alt="flag"></span>French</a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-navigation/flag4.jpg" alt="flag"></span>Italian</a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/images/top-navigation/flag5.jpg" alt="flag"></span>Spanish</a></li>
								</ul>
							</li>
							*/ ?>
							<!--<li> <a href="mailto:email@example.com"> <i class="flaticon-black164"></i> info@yoursite.com </a> </li>-->
							<?php if(get_field('telefone', 'option') != ""){ ?>
								<li> <a href="#"> <i class="flaticon-phone46"></i> <?php the_field('telefone', 'option') ?> </a> </li>
							<?php } ?>
						</ul>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3"> <i class="flaticon-list50"></i> </button>
					</div>
					<!-- Social Icons -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
						<ul class="nav navbar-nav navbar-right header-top-right">
							<li><a href="https://www.facebook.com/insightoftalmologia" target="_blank"><i class="flaticon-facebook55 facebook-icon"></i></a></li>
							<li><a href="https://www.instagram.com/insightoftalmologia" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<!--<li><a href="#"><i class="flaticon-facebook55 facebook-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-youtube8 youtube-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
							

							<?php /*
							<li><a href="#"><i class="flaticon-twitter20 twitter-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-rss24 rss-icon"></i></a></li>							
							
							<li><a href="#"><i class="flaticon-google29 google-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-dribbble14 dribble-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-vimeo3 vimeo-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-skype skype-icon"></i></a></li>
							*/ ?>
						</ul>
					</div>
				</div>
				<!-- Top Navbar Ends -->
			</div>
		</div>
	</div>
</div>
<!-- Header Top section Ends -->
<!-- Header Begins -->
<div id="sticky-section" class="sticky-navigation">
	<nav class="navbar navbar-default menu-bar" role="navigation" id="topnav">
		<div class="container">
			<div class="row">
				<div class="col-md-12 static">
					<!-- Logo and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<div class="site-logo"> <a href="<?php echo get_home_url(); ?>" class="scroll" title="In Sight Oftalmologia">In Sight Oftalmologia</a></div>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"> <span class="menu-box"><span class="menu">Menu</span><i class="flaticon-list50 menu-button"></i></span> </button>
					</div>
					<!-- Collect the nav links, buttons and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav navbar-right ">
							<li><a href="<?php echo get_home_url(); ?>" class="scroll" title="Home">home</a></li>
							<li><a href="<?php echo get_home_url(); ?>/#insight" class="scroll insight" title="Insight Oftalmologia">​A In Sight</a></li>
							<li><a href="<?php echo get_home_url(); ?>/#servicos" class="scroll insight" title="Serviços">Serviços</a></li>
							<!--<li><a href="#features-section" class="scroll">Features</a></li>-->
							<li><a href="<?php echo get_home_url(); ?>/#cirurgias" class="scroll" title="Cirurgias">Cirurgias</a></li>
							<li><a href="<?php echo get_home_url(); ?>/#doencas" class="scroll" title="Doenças">Doenças</a></li>
							<li class="active"><a href="<?php echo get_home_url(); ?>/blog" class="scroll">Blog</a></li>
							<li><a href="<?php echo get_home_url(); ?>/#contato" class="scroll">Contato</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>
	<!-- Header Ends -->
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <?php $capa = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>


	<section class="blog-post">
		<div class="container">
			<div class="row">
				<!-- your-work Info Begins -->
				<div class="col-xs-12">
					<!-- Title -->
					
					<!-- Sub Title -->
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">​<?php the_field('resumo'); ?></p>
				</div>
				<!-- your-work Info Ends -->

				<div class="col-md-4 animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="500" style="min-height: 110px;">
					<?php if($capa[0]){ ?>
						<img src="<?php echo $capa[0]; ?>" alt="blog-photo" class="img-responsive blog-photo">
					<?php } ?> 
					<!-- Blog Post-Date-->
					<div class="blog-date">
						<h2><?php the_time('d'); ?></h2>
						<p><?php the_time('M'); ?></p>
						<h4><?php the_time('Y'); ?></h4>
					</div>
				</div>

				<div class="col-md-8 animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="500" style="margin-top: 10px;">	
					<div class="thumbnail">	
						<div class="caption">
							<div class="blog-content">
								<h2 class="section-title text-left animated" data-animation="fadeInRight" data-animation-delay="300" style="margin-top: -15px;"><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php endwhile; endif; ?>


<!-- FOOTER -->
<section id="footer" class="footer-bg" >
	<div class="footer-section">
		<div class="container">
			<!-- Items -->
			<div class="row">
				<!-- Item 1 -->
				<div class="col-sm-4 animated" data-animation="fadeInUp" data-animation-delay="300">
					<!-- Title -->
					<h3>Endereço</h3>
					<!-- Content -->
					<!-- Footer Contact -->
					<ul>
						<li>Rua Domingos Fernandes, 144</li>
						<li>Vila Nova Conceição</li>
						<li>São Paulo - SP</li>
						<?php if(get_field('telefone', 'option') != ""){ ?>
							<li style="color: #16b6ea;"> <?php the_field('telefone', 'option') ?></li>
						<?php } ?>
					</ul>
				</div>
				<!-- Item 3 -->
				<div class="col-sm-4 latest-post animated" data-animation="fadeInUp" data-animation-delay="700">
					<!-- Title -->
					<h3>Últimas publicações</h3>
					<ul>

				       <?php
				        $getBlog = array(
				            'post_type' => 'post',
				            'post_status' => 'any',
				            'orderby'           => date,
				            'order'             => 'DESC',
				            'posts_per_page'         => '4'
				        ); 
						
						$blog = new WP_Query( $getBlog );

						while($blog->have_posts()) : $blog->the_post(); ?>

							<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>

						<?php endwhile; ?>

					</ul>
				</div>
				<!-- Item 4 -->
				<div class="col-sm-4 flickr animated" data-animation="fadeInUp" data-animation-delay="900">
<?php /*<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=677209209084153";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/Insight-Oftalmologia-636534666383144/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div> */ ?>

					<script>
					(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
					</script>


					<div class="fb-page" data-href="https://www.facebook.com/insightoftalmologia" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" style="margin-top: 22px;">
						<div class="fb-xfbml-parse-ignore">
							<blockquote cite="https://www.facebook.com/insightoftalmologia">
								<a href="https://www.facebook.com/insightoftalmologia">In Sight Oftalmologia</a>
							</blockquote>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Copy Rights Section begins-->
	<div class="copy-rights-bg">
		<div class="copy-rights-section">
			<div class="container">
				<div class="row">
					<!-- Copy Right Details -->
					<div class="col-sm-6">
						<p class="copyright-content">&copy;&nbsp;COPYRIGHT <?php echo date('Y'); ?>.&nbsp;&nbsp;In Sight Oftalmologia. Todos os direitos autorais reservados.</p>
					</div>
					<!-- Copy Right Social Icons -->
					<div class="col-sm-6">
						<p class="copyright-content" align="right">Desenvolvido por <a href="http://www.acapu.ppg.br" target="_blank" style="color: #ffffff;">Acapú Comunicação e Mídia</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copy Rights Section ends-->
</section>
<!-- FOOTER END -->
<!-- FOOTER END -->



<!-- End Color Switcher -->
<!-- Script Begins -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrapValidator.min.js"></script>
<!-- Sticky Navigation bar -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>

<!-- Apear Js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<!-- owl carousel -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!-- Pretty photo -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js" ></script>
<!-- Flex Slider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js" ></script>
<!-- Expertise Circular Progress Bar -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/effect.js"></script>
<!-- Video -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mb.YTPlayer.js"></script>
<!-- Twitter -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tweet/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tweet/tweetie.min.js"></script>
<!-- Color Panel Js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/color-panel.js"></script>
<!-- count-down -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/count-down.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mb-comingsoon.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.js"></script>
<!-- Custom Js -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<script type="text/javascript">
	$('#contato-form-submit').click(function(){
		nome = $('#nome').val();
		email = $('#email').val();
		telefone = $('#telefone').val();
		mensagem = $('#mensagem').val();
		$.ajax({
			type: "GET",
			url: "<?php echo get_template_directory_uri(); ?>/mail.php",					
			data: {'nome': nome , 'email': email,'telefone':telefone,'mensagem':mensagem },
			success: function(msg){						
				$('.comment-message').html(msg);
				$('.comment-message').show();			
				$('#contato-form-submit').removeAttr("disabled");
				$('#contato-form').trigger("reset");				
			},
			error: function(msg){						
				$('.comment-message').html(msg);
				$('.comment-message').show();
				$('#contato-form-submit').removeAttr("disabled");
			}
		 });
		 
		return false;
	});
	$(document).ready(function() {
		$(".fancybox").fancybox({
			maxWidth	: 800,
			maxHeight	: 600,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: true,
			closeClick	: true,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});
</script>

</body>
</html>
