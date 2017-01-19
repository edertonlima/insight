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
						<div class="site-logo"> <a href="#top" class="scroll" title="In Sight Oftalmologia">In Sight Oftalmologia</a></div>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"> <span class="menu-box"><span class="menu">Menu</span><i class="flaticon-list50 menu-button"></i></span> </button>
					</div>
					<!-- Collect the nav links, buttons and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav navbar-right ">
							<li><a href="#top" class="scroll" title="Home">home</a></li>
							<li><a href="#insight" class="scroll insight" title="Insight Oftalmologia">​A In Sight</a></li>
							<li><a href="#servicos" class="scroll insight" title="Serviços">Serviços</a></li>
							<!--<li><a href="#features-section" class="scroll">Features</a></li>-->
							<li><a href="#cirurgias" class="scroll" title="Cirurgias">Cirurgias</a></li>
							<li><a href="#doencas" class="scroll" title="Doenças">Doenças</a></li>
							<li><a href="<?php echo get_home_url(); ?>/category/blog" class="scroll">Blog</a></li>
							<li><a href="#contato" class="scroll">Contato</a></li>
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
<!-- Top Slider Begins -->
<section class="top-slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		
			<div class="carousel-inner">

				<?php

				// check if the repeater field has rows of data
				if( have_rows('slide', 'option') ):

				 	$i = 0;
				    while ( have_rows('slide', 'option') ) : the_row(); 
				    	$i = $i+1; ?>
						
						<?php if(get_sub_field('imagem')) { ?>
							<div class="item<?php if($i == 1){ echo ' active'; } ?>">
								<div class="row">
									<div class="col-md-offset-2 carousel-caption">
										<?php if(get_sub_field('titulo')) { ?>
											<h1><?php the_sub_field('titulo') ?></h1>
										<?php } ?>

										<?php if(get_sub_field('texto')) { ?>
											<p><?php the_sub_field('texto') ?></p>
										<?php } ?>

										<?php if(get_sub_field('link')) { ?>
											<a href="<?php the_sub_field('link') ?>" class="scroll" title="<?php the_sub_field('texto_do_botão') ?>"><div class="btn"><?php the_sub_field('texto_do_botão') ?></div></a>
										<?php } ?>
									</div>
									<div class="col-md-12">
										<img src="<?php the_sub_field('imagem'); ?>" class="img-responsive"  alt="<?php the_sub_field('titulo') ?>">
									</div>
								</div>
							</div>
						<?php } ?>

				    <?php endwhile;

				else :

				    // no rows found

				endif;

				?>

				<!--<div class="item active">
					<div class="row">
						<div class="col-md-offset-2 carousel-caption">
							<h1>Equipe preparada para cuidar da sua visão</h1>
							<p>Corpo clínico formado por excelentes e renomados<br>profissionais que atuam de forma ética e integrada.</p>
							<a href="#insight" class="scroll" title="Conheça"><div class="btn">Conheça</div></a>
						</div>
						<div class="col-md-12"> <img src="<?php echo get_template_directory_uri(); ?>/images/image001.jpg" class="img-responsive"  alt="slider-1"> </div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 carousel-caption">
							<h1>Conheça nossas especialidades</h1>
							<p>Realizamos consultas de rotina, exames e<br>procedimentos cirúrgicos. Tudo com alto padrão de qualidade!</p>
							<a href="#doencas" class="scroll" title="Acesse"><div class="btn">Acesse</div></a>
						</div>
						<div class="col-md-12"> <img src="<?php echo get_template_directory_uri(); ?>/images/banner-3.jpg"  class="img-responsive" alt="slider-1"> </div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 carousel-caption">
							<h1>Acesse nossas dicas e informações sobre o <br>universo da oftalmologia</h1>
							<p>Blog com artigos de alta qualidade técnica,<br>repleto de dicas e novidades. Venha conferir!</p>
							<a href="#blog" class="scroll" title="Leia"><div class="btn">Leia</div></a>
						</div>
						<div class="col-md-12"> <img src="<?php echo get_template_directory_uri(); ?>/images/image003.jpg"  class="img-responsive" alt="slider-1"> </div>
					</div>
				</div>-->
			</div>
		
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> 
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> </a> 
  </div>
</section>
<!-- Top Slider Ends -->






