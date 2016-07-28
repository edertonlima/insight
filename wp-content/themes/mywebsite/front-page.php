<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title and Meta Tags Begins -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta charset="utf-8">
<title>Desirable-home</title>
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
							<li> <a href="mailto:email@example.com"> <i class="flaticon-black164"></i> info@yoursite.com </a> </li>
							<li> <a href="#"> <i class="flaticon-phone46"></i> +12 123 456 789 </a> </li>
						</ul>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3"> <i class="flaticon-list50"></i> </button>
					</div>
					<!-- Social Icons -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
						<ul class="nav navbar-nav navbar-right header-top-right">
							<li><a href="#"><i class="flaticon-facebook55 facebook-icon"></i></a></li>
							<li><a href="#"><i class="flaticon-youtube8 youtube-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							

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
							<li><a href="#insight" class="scroll insight" title="Insight Oftalmologia">insight oftalmologia</a></li>
							<!--<li><a href="#features-section" class="scroll">Features</a></li>-->
							<li><a href="#doencas" class="scroll" title="Doenças">Doenças</a></li>
							<li><a href="#cirurgias" class="scroll" title="Cirurgias">Cirurgias</a></li>
							<li><a href="#blog" class="scroll">Blog</a></li>
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
		<div class="container">
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
						<div class="carousel-caption">
							<h1>We welcome you to our website</h1>
							<p>All the best ideas collected specially for you</p>
							<p> This theme has everything you need</p>
							<div class="btn">Know more</div>
						</div>
						<div class="col-md-8 col-md-offset-4"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg" class="img-responsive"  alt="slider-1"> </div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="carousel-caption">
							<h1>We do business worldwide</h1>
							<p>We ensure quality & support</p>
							<p>People love us & we love them</p>
							<div class="btn">Know more</div>
						</div>
						<div class="col-md-8 col-md-offset-4"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider/2.jpg"  class="img-responsive" alt="slider-1"> </div>
					</div>
				</div>
				<?php /*
				<div class="item">
					<div class="row">
						<div class="carousel-caption">
							<h1>We built for passionate people</h1>
							<p>Awesome colors, based on bootstrap</p>
							<p>Pixel perfect design</p>
							<div class="btn">Know more</div>
						</div>
						<div class="col-md-8 col-md-offset-4"> <img src="<?php echo get_template_directory_uri(); ?>/images/slider/3.png"  class="img-responsive" alt="slider-1"> </div>
					</div>
				</div>
				*/ ?>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> 
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> </a> 
  </div>
</section>
<!-- Top Slider Ends -->











<?php /* INSIGHT OFTALMOLOGIA */ ?>
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
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">A <strong>In Sight,</strong> conta com equipe médica altamente capacitada, com forte experiência acadêmica e prática. Com profissionais formados em diversas especialidades da oftalmologia, a <strong>In Sight</strong> oferece soluções integradas, tratando com excelência, praticamente todas as patologias oculares existentes.</p>
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
				<div class="col-md-4">
					<div class="office-image animated" data-animation="fadeInLeft" data-animation-delay="500">
						<!-- About Our Company Photo -->
						<img src="<?php echo get_template_directory_uri(); ?>/images/about-us/clinica.jpg" alt="In Sight Oftalmologia" class=" img-responsive"/> </div>
				</div>
				<div class="col-md-8 about-content animated" data-animation="fadeInRight" data-animation-delay="500">
					<!-- About Our Company Sub Title -->
					<h3>Sobre a In Sight Oftalmologia</h3>
					<!-- About Our Company Content -->
					<p>Há mais de quinze anos, a In Sight é referência em Oftalmologia.</p>
					<p class="next-content">Instalada em uma confortável casa no coração da Vila Nova Conceição e um corpo clínico composto por especialistas das mais diversas áreas da oftalmologia, muitos deles fazendo parte do corpo docente dos principais centros de ensino de oftalmologia do Brasil e com formação internacional. Além disso a In Sight conta com tecnologia de ponta e equipamentos que propiciam exames detalhados e precisos que contribuem para a qualidade dos diagnósticos.</p>
					<p class="next-content">Conveniência oferecida pela ampla e bem localizada sede, pelo atendimento diferenciado e pela variedade de convênios aceitos.</p>
					<p class="next-content">Visite-nos e deixe a In Sight contribuir para a sua qualidade de vida!</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Slant Shape -->
	<div class="slant-bottom-angle"></div>
</div>




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
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
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
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Astigmatismo</h3>
								<p class="description"><strong>Imagem distorcida / borrada na retina</strong></p>
								<p class="description">Uma curvatura irregular da córnea ou uma forma irregula do cristalino produz uma imagem distorcida e/ou borrada na retina. Este tipo de defeito é chamado astigmatismo. As modalidades de tratamentos incluem óculos, lentes de contato e cirurgia à laiser.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Presbiopio</h3>
								<p class="description"><strong>Dificuldade para enxergar objetos próximos</strong></p>
								<p class="description">À medida que as pessoas envelhecem, o cristalino se torna menos flexível e sua capacidade de acomodação se reduz. Para auxiliar o présbita a focar novamente os objetos de perto podemos usar óculos de leitura, óculos multifocais ou lentes de contato.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Uveíte</h3>
								<p class="description"><strong>Visão desfocada / dor nos olhos</strong></p>
								<p class="description">Entende-se por uveíte, toda inflamação que acometa a íris, o corpo ciliar ou a coróide. A principal causa de uveíte anterior é trauma ocular e de uveíte posterior é a toxoplasmose. O tratamento varia de  acordo com a causa.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
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
					<h2 class="section-title text-center animated" data-animation="fadeInRight" data-animation-delay="300">Doenças</h2>
					<!-- Sub Title -->
					<p class="sub-title text-center animated" data-animation="fadeInLeft" data-animation-delay="300">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
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
						<!-- Item 2 Begins -->
						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Astigmatismo</h3>
								<p class="description"><strong>Imagem distorcida / borrada na retina</strong></p>
								<p class="description">Uma curvatura irregular da córnea ou uma forma irregula do cristalino produz uma imagem distorcida e/ou borrada na retina. Este tipo de defeito é chamado astigmatismo. As modalidades de tratamentos incluem óculos, lentes de contato e cirurgia à laiser.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Presbiopio</h3>
								<p class="description"><strong>Dificuldade para enxergar objetos próximos</strong></p>
								<p class="description">À medida que as pessoas envelhecem, o cristalino se torna menos flexível e sua capacidade de acomodação se reduz. Para auxiliar o présbita a focar novamente os objetos de perto podemos usar óculos de leitura, óculos multifocais ou lentes de contato.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name">Uveíte</h3>
								<p class="description"><strong>Visão desfocada / dor nos olhos</strong></p>
								<p class="description">Entende-se por uveíte, toda inflamação que acometa a íris, o corpo ciliar ou a coróide. A principal causa de uveíte anterior é trauma ocular e de uveíte posterior é a toxoplasmose. O tratamento varia de  acordo com a causa.</p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
							</div>
						</div>

						<div class="team-item">
							<!-- Img -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/doencas.jpg" width="370" height="225" alt="" class="img-responsive" />
							<!-- Team Member Details -->
							<div class="team-content">
								<h3 class="name"></h3>
								<p class="description"><strong></strong></p>
								<p class="description"></p>
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



<?php /* TESTEMUNHOS */ ?>
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





<?php /* BLOG */ ?>
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



<!-- FOOTER -->
<section id="footer" class="footer-bg" >
	<div class="footer-section">
		<div class="container">
			<!-- Items -->
			<div class="row">
				<!-- Item 1 -->
				<div class="col-sm-3 animated" data-animation="fadeInUp" data-animation-delay="300">
					<!-- Title -->
					<h3>About Us</h3>
					<!-- Content -->
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
					<!-- Footer Contact -->
					<ul>
						<li>123 Street Name</li>
						<li>Road Name</li>
						<li>Country Name</li>
						<li>+124 123 456 789</li>
					</ul>
				</div>
				<!-- Item 2 -->
				<div class="col-sm-3 tweet-section animated" data-animation="fadeInUp" data-animation-delay="700">
					<!-- Title -->
					<h3>Latest tweets</h3>
					<!-- Content 1 -->
					<div class="tweet">
						<!-- Twitter Slider -->
						<div class="tweets_feed"></div>
					</div>
				</div>
				<!-- Item 3 -->
				<div class="col-sm-3 latest-post animated" data-animation="fadeInUp" data-animation-delay="700">
					<!-- Title -->
					<h3>Latest post</h3>
					<ul>
						<li><a href="#">click here to what next?</a></li>
						<li><a href="#">Latest Project Post</a></li>
						<li><a href="#">Blog Video Post</a></li>
						<li><a href="#">Blog Image Post</a></li>
						<li><a href="#">Single Project Post</a> </li>
						<li><a href="#">Project SlideShow Post</a></li>
					</ul>
				</div>
				<!-- Item 4 -->
				<div class="col-sm-3 flickr animated" data-animation="fadeInUp" data-animation-delay="900">
					<!-- Title -->
					<h3>Flickr</h3>
					<!-- Flickr Items 1 -->
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/1.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/2.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/3.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/4.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/5.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/6.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/7.jpg" alt="flickr-1" class="img-responsive"/></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/flickr/8.jpg" alt="flickr-1" class="img-responsive"/></li>
					</ul>
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
						<p class="copyright-content">&copy;&nbsp;COPYRIGHT 2014.&nbsp;&nbsp;<a href="#"> &nbsp;"DESIRABLE "&nbsp;</a>&nbsp;By RaslDesign. All Rights Reserved.</p>
					</div>
					<!-- Copy Right Social Icons -->
					<div class="col-sm-6">
						<div class="social-icon"> <a href="#"><i class="fa fa-rss rss-icon"></i></a> <a href="#"><i class="fa fa-facebook facebook-icon"></i></a> <a href="#"><i class="fa fa-tumblr tumblr-icon"></i></a> <a href="#"><i class="fa fa-youtube youtube-icon"></i></a> <a href="#"><i class="fa fa-google google-icon"></i></a> <a href="#"><i class="fa fa-dribbble dribble-icon"></i></a> <a href="#"><i class="fa fa-vimeo-square vimeo-icon"></i></a> <a href="#"><i class="fa fa-skype skype-icon"></i></a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copy Rights Section ends-->
</section>
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

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>