<!-- Team Section Begins -->
<section id="insight" class="team-section section slant-angle" <?php /*style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/team-sec-bg.jpg');"*/ ?>>
	<!-- Slant Shape -->
	<div class="slant-top-angle"></div>
		<!-- Work With Us Top Content - Begins -->
		<div class="section-inner">
			<div class="container">
				<div class="row">
					<!-- your-work Info Begins -->
					<div class="col-xs-12">
						<!-- Title -->
						<h2 class="section-title text-center animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="300">Diretoria Clínica</h2>
						<!-- Sub Title -->
						<p class="sub-title text-center animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="300">Com profissionais formados em diversas especialidades da oftalmologia, a <strong>In Sight</strong> oferece soluções integradas,<br>tratando com excelência, praticamente todas as patologias oculares existentes.</p>
					</div>
					<!-- your-work Info Ends -->
				</div>
			</div>
			<!-- Work With Us Top Content - Ends -->
			<!-- Screenshot Carousel Begins -->
			<div class="container slider-container">
				<div class="row">
					<div class="col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
						<!-- Carousel Slider Container Begins -->
						<div id="team-slider" class="team-carousel-slider">
							<!-- Item 2 Begins -->
							<div class="team-item">
								<!-- Img -->
								<a href="#curriculo-1" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" width="370" height="225" alt="" class="img-responsive" /></a>
								<!-- Team Member Details -->
								<div class="team-content">
									<a href="#curriculo-1" class="fancybox">
										<h3 class="name">Dra. Renata Bastos Alves</h3>
										<strong>Diretora técnica responsável</strong>
										<h4 class="designation">CRM 83.686</h4>
										<span class="btn">Acesse o currículo <i class="fa fa-angle-right"></i></span>
									</a>
									<div class="curriculo" id="curriculo-1">
										<h3 class="name">​​<strong>Dra. Renata Bastos Alves</strong>CRM 83.686</h3>
										<strong class="sub-tit">Diretora técnica responsável</strong>
										​​<p class="description">
											<span><i class="fa fa-check" aria-hidden="true"></i>Graduação em Medicina pela Faculdade de Medicina da Fundação do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Residência Médica em Oftalmologia pela Faculdade de Medicina da Fundação do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Especialização nas áreas de Estrabismo, Retina e Catarata.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Especialista em Oftalmologia pelo Conselho Brasileiro de Oftalmologia.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Membro da AAPOS (American Association for Pediatric Ophthalmology and Strabismus).</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Membro do CBE (Conselho Brasileiro de Estrabismo).</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Diretora técnica da In Sight Oftalmologia.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Sócia proprietária da CAMO Oftalmologia (ABC).</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Chefe do serviço de Oftalmologia do HOSPITAL AMÉRICA (ABC).</span>
										</p>
									</div>
								</div>
							</div>
							<!-- Item 2 Ends -->

							<!-- Item 3 Begins -->
							<div class="team-item">
								<!-- Img -->
								<a href="#curriculo-3" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/1.png" width="370" height="225" alt="" class="img-responsive" /></a>
								<!-- Team Member Details -->
								<div class="team-content">
									<a href="#curriculo-3" class="fancybox">
										<h3 class="name">Dra. Daniella Fairbanks</h3>
										<h4 class="designation">CRM 81.774</h4>
										<span class="btn">Acesse o currículo <i class="fa fa-angle-right"></i></span>
									</a>
									<div class="curriculo" id="curriculo-3">
										<h3 class="name">​<strong>Dra. Daniella V. B. Fairbanks Barbosa</strong>CRM 81.774</h3>
										<p class="description">
											<span><i class="fa fa-check" aria-hidden="true"></i>Graduada em medicina pela Faculdade de Medicina do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Residência em Oftalmologia pela Faculdade de Medicina do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Título de Especialista pelo Conselho Brasileiro de Oftalmologia.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Especialização em Plástica Ocular, Catarata e Lente de Contato pela Faculdade de Medicina do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Especialização em Córnea e Doenças Externas pela Escola Paulista de Medicina – UNIFESP.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Médica assistente do setor de Córnea e Doenças Externas da Faculdade de Medicina do ABC e da Escola Paulista de Medicina.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Médica chefe de plantão do Pronto Socorro de Oftalmologia do Hospital Municipal de Santo André.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Médica chefe da equipe de Oftalmologia do Hospital São Luiz – Itaim.</span>
										</p>
									</div>
								</div>
							</div>
							<!-- Item 3 Ends -->

							<!-- Item 2 Begins -->
							<div class="team-item">
								<!-- Img -->
								<a href="#curriculo-2" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/dr-renato.jpg" width="370" height="225" alt="" class="img-responsive" /></a>
								<!-- Team Member Details -->
								<div class="team-content">
									<a href="#curriculo-2" class="fancybox">
										<h3 class="name">Drº Renato Leça</h3>
										<h4 class="designation">CRM 58.672</h4>
										<span class="btn">Acesse o currículo <i class="fa fa-angle-right"></i></span>
									</a>
									<div class="curriculo" id="curriculo-2">
										<h3 class="name">​<strong>Drº Renato Leça</strong>CRM 58.672</h3>
										<p class="description">
											​<span><i class="fa fa-check" aria-hidden="true"></i>Nutrólogo pela Associação Brasileira de Nutrologia e pela Associação Médica Brasileira.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Proficiência em Prática Ortomolecular / ex-diretor da Associação Médica Brasileira de Ortomolecular.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Especialização em Fisiologia do Exercício pela Unifesp. Diretor da Associação Médica Brasileira de Iridologia.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>​Doutorando em Ciências da Saúde pela Faculdade de Medicina do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Cursando Fellowship in Metabolical and Nutritional Medicine pela A4M.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Professor da Faculdade de Medicina do ABC desde 1990.</span>
										</p>
									</div>
								</div>
							</div>
							<!-- Item 2 Ends -->

							<!-- Item 4 Begins -->
							<div class="team-item">
								<!-- Img -->
								<a href="#curriculo-4" class="fancybox"><img src="<?php echo get_template_directory_uri(); ?>/images/dr-vicente.jpg" width="370" height="225" alt="" class="img-responsive" /></a>
								<!-- Team Member Details -->
								<div class="team-content">
									<a href="#curriculo-4" class="fancybox">
										<h3 class="name">Dr. Vicente Vitiello Neto</h3>
										<h4 class="designation">CRM 79.456</h4>
										<span class="btn">Acesse o currículo <i class="fa fa-angle-right"></i></span>
									</a>
									<div class="curriculo" id="curriculo-4">
										<h3 class="name">​<strong>Dr. Vicente Vitiello Neto</strong>CRM 79.456</h3>
										<p class="description">
											<span><i class="fa fa-check" aria-hidden="true"></i>​Médico pela Faculdade de Ciências Médicas de Santos.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Residência Médica em Oftalmologia pela Faculdade de Medicina do ABC.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Especialista em Catarata, Córnea e Cirurgia Refrativa pelo Conselho Brasileiro de Oftalmologia.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Fellowship em Córnea e Doenças Externas pelo Bascom Palmer Eye Institute, na University of Miami, USA.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>MBA e Mestrado em Administração da Prática Oftalmológica pela Escola Paulista de Medicina – UNIFESP.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Professor de Oftalmologia da Faculdade de Medicina do ABC por 10 anos, de onde se licenciou recentemente para se dedicar as atividades na VistaLaser.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Palestrante em congressos nacionais e internacionais.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Membro do Conselho Brasileiro de Oftalmologia, da Associação Brasileira de Catarata e Cirurgia Refrativa, da Sociedade Brasileira de Administração em Oftalmologia e da Sociedade Americana de   Catarata e Cirurgia Refrativa.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Médico Oftalmologista do Grande Prêmio Brasil de Fórmula 1 desde 2011.</span>
											<span><i class="fa fa-check" aria-hidden="true"></i>Nos últimos anos tem se dedicado à cirurgia refrativa e cirurgia de catarata em São Paulo e, mais recentemente, em São João da Boa Vista.</span>
										</p>
									</div>
								</div>
							</div>
							<!-- Item 4 Ends -->
						</div>
						<!-- Carousel Slider Container Ends -->
						<div class="scrolling text-center"><span>Move to scrolling</span></div>
					</div>
				</div>
			</div>
			<!-- Screenshot Carousel Ends -->
		</div>
	<!-- Slant Shape -->
	<div class="slant-bottom-angle"></div>
</section>
<!-- Team Section Ends -->







<?php /* INSIGHT OFTALMOLOGIA * ?>
<section id="insight" class="team-section section slant-angle">
	<!-- Slant Shape -->
	<div class="slant-top-angle"></div>
		<!-- Work With Us Top Content - Begins -->
		<div class="container">
			<div class="row">
				<!-- your-work Info Begins -->
				<div class="col-xs-12">
					<!-- Title -->
					<h2 class="section-title text-center animated" data-animation="fadeInRight" data-animation-delay="300">Equipe Médica</h2>
					<!-- Sub Title -->
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">Com profissionais formados em diversas especialidades da oftalmologia, a <strong>In Sight</strong> oferece soluções integradas,<br>tratando com excelência, praticamente todas as patologias oculares existentes.</p>
				</div>
				<!-- your-work Info Ends -->
			</div>
		</div>
		<!-- Work With Us Top Content - Ends -->
		<!-- Screenshot Carousel Begins -->
		<div class="container slider-container">
			<div class="row">
				<div class="col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
					<!-- Carousel Slider Container Begins -->
					<div id="team-slider" class="team-carousel-slider">
						<!-- Item 2 Begins -->
						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica1.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Adriana Moio - CRM 121.867</h3>
								<p class="description">Graduada em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência Médica em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Córnea, Cirurgia Refrativa e Ultrassonografia Ocular pela Faculdade de Medicina do ABC.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica2.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Ana Luiza Vitiello - CRM 122.346</h3>
								<p class="description">Graduada em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência Médica em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Retina e Vítreo pela Faculdade de Medicina do ABC.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica3.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Daniella Villas Boas Fairbanks Barbosa - CRM 81.774</h3>
								<p class="description">Graduada em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Plástica Ocular, Catarata e Lente de Contato pela Faculdade de Medicina do ABC;</p>
								<p class="description">Especialização em Córnea e Doenças Externas pela Escola Paulista de Medicina - UNIFESP;</p>
								<p class="description">Médica Assistente do setor de Córnea e Doenças Externas da Faculdade de Medicina do ABC e da Escola Paulista de Medicina;</p>
								<p class="description">Médica Chefe de plantão do Pronto Socorro de Oftalmologia do Hospital Municipal de Santo ANdré;</p>
								<p class="description">Médica Chefe da equipe de Oftalmologia do Hospital São Luiz - Itaim.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica1.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Mariana Avilla - CRM 101.513</h3>
								<p class="description">Graduada em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência Médica em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Cirurgia Refrativa pela Escola Paulista de Medicina - UNIFESP;</p>
								<p class="description">Fellowship em Córnia e Cirurgia Refrativa na University of Southern California - Doheny Eye Institute;</p>
								<p class="description">Pós Graduada nível Doutorado pela Escola Paulista de Medicina - UNIFESP.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica2.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Patrícia da Rocha Pitta Ferraz - CRM 127.100</h3>
								<p class="description">Graduada em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência Médica em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Especialização em Oncologia Ocular pelo Hospital AC Camargo.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica3.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Renata B. Catem - CRM 413.061</h3>
								<p class="description">Graduada em Medicina pela Universidade Federal do Rio de Janeiro;</p>
								<p class="description">Residência Médica em Oftalmologia pela Universidade Federal do Rio de Janeiro;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Oncologia Ocular e Órbita pela Escola Paulista de Medicina - UNIFESP.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica1.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Renata Batos Alvez - CRM 83.686</h3>
								<p class="description">Graduada em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Redidência em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Estrabismo, Plástica Ocular e Retina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Trabalhou como Médica Assistente do setor de Estrababismo da Faculdade de Medicina do ABC.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medico1.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dr. Renato Galão Leça - CRM 58.672</h3>
								<p class="description">Graduado em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência em Medicina pela Faculdade de Medicina do ABC;</p>
								<p class="description">Residência em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselhor Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Refração, Lente de Contato e Córnea pela Escola Paulista de Medicina;</p>
								<p class="description">Mestre em Oftalmologia pela Escola Paulista de Medicina;</p>
								<p class="description">Pós-graduado em Administração de Empresas pela Universidade Mackenzie;</p>
								<p class="description">Professor de Oftalmologia, Chefe do setor de Lente de Contato da Faculdade de Medicina do ABC;</p>
								<p class="description">Médico Chefe do plantão do Pronto Socorro de Oftalmologia do Hospital de Santo André;</p>
								<p class="description">Médico Oftalmologista consursado da Prefeitura Municipal de São Bernardo do Campo.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medico2.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dr. Rodrigo Thompson - CRM 94.706</h3>
								<p class="description">Graduado em Medicina pela Faculdade de Ciências Médicas de Santos;</p>
								<p class="description">Residência Médica em Oftalmologia pelo Hospital CEMA-SP;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Retina e Vítreo pela Faculdade de Medicina do ABC;</p>
								<p class="description">Médico Assistente do setor de Retina e Vítreo da Faculdade de Medicina do ABC;</p>
								<p class="description">Pós=Graduado nível Mestrado pela Faculdade de Medicina do ABC.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica1.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Thais Rissato B. Oliveira - CRM 125.716</h3>
								<p class="description">Graduada em Medicina pela Universidade São Francisco;</p>
								<p class="description">Residência Médica em Oftalmologia pelo Instituto CEMA;</p>
								<p class="description">Fellow em Córnea e Lente de Contato pela USP;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medico3.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dr. Vicente VItiello Neto - CRM 79.456</h3>
								<p class="description">Graduado em Medicina pela Faculdade de Ciências Médicas de Santos;</p>
								<p class="description">Residência em Oftalmologia pela Faculdade de Medicina do ABC;</p>
								<p class="description">Título de Especialista pelo Conselho Brasileiro de Oftalmologia;</p>
								<p class="description">Especialização em Catarata e Cirurgia Refrativa pela Faculdade de Medicina do ABC;</p>
								<p class="description">Fellowship em Córnea e Doenças Externas pelo Bascom Palmer Eye Institute , University of Miami, USA;</p>
								<p class="description">Mestrado em Oftalmologia pela Escola Paulista de Medicina - UNIFESP;</p>
								<p class="description">MBA - Master in Business Administration em Administração Oftalmológica pela Escola Paulista de Medicina - UNIFESP;</p>
								<p class="description">Professor da Disciplina de Oftalmologia da Faculdade de Medicina do ABC;</p>
								<p class="description">Médico Chefe do Setor de Córnea e Doenças Externas da Faculdade de Medicina do ABC;</p>
								<p class="description">Médico Assistente dos setores de Cirurgia Refrativa e Catarata da Faculdade de Medicina do ABC;</p>
								<p class="description">Founding member of the International Ocular Surface Society International Member od the American Society of Cataract and Refractive Surgery - ASCRS<;/p>
								<p class="description">Membro das Sociedades Brasileira de Catarata e Cirurgia Refrativa.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/team/medica2.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Dra. Fabiana Preto</h3>
								<p class="description">Graduada em Tecnologia Oftálmica pela Escola Paulista de Medicina - UNIFESP.</p>
							</div>
						</div>

					</div>
					<!-- Carousel Slider Container Ends -->
					<div class="scrolling text-center"><span>Move to scrolling</span></div>
				</div>
			</div>
		</div>
		<!-- Screenshot Carousel Ends -->
	<!-- Slant Shape -->
	<div class="slant-bottom-angle"></div>
</section>

*/ ?>

<div class="about-us-content-section section slant-angle parallax1bg" id="insight">
	<!-- Slant Shape -->
	<div class="slant-top-angle"></div>
	<div class="section-inner">
		<div class="container">
			<!-- Title -->
			<div class="row">
				<div class="col-md-12">
					<h2 class="animated" data-animation="fadeInUp" data-animation-delay="300">In Sight Oftalmologia</h2>
				</div>
			</div>
			<!-- Content -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1 about-content animated" data-animation="fadeInRight" data-animation-delay="500">
					<p class="next-content text-center">​A <strong>In Sight</strong> é parceria de diversos convênios e tem orgulho de ser a clínica escolhida pelo Hospital São Luiz para executar os atendimentos do seu pronto socorro oftalmológico. Instalada em uma confortável casa no coração da Vila Nova Conceição e com um corpo clínico composto por especialistas das mais diversas áreas da oftalmologia - muitos deles com formação internacional e fazendo parte do corpo docente dos principais centros de ensino de oftalmologia do Brasil - a In Sight conta com uma tecnologia de ponta e equipamentos que propiciam exames detalhados e precisos, o que contribui significativamente na qualidade dos diagnósticos. Conveniência oferecida pela ampla e bem localizada sede, pelo atendimento diferenciado e pela variedade de convênios aceitos.</p>
					<p class="next-content text-center">Visite-nos e deixe a <strong>In Sight</strong> contribuir para a sua qualidade de vida!</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Slant Shape -->
	<div class="slant-bottom-angle"></div>
</div>





<?php /* SERVIÇOS */ ?>
<section id="servicos" class="features-section section">
	<!-- Features Top Content - Begins -->
	<div class="container">
		<div class="row">
			<!-- Features Info Begins -->
			<div class="col-xs-12">
				<!-- Title -->
				<h2 class="section-title text-center color-black animated" data-animation="fadeInRight" data-animation-delay="300">Serviços</h2>
				<!-- Sub Title -->
				<p class="sub-title text-center color-black animated" data-animation="fadeInLeft" data-animation-delay="300">​Ser referência em oftalmologia e oferecer serviços completos na medicina ocular é motivo de muito orgulho para nós.</p>
			</div>
			<!-- Features Info Ends -->
		</div>
		<!-- Features Content - Begins -->
		<div class="row">
			<!-- Feature Box 1 Begins -->
			<div class="col-md-4 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="300">
				<div class="row">
					<!-- Icon -->
					<div class="col-xs-3"> <i class="fa fa-stethoscope feature-icon" aria-hidden="true"></i> </div>
					<!-- Title & Description -->
					<div class="col-xs-9"> <span class="content-title text-center color-black">Clínica e Cirurgia</span>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Cirurgia refrativa com Femtosecond Laser - miopia, ​hipermetropia e astigmatismo</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Cirurgia de Catarata com implante de lentes multifocais</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Implantes de lentes Intraoculares para correção de altos graus de miopia e hipermetropia</p>
						<?php /*<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Córnea: transplante de córnea e de ​membrana amniótica</p>*/ ?>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Glaucoma</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Estrabismo</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Cirurgia plástica ocular</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Vias lacrimais</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Retina</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Oftalmopediatria</p>
					</div>
				</div>
			</div>
			<!-- Feature Box 1 Ends -->

			<!-- Feature Box 2 Begins -->
			<div class="col-md-4 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="600">
				<div class="row">
					<!-- Icon -->
					<div class="col-xs-3"> <i class="fa fa-user-md feature-icon" aria-hidden="true"></i></div>
					<!-- Title & Description -->
					<div class="col-xs-9"> <span class="content-title text-center color-black">Exames</span>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Topografia corneana</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Microscopia especular da córnea</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Biomicroscopia ultrassônica</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Paquinetria ultrassônica</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Mapeamento de retina</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Tonometria de aplanação</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Curva tensional diária</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Gonioscopia</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Teste de motilidade extrínsica ocular</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Teste Ortóptico</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>OTC - Tomografia de coerência óptica</p>
					</div>
				</div>
			</div>
			<!-- Feature Box 2 Ends -->
			<!-- Feature Box 3 Begins -->
			<div class="col-md-4 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="900">
				<div class="row">
					<div class="col-xs-3"> <i class="fa fa-eye feature-icon" aria-hidden="true"></i></div>
					<div class="col-xs-9"> <span class="content-title text-center color-black">Lentes de contato</span>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Acrílicas</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Silicinadas</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Fluocarbonadas</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Tóricas</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Gelatinosas de uso prolongado</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Coloridas</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Descartáveis</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Bifocais</p>
						<p class="feature-content"><i class="fa fa-check" aria-hidden="true"></i>Lentes especiais</p>
					</div>
				</div>
			</div>
			<!-- Feature Box 3 Ends -->
		</div>
	</div>
	<!-- Features Content - Ends -->
</section>





<?php /* CIRURGIAS */ ?>
<section id="cirurgias" class="team-section section slant-angle">
	<!-- Slant Shape -->
	<div class="slant-top-angle"></div>
		<!-- Work With Us Top Content - Begins -->
		<div class="container">
			<div class="row">
				<!-- your-work Info Begins -->
				<div class="col-xs-12">
					<!-- Title -->
					<h2 class="section-title text-center animated" data-animation="fadeInRight" data-animation-delay="300">Cirurgias</h2>
					<!-- Sub Title -->
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">A clínica <strong>In Sight</strong> oferece as mais modernas técnicas cirúrgicas em oftalmologia, realizadas por profissionais especializados que fazem uso de equipamentos de última geração. Agende uma consulta e obtenha a melhor orientação para o seu caso.</p>
				</div>
				<!-- your-work Info Ends -->
			</div>
		</div>
		<!-- Work With Us Top Content - Ends -->
		<!-- Screenshot Carousel Begins -->
		<div class="container slider-container">
			<div class="row">
				<div class="col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
					<!-- Carousel Slider Container Begins -->
					<div id="cirurgias-slider" class="team-carousel-slider">

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/cirurgia-de-retina.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Cirurgia de retina</h3>
								<p class="description">O tratamento de descolamento de retina envolve o reposicionamento da retina ao local de origem. Atualmente existem diversos métodos cirúrgicos para esta correção, como: laser, crioterapia, retinopexia com introflexão escleral, retinopexia pneumática e vitrectomia. Após a realização de todos os exames, caberá ao oftalmologista decidir a melhor técnica a ser aplicada em seu paciente.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/cirurgia-de-catarata.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Cirurgia da Catarata</h3>
								<p class="description"><strong>Facoemulsificação com Implante de Lente Intraocular</strong></p>
								<p class="description">A catarata é a opacificação da lente que possuímos dentro do olho (cristalino). O seu tratamento é sempre cirúrgico e a técnica mais moderna consiste na emulsificação da lente através do aparelho (ultra-som), aspiração da mesma e implante de uma lente intraocular.</p>
							</div>
						</div>


						<!-- Item 2 Begins -->
						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/lasik.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Cirurgia de miopia, hipermetropia e astigmatismo</h3>
								<p class="description"><strong>Miopia, hipermetropia e astigmatismo</strong></p>
								<p class="description">A cirurgia oftalmológica por laser é uma das mais importantes contribuições para a oftalmologia. A técnica consiste na separação das camadas corneanas para posterior fotoblação e tem como vantagem uma recuperação visual precoce, garantindo uma boa visão no dia seguinte a cirurgia.</p>
							</div>
						</div>

						<?php /*
						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/cirurgia-de-cornea.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Transplante de Córnea</h3>
								<p class="description">Indicado quando a córnea se opacifica ou então se torna irregular, levando a uma baixa importante da visão. Consiste na troca da córnea doente por outra de um doador.</p>
							</div>
						</div>
						*/ ?>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/lentes-intraoculares.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Lentes Intraoculares para Correção de Altos Graus</h3>
								<p class="description">Indicado para os pacientes que possuem altos graus de miopia ou hipermetropia e não podem ser operados através da cirurgia a laser.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/blefaroplastia.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Cirurgia plástica das pálpebras – Blefaroplastia</h3>
								<p class="description">Consiste na retirada de “sobra” de pele das pálpebras superiores e/ou inferiores, que é causada pela flacidez dos tecidos. Pode ser combinada com essa técnica a retirada das “bolsas” de gordura da região, se houver necessidade. A cirurgia é realizada com anestesia local, deixando uma cicatriz praticamente imperceptível.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/correção-de-estrabismo.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Correção de Estrabismo</h3>
								<p class="description">Consiste no enfraquecimento ou fortalecimento do(s) músculo(s) ocular(es), para que seja retomado o alinhamento dos olhos. Em crianças é usada a anestesia geral, porém em adultos pode ser realizada apenas com o uso de colírios anestésicos. A recuperação é rápida e os resultados são bastante satisfatórios.</p>
							</div>
						</div>
					</div>
					<!-- Carousel Slider Container Ends -->
					<div class="scrolling text-center"><span>Move to scrolling</span></div>
				</div>
			</div>
		</div>
		<!-- Screenshot Carousel Ends -->
	<!-- Slant Shape -->
</section>


<?php /* DOENÇAS */ ?>
<section id="doencas" class="team-section section slant-angle">
	<!-- Slant Shape -->
	<div class="slant-top-angle"></div>
		<!-- Work With Us Top Content - Begins -->
		<div class="container">
			<div class="row">
				<!-- your-work Info Begins -->
				<div class="col-xs-12">
					<!-- Title -->
					<h2 class="section-title text-center animated" data-animation="fadeInRight" data-animation-delay="300">Doenças</h2>
					<!-- Sub Title -->
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">​A equipe da <strong>In Sight</strong> está preparada para cuidar de todas as patologias oftalmológicas, desde as mais frequentes as mais raras.<br>Conheça aqui alguns dos sintomas, causas e consequências.</p>
				</div>
				<!-- your-work Info Ends -->
			</div>
		</div>
		<!-- Work With Us Top Content - Ends -->
		<!-- Screenshot Carousel Begins -->
		<div class="container slider-container">
			<div class="row">
				<div class="col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
					<!-- Carousel Slider Container Begins -->
					<div id="doencas-slider" class="team-carousel-slider">
						<!-- Item 2 Begins -->
						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/astigmatismo.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Astigmatismo</h3>
								<p class="description"><strong>Imagem distorcida / borrada na retina</strong></p>
								<p class="description">​Uma curvatura irregular da córnea ou uma forma irregular do cristalino produz uma imagem distorcida e/ou borrada na retina. Esse tipo de defeito é chamado de astigmatismo. As modalidades de tratamento para esta patologia incluem: óculos, lentes de contato e cirurgia corretiva à laser.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/presbiopia.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Presbiopia</h3>
								<p class="description"><strong>​Dificuldade para enxergar objetos próximos</strong></p>
								<p class="description">​À medida que as pessoas envelhecem, o cristalino se torna menos flexível e sua capacidade de acomodação se reduz. Para auxiliar o présbita a focar novamente os objetos de perto podemos usar: óculos de leitura, óculos multifocais ou lentes de contato.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/uveite.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Uveíte</h3>
								<p class="description"><strong>V​isão desfocada/dor nos olhos</strong></p>
								<p class="description">​Entende-se por uveíte toda inflamação que acometa a íris, o corpo ciliar ou a coróide. A principal causa da uveíte anterior é trauma ocular e da uveíte posterior a toxoplasmose. O tratamento varia de acordo com a causa.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/degeneracao-macular.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Degeneração Macular</h3>
								<p class="description"><strong>P​erda gradual da visão central</strong></p>
								<p class="description">​Trata-se de uma doença na área central da visão, a mácula, acometendo em geral pacientes acima dos 55 anos. Manifesta-se nas fases iniciais por uma distorção das imagens que antes eram vistas normalmente e pode ocorrer nos dois olhos assimetricamente.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/glaucoma.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Glaucoma</h3>
								<p class="description"><strong>P​erda da visão periférica e visão turva central</strong></p>
								<p class="description">​É uma condição onde existe dano no nervo óptico, geralmente causado pelo aumento da pressão intra ocular. O aumento da pressão pode ser ocasionado pelo aumento da produção do líquido chamado HUMOR AQUOSO ou obstrução nos condutos pelos quais normalmente esse líquido saí do olho.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/hipermetropia.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Hipermetropia</h3>
								<p class="description"><strong>D​​ificuldade para enxergar objetos próximos</strong></p>
								<p class="description">​​É o defeito oposto à miopia. A patologia consiste em um encurtamento do olho, ficando a retina à frente do local onde se forma a imagem. O resultado é uma imagem sem nitidez. As modalidades de tratamento incluem: óculos, lentes de contato e cirurgia corretiva à laser.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/miopia.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Miopia</h3>
								<p class="description"><strong>D​ificuldade para enxergar objetos distantes</strong></p>
								<p class="description">​A miopia consiste no alongamento do globo ocular, fazendo com que a retina se encontre atrás do lugar onde deveria se formar a imagem. A imagem carece de nitidez, como uma fotografia fora de foco. As formas de tratamento são óculos, lentes de contato e cirurgia corretiva à laser.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/estrabismo.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Estrabismo</h3>
								<p class="description"><strong>F​alha no foco da visão</strong></p>
								<p class="description">​Perda no alinhamento ocular e pode ser: <br>- Convergente: olhos voltados para dentro.<br>- Divergente: olhos voltados para fora.<br>- Vertical: olhos voltados para cima ou para baixo.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/catarata.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Catarata</h3>
								<p class="description"><strong>P​erda progressiva na nitidez da imagem</strong></p>
								<p class="description">​A catarata é a opacificação do cristalino – lente natural do olho humano. Essa opacificação gradual vai dificultando a visão do paciente. O diagnóstico da catarata é feito através de exame oftalmológico. O tratamento da catarata só pode ser feito através de cirurgia.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/descolamento-de-retina.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Descolamento de retina</h3>
								<p class="description"><strong>P​erda súbita de campo visual</strong></p>
								<p class="description">​O descolamento de retina produz uma perda súbita da visão e deve ser considerado uma urgência já que boa parte da recuperação depende da rapidez com que for efetuado o tratamento. É frequentemente relacionada a traumatismos oculares, embora doenças como diabetes e a alta miopia possam ocasioná-lo.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/ceratocone.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Ceratocone</h3>
								<p class="description"><strong>A​rdência/embaçamento/fotofobia</strong></p>
								<p class="description">​O ceratocone é uma doença progressiva em que a córnea assume um formato irregular em forma de cone levando a um astigmatismo irregular.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/olho-seco.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Olho Seco</h3>
								<p class="description"><strong>A​rdor/coceira/irritação nos olhos</strong></p>
								<p class="description">​Condição bastante comum nos dias de hoje devido a fatores ambientais como: poluição, ar condicionado e a utilização de computadores. Dentre os sintomas estão desconforto, sensação de areia nos olhos, peso nas pálpebras e ardor.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/conjuntivite.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">​Conjuntivite</h3>
								<p class="description"><strong>O​lhos vermelhos/lacrimejação/sensação de areia nos olhos</strong></p>
								<p class="description">​É uma doença que consiste na inflamação da conjuntiva, um tecido transparente localizado acima da esclera (parte branca do olho). Na grande maioria é benigna e autolimitada e sua etiologia é viral. Os sintomas incluem: vermelhidão, coceira, lacrimejamento, sensação de corpo estranhos nos olhos, dor e fotofobia.</p>
							</div>
						</div>
					</div>
					<!-- Carousel Slider Container Ends -->
					<div class="scrolling text-center"><span>Move to scrolling</span></div>
				</div>
			</div>
		</div>
		<!-- Screenshot Carousel Ends -->
	<!-- Slant Shape -->
	<div class="slant-bottom-angle"></div>
</section>


<?php /* BLOG */ ?>
<section id="blog" class="blog-section section slant-angle parallax1bg" style="background: url(<?php echo get_template_directory_uri(); ?>/images/fundo-blog.jpg) no-repeat center center fixed; ">
	<!-- Slant Shape -->
	<div class="slant-top-angle"></div>
	<div class="container">
		<div class="row">
			<!-- Blog Info Begins -->
			<div class="col-xs-12">
				<!-- Title -->
				<h2 class="section-title text-center color-white animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="500">Blog</h2>
				<!-- Sub Title -->
				<p class="sub-title text-center color-white animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="500">​Fique de olho em nossos artigos, matérias e novidades relacionadas ao universo da saúde ocular.</p>
			</div>
		</div>
	</div>	
		<!-- blog -->
	<div class="container slider-container">
		<div class="row">
			<div class="col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
				<!-- Carousel Slider Container Begins -->
				<div id="blog-slider" class="blog-carousel-slider">
					
			       <?php
			        $getBlog = array(
			            'post_type' => 'post',
			            'post_status' => 'any',
			            'orderby'           => date,
			            'posts_per_page'         => '20',
			            'order'             => 'DESC'
			        ); 
					
					$blog = new WP_Query( $getBlog );

					while($blog->have_posts()) : $blog->the_post();
					    $capa = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); 

					    if($capa[0]){ ?>

							<div class="blog-item">
								<!-- Img -->
								<div class="blog-pic">
									<img src="<?php echo $capa[0]; ?>" class="img-responsive" alt="" />							
									<div class="date">
										<h3><?php the_time('d'); ?></h3>
										<p><?php the_time('M'); ?></p>
									</div>
								</div>
								<!-- Team Member Details -->
								<div class="blog-content">
									<h3 class="color-white"><?php the_title(); ?></h3>
									<p><?php the_field('resumo'); ?></p>
									<a href="<?php echo get_permalink(); ?>">Saiba mais <i class="fa fa-angle-right"></i></a>
								</div>
							</div>

					<?php 
						}
					endwhile; ?>

				</div>
				<!-- Carousel Slider Container Ends -->
				<div class="scrolling text-center"><span>Move to scrolling</span></div>
			</div>
		</div>
	</div>
</section>


<?php /* TESTEMUNHOS * ?>
<section id="testemunhos" class="review-section section slant-angle">
	<!-- Slant Top -->
	<div class="slant-top-angle"></div>
	<div class="section-inner">
		<!-- Review Top Content - Begins -->
		<div class="container">
			<div class="row">
				<!-- Features Info Begins -->
				<div class="col-md-12">
					<!-- Title -->
					<h2 class="section-title text-center color-white animated" data-animation="fadeInRight" data-animation-delay="300">Testemunhos</h2>
					<!-- Sub Title -->
					<p class="sub-title text-center color-white animated" data-animation="fadeInLeft" data-animation-delay="300">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<p class="sub-title text-center color-white animated" data-animation="fadeInLeft" data-animation-delay="300">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
				</div>
				<!-- Video Info Ends -->
			</div>
			<!-- Review Top Content - Ends -->
			<!-- Review Content - Begins -->
			<div class="row">
				<div class="col-md-12 animated" data-animation="fadeInUp" data-animation-delay="500">
					<div id="review-carousel" class="owl-carousel">
						<div class="item">
							<p>“This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet.", comes from a line in section 1.10.32.</p>
							<p>It is a long established fact that a reader will  distracted by the readable content    of a page when 
								looking at its layout. “</p>
							<div class="client">
								<p class="name">Mike Johnson</p>
								<a href="#">website.com</a> </div>
						</div>
						<div class="item">
							<p>“This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet.", comes from a line in section 1.10.32.</p>
							<p>It is a long established fact that a reader will  distracted by the readable content    of a page when 
								looking at its layout. “</p>
							<div class="client">
								<p class="name">Mike Johnson</p>
								<a href="#">website.com</a> </div>
						</div>
						<div class="item">
							<p>“This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet.", comes from a line in section 1.10.32.</p>
							<p>It is a long established fact that a reader will  distracted by the readable content    of a page when 
								looking at its layout. “</p>
							<div class="client">
								<p class="name">Mike Johnson</p>
								<a href="#">website.com</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slant Angle Bottom -->
	<div class="slant-bottom-angle"></div>
</section>

*/?>



<?php /* BLOG * ?>
<section id="blog" class="blog-section section">
	<div class="container">
		<div class="row">
			<!-- Blog Info Begins -->
			<div class="col-xs-12">
				<!-- Title -->
				<h2 class="section-title text-center animated" data-animation="fadeInRight" data-animation-delay="500">Blog</h2>
				<!-- Sub Title -->
				<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a </p>
			</div>
		</div>
	</div>	
		<!-- blog -->
	<div class="container slider-container">
		<div class="row">
			<div class="col-xs-12 animated" data-animation="fadeInUp" data-animation-delay="500">
				<!-- Carousel Slider Container Begins -->
				<div id="blog-slider" class="blog-carousel-slider">
					<!-- Item 2 Begins -->
					<div class="blog-item">
						<!-- Img -->
						<div class="blog-pic">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-section/1.png" class="img-responsive" alt="blog-1"/>
							<div class="date">
								<h3>04</h3>
								<p>Nov</p>
							</div>
						</div>
						<!-- Team Member Details -->
						<div class="blog-content">
							<h3>Unusual photo was taken near the town today:</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
							<p>By:  Rasl Design<span>Comment:  81</span></p>
							<a href="blog-single.html">Read more <i class="fa fa-angle-right"></i></a> </div>
					</div>
					<!-- Item 2 Ends -->
					<!-- Item 2 Begins -->
					<div class="blog-item">
						<!-- Img -->
						<div class="blog-pic">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-section/2.png" class="img-responsive" alt="blog-1"/>
							<div class="date">
								<h3>02</h3>
								<p>Nov</p>
							</div>
						</div>
						<!-- Team Member Details -->
						<div class="blog-content">
							<h3>Unusual photo was taken near the town today:</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
							<p>By:  Rasl Design<span>Comment:  81</span></p>
							<a href="blog-single.html">Read more <i class="fa fa-angle-right"></i></a> </div>
					</div>
					<!-- Item 2 Ends -->
					<!-- Item 3 Begins -->
					<div class="blog-item">
						<!-- Img -->
						<div class="blog-pic">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-section/3.png" class="img-responsive" alt="blog-1"/>
							<div class="date">
								<h3>29</h3>
								<p>Oct</p>
							</div>
						</div>
						<!-- Team Member Details -->
						<div class="blog-content">
							<h3>Unusual photo was taken near the town today:</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
							<p>By:  Rasl Design<span>Comment:  81</span></p>
							<a href="blog-single.html">Read more <i class="fa fa-angle-right"></i></a> </div>
					</div>
					<!-- Item 3 Ends -->
					<!-- Item 4 Begins -->
					<div class="blog-item">
						<!-- Img -->
						<div class="blog-pic">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-section/4.png" class="img-responsive" alt="blog-1"/>
							<div class="date">
								<h3>15</h3>
								<p>Oct</p>
							</div>
						</div>
						<!-- Team Member Details -->
						<div class="blog-content">
							<h3>Unusual photo was taken near the town today:</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
							<p>By:  Rasl Design<span>Comment:  81</span></p>
							<a href="blog-single.html">Read more <i class="fa fa-angle-right"></i></a> </div>
					</div>
					<!-- Item 4 Ends -->
					<!-- Item 5 Begins -->
					<div class="blog-item">
						<!-- Img -->
						<div class="blog-pic">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-section/1.png" class="img-responsive" alt="blog-1"/>
							<div class="date">
								<h3>28</h3>
								<p>Aug</p>
							</div>
						</div>
						<!-- Team Member Details -->
						<div class="blog-content">
							<h3>Unusual photo was taken near the town today:</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
							<p>By:  Rasl Design<span>Comment:  81</span></p>
							<a href="blog-single.html">Read more <i class="fa fa-angle-right"></i></a> </div>
					</div>
					<!-- Item 5 Ends -->
					<!-- Item 6 Begins -->
					<div class="blog-item">
						<!-- Img -->
						<div class="blog-pic">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-section/2.png" class="img-responsive" alt="blog-1"/>
							<div class="date">
								<h3>04</h3>
								<p>Aug</p>
							</div>
						</div>
						<!-- Team Member Details -->
						<div class="blog-content">
							<h3>Unusual photo was taken near the town today:</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen </p>
							<p>By:  Rasl Design<span>Comment:  81</span></p>
							<a href="blog-single.html">Read more <i class="fa fa-angle-right"></i></a> </div>
					</div>
					<!-- Item 6 Ends -->
				</div>
				<!-- Carousel Slider Container Ends -->
				<div class="scrolling text-center"><span>Move to scrolling</span></div>
			</div>
		</div>
	</div>
</section>
*/ ?>


<section id="contato" class="customer-support-section">
	<div class="container">
		<!-- Title And Sub Title Section -->
		<div class="row">
			<div class="col-xs-12">
				<!-- Title -->
				<h2 class="section-title text-center animated" data-animation="fadeInRight" data-animation-delay="300">Contato</h2>
				<!-- Sub Title -->
				<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">A <strong>In Sight Oftalmologia</strong> reservou este espaço para falar com você. Preencha o formulário, suas dúvidas ou sugestões serão muito bem-vindas.</p>
				<p class="sub-title text-center animated" style="color: #16b6ea;">Tel. (11) 3160-1800</p>
			</div>
		</div>
		<!-- Contact Box -->
		<div class="contact-boxes animated" data-animation="fadeInUp" data-animation-delay="500">
			<p class="comment-message"></p>
			<form role="form" name="commentform" class="contact-form-horizontal" id="contato-form" method="post" action="javascript:">
				<div class="row">
					<!-- Name -->
					<div class="col-md-4 col-sm-4">
						<div class="input-group form-group"> <span class="input-group-addon"><span class="fa fa-user"></span></span>
							<input type="text"  name="nome" id="nome"  class=" form-control input-name" placeholder="Seu nome">
						</div>
					</div>
					<!-- E-mail -->
					<div class="col-md-4 col-sm-4">
						<div class="input-group form-group"> <span class="input-group-addon"><span class="flaticon-black164"></span></span>
							<input type="text" name="email" id="email"  class=" form-control input-email" placeholder="E-mail">
						</div>
					</div>
					<!-- Tele Phone -->
					<div class="col-md-4 col-sm-4">
						<div class="input-group form-group"> <span class="input-group-addon"><span class="flaticon-phone46"></span></span>
							<input type="text" name="telefone" id="telefone" class=" form-control input-phone-number" placeholder="Seu telefone">
						</div>
					</div>
				</div>
				<!-- Message Box -->
				<div class="row">
					<div class="col-md-12 message-box form-group">
						<textarea class=" form-control textarea-message contact-message-box" rows="3" placeholder="​Deixe sua mensagem aqui." name="mensagem" data-bv-field="contact_message" id="mensagem"></textarea>
					</div>
				</div>
				<!-- Send Button -->
				<div class="row send-btn">
					<div class="col-md-12">
						<input type="submit" id="contato-form-submit" class="btn send-button" value="Enviar mensagem">
					</div>
				</div>
			</form>
		</div>
	</div>
</section>



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
				            'posts_per_page'         => '4',
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
