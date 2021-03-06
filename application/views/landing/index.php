<?php
	$metaTitulo = "Reactiva - Rehabilitación Interactiva";
	$metaDescripcion = "Reactiva es una plataforma tecnológica que ayuda al especialista a llevar el control de sus pacientes mientras realiza la sesión de terapia.";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />

		<!-- METADATA -->
		<meta name="description" content="<?php echo $metaDescripcion; ?>" />
		<meta name="keywords" content="APP, Rehabilitación, Rehab, App, Fisioterapia, Fisioterapista, Terapista, Mobile, Android, iOS" />
		<meta name="author" content="CAJANEGRA S.A." />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php echo $metaTitulo; ?>">
		<meta property="og:site_name" content="Reactiva"/>
		<meta property="og:description" content="<?php echo $metaDescripcion; ?>"/>
		<meta property="og:url" content="http://www.cajanegra.com.ec/reactiva/">
		<meta property="og:image" content="<?php echo base_url('assets/landing/images/contents/reactiva-400x400.jpg'); ?>">	
		<meta property="og:image:alt" content="Reactiva">

		<!-- PAGE TITLE -->
		<title>
			<?php echo $metaTitulo; ?>
		</title>

		<!-- FAVICON -->
		<link rel="icon" href="<?php echo base_url('assets/landing/images/favicons/favicon.ico'); ?>" />
		<link rel="apple-touch-icon" href="<?php echo base_url('assets/landing/images/favicons/apple-touch-icon.png'); ?>" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/landing/images/favicons/apple-touch-icon-72x72.png'); ?>" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/landing/images/favicons/apple-touch-icon-114x114.png'); ?>" />

		<!--
		=================================
		STYLESHEETS
		=================================
		-->

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/bootstrap.min.css'); ?>" />

		<!-- WEB FONTS -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

		<!-- ICON FONTS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/font-awesome.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/simple-line-icons.min.css'); ?>" />

		<!-- OTHER STYLES -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/animate.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/owl.carousel.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/nivo-lightbox.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/nivo-lightbox/default.min.css'); ?>" />

		<!-- MAIN STYLES -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/style.css'); ?>" />

		<!-- COLORS -->
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/purple.css'); ?>" />
		<?php /*
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/green.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/turquoise.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/blue.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/pink.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/red.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/orange.css'); ?>" />
		<link id="color-css" rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/colors/yellow.css'); ?>" />
		*/ ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/reactiva.css'); ?>" />

		<!-- JQUERY -->
		<script type="text/javascript" src="<?php echo base_url('assets/landing/js/jquery-1.11.1.min.js'); ?>"></script>

		<script type="text/javascript">
			var base_url = '<?php echo base_url(); ?>';

			var js_site_url = function( urlText ){
				var urlTmp = "<?php echo site_url('" + urlText + "'); ?>";
				return urlTmp;
			}

			var js_base_url = function( urlText ){
				var urlTmp = "<?php echo base_url('" + urlText + "'); ?>";
				return urlTmp;
			}
		</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76745824-10"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-76745824-10');
		</script>

	</head>
	<body class="with-preloader">

		<!--
		=================================
		PRELOADER
		=================================
		-->
		<div id="preloader" class="preloader">
			<div class="preloader-inner">
				<span class="preloader-logo">
					<img src="<?php echo base_url('assets/landing/images/logos/preloader-logo.png'); ?>" alt="Reactiva" />
					<strong>Cargando</strong>
				</span>
			</div>
		</div>

		<div id="document" class="document">
			<!--
			=================================
			HEADER
			=================================
			-->
			<header class="header-section navbar navbar-fixed-top navbar-default header-floating">
				<div class="container">

					<div class="navbar-header">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- NAVBAR LOGO -->
						<a class="navbar-brand navbar-logo" href="#home">
							<img src="<?php echo base_url('assets/landing/images/logos/navbar-logo.png'); ?>" alt="EOS - App Landing Page Template" />
						</a>
					</div>

					<div id="navigation" class="navbar-collapse collapse">
						<!-- NAVIGATION LINKS -->
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#home">Inicio</a>
							</li>
							<li>
								<a href="#features">Características</a>
							</li>
							<li>
								<a href="#description">Descripción</a>
							</li>
							<?php /*
							<li>
								<a href="#testimonials">Testimonios</a>
							</li>
							<li>
								<a href="#pricing">Precio</a>
							</li>
							*/ ?>
						</ul>
					</div>
				</div>
			</header>

			<!--
			=================================
			HERO SECTION
			=================================
			-->
			<section id="home" class="hero-section hero-layout-3 section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay">
				</div>

				<div class="container">

					<div class="hero-content">

						<!-- HERO TEXT -->
						<div class="hero-text wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">

							<!-- LOGO -->
							<img src="<?php echo base_url('assets/landing/images/logos/hero-logo.png'); ?>" alt="EOS - App Landing Page Template" class="hero-logo" />

							<!-- TAGLINE -->
							<h1 class="hero-title">
								Moderniza tu carpeta de pacientes con <strong>REACTIVA</strong>
							</h1>

							<!-- HERO DESCRIPTION -->
							<p class="hero-description">
								Una herramienta eficiente para dar seguimiento a las terapias agendadas y sesiones en curso, para no perder ningún detalle de tu paciente.
							</p>

							<!-- DOWNLOAD BUTTONS -->
							<p class="download-buttons">
								<?php /*
								<!-- APP STORE DOWNLOAD -->
								<a href="#please-edit-this-link" target="_blank" class="btn btn-app-download btn-ios">
									<i class="fa fa-apple"></i>
									<strong>Descargar App</strong> <span>desde App Store</span>
								</a>
								*/ ?>
								<?php /*
								<!-- PLAY STORE DOWNLOAD -->
								<a href="#please-edit-this-link" target="_blank" class="btn btn-app-download btn-primary">
									<i class="fa fa-android"></i>
									<strong>Descargar App</strong> <span>desde Play Store</span>
								</a>
								*/ ?>
								<?php /*
								<!-- WINDOWS PHONE STORE DOWNLOAD -->
								<a href="#please-edit-this-link" target="_blank" class="btn btn-app-download btn-windows-phone">
									<i class="fa fa-windows"></i>
									<strong>Descargar App</strong> <span>desde Windows Store</span>
								</a>
								*/ ?>
							</p>
						</div>

						<!-- HERO IMAGES -->
						<div class="hero-images">

							<img src="<?php echo base_url('assets/landing/images/contents/hero-phone-back.png'); ?>" class="hero-image phone-image-double phone-image-left wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="0.5s" />
							<img src="<?php echo base_url('assets/landing/images/contents/hero-phone-front.png'); ?>" class="hero-image phone-image-double phone-image-right phone-image-front wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="1.5s" />

						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			FEATURES SECTION
			=================================
			-->
			<section id="features" class="features-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Características</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">
								Es una herramienta de apoyo para tus actividades profesionales ya que tienes el control de tus pacientes en cada sesión de terapia.
							</p>
						</div>
					</div>

					<div class="featuers-list-wrapper row">

						<!-- FEATURES LEFT -->
						<div class="col-md-4 col-sm-6">
							<ul class="features-list features-list-left wow fadeInLeft" data-wow-duration="1s">
								<li class="features-list-item">
									<h5>Multipacientes</h5>
									<p>
										Puedes monitorear varios pacientes al mismo tiempo. Revisa el estado individual de una <strong>Terapia Activa</strong> en cualquier momento.
									</p>
								</li>
								<li class="features-list-item">
									<h5>Sesiones</h5>
									<p>
										Organiza tus actividades conociendo de antemano el listado de pacientes y sesiones de terapia que se encuentran en tu <strong>Agenda</strong>.
									</p>
								</li>
							</ul>
						</div>

						<!-- FEATURES RIGHT -->
						<div class="col-md-4 col-md-push-4 col-sm-6">
							<ul class="features-list features-list-right wow fadeInRight" data-wow-duration="1s">
								<li class="features-list-item">
									<h5>Seguimiento</h5>
									<p>
										Todos los comentarios y fotografías ahora los registras directamente en la <strong>Bitácora</strong> de la sesión. No más formularios en papel.
									</p>
								</li>
								<li class="features-list-item">
									<h5>Estadística</h5>
									<p>
										Se muestra el estado de las dolencias de cada paciente a través de <strong>gráficos</strong> para la respectiva evaluación del espacialista.
									</p>
								</li>
							</ul>
						</div>

						<!-- CLOSE UP PHONE IMAGE -->
						<div class="col-md-4 col-md-pull-4 text-center">
							<img src="<?php echo base_url('assets/landing/images/contents/features-phone.png'); ?>" class="features-image wow fadeInUp" alt="" data-wow-duration="1s" />
						</div>

					</div>

				</div>
			</section>

			<!--
			=================================
			FEATURES WITH ICONS SECTION
			=================================
			-->
			<section id="features-icons" class="features-icons-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-8 col-md-push-4">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn" data-wow-duration="1s">
								La plataforma
							</h2>
							<p class="wow fadeIn" data-wow-duration="1s">
								No solo es una aplicación móvil sino una plataforma que integra varios frentes. Desde el agendamiento de pacientes hasta la evaluación al finalizar la sesión de terapia.
							</p>

							<!-- FEATURES LIST WITH ICONS -->
							<div class="features-icon-list row wow fadeIn" data-wow-duration="1s">
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-paper-clip"></i>
									<h5>Entorno Administrativo</h5>
									<p>Ingresa, modifica y elimina información de tus pacientes y tu grupo de especialistas.</p>
								</div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-calendar"></i>
									<h5>Historial</h5>
									<p>Revisa las bitácoras de las sesiones de terapia previas, sus estadísticas y observaciones.</p>
								</div>
								<div class="clear"></div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-globe"></i>
									<h5>Online</h5>
									<p>Toda tu información es almacenada en internet garantizando su disponibilidad 24/7.</p>
								</div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-lock"></i>
									<h5>Seguridad</h5>
									<p>Para poder usar la plataforma todos los usuarios deben estar previamente registrados.</p>
								</div>
								<div class="clear"></div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-heart"></i>
									<h5>Acompañamiento</h5>
									<p>Califica el nivel de seguimiento que necesita tu paciente en la próxima terapia.</p>
								</div>
								<div class="features-icon-list-item col-sm-6">
									<i class="icon-settings"></i>
									<h5>Parametrización</h5>
									<p>En cada sesión de terapia puedes personalizar las partes del cuerpo a monitorear.</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>

						<!-- PHONE IMAGE -->
						<div class="col-md-4 col-md-pull-8 text-center">
							<img src="<?php echo base_url('assets/landing/images/contents/features-icons-phone.png'); ?>" class="features-icons-image wow fadeInLeft" alt="" data-wow-duration="1s" />
						</div>
					</div>

				</div>
			</section>

			<?php /*
			<!--
			=================================
			VIDEO SECTION
			=================================
			-->
			<section id="video" class="video-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay"></div>

				<div class="container">

					<div class="row">
						<div class="col-md-10 col-md-offset-1">

							<div class="video-embed wow fadeIn" data-wow-duration="1s">

								<!-- VIDEO EMBED FROM VIMEO: please change the URL -->
								<iframe src="//player.vimeo.com/video/103435603?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56" width="500" height="281" frameborder="0" allowfullscreen>
								</iframe>

								<!-- VIDEO EMBED FROM YOUTUBE: please change the URL -->
									<!-- <iframe width="560" height="315" src="//www.youtube.com/embed/7UAy8E3e9f8?rel=0" frameborder="0" allowfullscreen>
									</iframe>
								-->

							</div>
						</div>
					</div>

				</div>
			</section>
			*/ ?>

			<!--
			=================================
			DESCRIPTION SECTION
			=================================
			-->
			<section id="description" class="description-section section">
				<div class="container">

					<div class="row">
						<div class="col-md-7">

							<!-- SECTION HEADING -->
							<h2 class="section-heading wow fadeIn" data-wow-duration="1s">
								¿Qué es <strong>Reactiva</strong>?
							</h2>
							<p class="wow fadeIn text-justify" data-wow-duration="1s">
								Es una plataforma que permite realizar un seguimiento personalizado a los pacientes que son atendidos en sesiones de terapia planificadas. La información de los pacientes, especialistas y la agenda de terapias son ingresados a través de un software web administrativo. Mientras que los especialistas monitorean y registran las observaciones a través de una aplicación móvil.<br />
								<strong>Reactiva</strong> se enfoca en tres fases del seguimiento:
							</p>

							<!-- ICON LIST -->
							<ul class="list-with-icons wow fadeIn text-justify" data-wow-duration="1s">
								<li>
									<i class="icon-arrow-right"></i>
									<strong>Al empezar</strong>.- Se revisa el historial del paciente, nivel de acompañamiento, estadísticas. También se puede agregar más dolencias a monitorear.
								</li>
								<li>
									<i class="icon-arrow-right"></i>
									<strong>Durante</strong>.- El especialista recoge información a través de comentarios y fotografías de las incidencias. Esto se almacena en la bitácora.
								</li>
								<li>
									<i class="icon-arrow-right"></i>
									<strong>Al finalizar</strong>.- Se puede evaluar la mejoría del paciente respecto a las lesiones indicadas al inicio de la sesión.
								</li>
							</ul>
						</div>

						<!-- PHONE IMAGE -->
						<div class="col-md-5 text-center">

							<img src="<?php echo base_url('assets/landing/images/contents/description-phone-back.png'); ?>" class="description-image phone-image-double phone-image-left wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="0.5s" />
							<img src="<?php echo base_url('assets/landing/images/contents/description-phone-front.png'); ?>" class="description-image phone-image-double phone-image-right phone-image-front wow fadeInRight" alt="" data-wow-duration="1s" data-wow-delay="1.5s" />

						</div>
					</div>

				</div>
			</section>


			<?php /*
			<!--
			=================================
			TESTIMONIALS SECTION
			=================================
			-->
			<section id="testimonials" class="testimonials-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="accent-background-overlay">
				</div>

				<div class="container">

					<!-- TESTIMONIALS -->
					<div class="testimonials-carousel">
						<ul class="testimonial-items owl-carousel wow fadeIn" data-wow-duration="1s">
							<li>
								<div class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in blandit sapien. Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis.</div>
								<div class="testimonial-name">John Doe, CEO of Company Inc.</div>
							</li>
							<li>
								<div class="testimonial-text">Fusce euismod vulputate quam, sed fringilla lectus convallis eu. Fusce laoreet risus quis eros venenatis, eu vehicula nibh condimentum. Phasellus suscipit dui fermentum eleifend suscipit.</div>
								<div class="testimonial-name">Jane Doe, Wedding Photographer</div>
							</li>
						</ul>
					</div>

				</div>
			</section>
			*/ ?>



			<!--
			=================================
			SCREENSHOTS SECTION
			=================================
			-->
			<section id="screenshots" class="screenshots-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">
						Screenshots
					</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">
								Te mostramos lo que es <strong>Reactiva</strong> y su funcionamiento.
							</p>
						</div>
					</div>

					<!-- SCREENSHOT IMAGES -->
					<div class="sreenshots-carousel">
						<ul class="screenshot-images owl-carousel wow bounceIn" data-wow-duration="1s">
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/login.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/login.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/terapias-activas-preview3.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/terapias-activas-preview3.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/terapia-pausa.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/terapia-pausa.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/terapias-activas-preview2.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/terapias-activas-preview2.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/agenda-hoy.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/agenda-hoy.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/agenda-semana-menu.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/agenda-semana-menu.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/agenda2.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/agenda2.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/iniciar-terapia.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/iniciar-terapia.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/historial-general.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/historial-general.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/historial-general-mes.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/historial-general-mes.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/historial-citas-dia.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/historial-citas-dia.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('assets/landing/images/contents/screenshots/loading.jpg'); ?>" class="screenshot-image" data-lightbox-gallery="screenshots-gallery">
									<div class="screenshot-image-inner">
										<img src="<?php echo base_url('assets/landing/images/contents/screenshots/loading.jpg'); ?>" alt="screenshot" />
										<div class="hover">
											<i class="icon-magnifier-add"></i>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<?php /*
			<!--
			=================================
			PRESS SECTION
			=================================
			-->
			<section id="press" class="press-section section">
				<div class="container">
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">
						Clientes
					</h2>

					<!-- LOGOS -->
					<div class="press-logos wow fadeIn" data-wow-duration="1s">
						<span>
							<img src="<?php echo base_url('assets/landing/images/contents/press-themeforest.png'); ?>" alt="themeforest" />
						</span>
						<span>
							<img src="<?php echo base_url('assets/landing/images/contents/press-graphicriver.png'); ?>" alt="graphicriver" />
						</span>
						<span>
							<img src="<?php echo base_url('assets/landing/images/contents/press-codecanyon.png'); ?>" alt="codecanyon" />
						</span>
						<span>
							<img src="<?php echo base_url('assets/landing/images/contents/press-audiojungle.png'); ?>" alt="audiojungle" />
						</span>
					</div>

				</div>
			</section>
			*/ ?>

			<?php /*
			<!--
			=================================
			PRICING SECTION
			=================================
			-->
			<section id="pricing" class="pricing-section section">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Planes</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn mb-p-planes" data-wow-duration="1s">
								Aprovecha todo lo que <strong>Reactiva</strong> tiene para tí. Optimiza el seguimiento a tus pacientes y sus sesiones de terapias.
							</p>
						</div>
					</div>

					<!-- PRICING TABLE BÁSICO -->
					<ul class="pricing-table row wow bounceIn" data-wow-duration="1s">

						<!-- PRICING PACKAGE 1 -->
						<li class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<div class="pricing-package">
								<div class="pricing-package-strip">
								</div>
								<div class="pricing-package-header">
									<h4>Estudiantil</h4>
									<p>Estudiantes de carreras afines a terapia y rehabilitación</p>
									<div class="price">
										<span class="price-observ">&nbsp;</span>
										<span class="price-currency">$</span>
										<span class="price-number">9.99</span>
										<span class="price-period">Por mes</span>
									</div>
								</div>
								<ul class="pricing-package-items">
									<li>
										<i class="fa fa-check"></i>
										Agendamiento de citas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Bitácora de terapias
									</li>
									<li>
										<i class="fa fa-times"></i>
										Múltiples terapias activas
									</li>
									<li>
										<i class="fa fa-times"></i>
										Historial
									</li>
									<li>
										<i class="fa fa-times"></i>
										Evaluación y estadísticas
									</li>
									<li>
										<i class="fa fa-times"></i>
										Varios terapistas
									</li>
									<li>
										<i class="fa fa-times"></i>
										Usuarios administrativos
									</li>
									<li>
										<i class="fa fa-times"></i>
										Factor de Acompañamiento
									</li>
								</ul>
							</div>
						</li>

						<!-- PRICING PACKAGE 2 -->
						<li class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<div class="pricing-package pricing-package-featured">
								<div class="pricing-package-strip">
								</div>
								<div class="pricing-package-header">
									<h4>Especialistas <span class="label label-warning">Popular</span>
									</h4>
									<p>Profesionales que llevan el control de sus propios pacientes.</p>
									<div class="price">
										<span class="price-observ">&nbsp;</span>
										<span class="price-currency">$</span>
										<span class="price-number">14.99</span>
										<span class="price-period">por mes</span>
									</div>
								</div>
								<ul class="pricing-package-items">
									<li>
										<i class="fa fa-check"></i>
										Agendamiento de citas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Bitácora de terapias
									</li>
									<li>
										<i class="fa fa-check"></i>
										Múltiples terapias activas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Historial
									</li>
									<li>
										<i class="fa fa-check"></i>
										Evaluación y estadísticas
									</li>
									<li>
										<i class="fa fa-times"></i>
										Varios terapistas
									</li>
									<li>
										<i class="fa fa-times"></i>
										Usuarios administrativos
									</li>
									<li>
										<i class="fa fa-times"></i>
										Factor de Acompañamiento
									</li>
								</ul>
							</div>
						</li>

						<!-- PRICING PACKAGE 3 -->
						<li class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
							<div class="pricing-package">
								<div class="pricing-package-strip">
								</div>
								<div class="pricing-package-header">
									<h4>Centros Médicos</h4>
									<p>Entidades con varios especialistas que comparten pacientes.</p>
									<div class="price">
										<span class="price-observ">&nbsp;</span>
										<span class="price-currency">$</span>
										<span class="price-number">64.99</span>
										<span class="price-period">por mes</span>
									</div>
								</div>
								<ul class="pricing-package-items">
									<li>
										<i class="fa fa-check"></i>
										Agendamiento de citas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Bitácora de terapias
									</li>
									<li>
										<i class="fa fa-check"></i>
										Múltiples terapias activas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Historial
									</li>
									<li>
										<i class="fa fa-check"></i>
										Evaluación y estadísticas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Varios terapistas
									</li>
									<li>
										<i class="fa fa-check"></i>
										Usuarios administrativos
									</li>
									<li>
										<i class="fa fa-check"></i>
										Factor de Acompañamiento
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</section>
			*/ ?>

			<!--
			=================================
			ACERCA DE
			=================================
			-->
			<section id="about" class="about-section section">
				<div class="container">
					<!-- SECTION HEADING -->
					<?php /*
					*/ ?>
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Nosotros</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">
								<strong>REACTIVA</strong> es un producto desarrollado por la empresa <a href="http://www.cajanegra.com.ec" target="_blank">CAJA NEGRA</a>. Forma parte del grupo de emprendimientos involucradas dentro del programa de acompañamiento y mentorías <a href="http://onenest.partners/" target="_blank">OneNest</a>.
							</p>
						</div>
					</div>

					<!-- LOGOS -->
					<div class="about-logos wow fadeIn" data-wow-duration="1s">
						<span>
							<a href="http://www.cajanegra.com.ec" target="_blank">
								<img src="<?php echo base_url('assets/landing/images/logos/logo-cn.png'); ?>" class="logos-im" alt="Caja Negra" />
							</a>
						</span>
						<span>
							<a href="http://onenest.partners/" target="_blank">
								<img src="<?php echo base_url('assets/landing/images/logos/logo-onenest.png'); ?>" class="logos-im" alt="One Nest" />
							</a>
						</span>
					</div>

				</div>
			</section>

			<!--
			=================================
			SUBSCRIBE SECTION
			=================================
			-->
			<section id="subscribe" class="subscribe-section section section-inverse-color parallax-background" data-stellar-background-ratio="0.4">

				<!-- BACKGROUND OVERLAY -->
				<div class="black-background-overlay">
				</div>

				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">
						Suscríbete a nuestro Newsletter
					</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="wow fadeIn" data-wow-duration="1s">
								Danos tu dirección de correo electrónico y te avisaremos cuando tengamos novedades en <strong>Reactiva</strong>. No te preocupes, odiamos el spam tanto como tú.
							</p>
						</div>
					</div>

					<!-- SUBSCRIBE FORM -->
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form action="<?php echo site_url('landing/addToNewsletter'); ?>" method="post" id="subscribe-form" class="subscribe-form wow fadeIn" data-wow-duration="1s" role="form">
								<div class="form-validation alert">
									<!-- Validation Message here -->
								</div>
								<div class="form-group subscribe-form-input">
									<input type="email" name="email" id="subscribe-form-email" class="subscribe-form-email form-control form-control-lg" placeholder="Ingresa tu email" autocomplete="off" />
									<button class="subscribe-form-submit btn btn-black btn-lg" data-loading-text="Cargando...">
										Suscribir
									</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			CONTACT SECTION
			=================================
			-->
			<section id="contact" class="contact-section section collapse">
				<div class="container">

					<!-- SECTION HEADING -->
					<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">
						Contacta a <strong>Reactiva</strong>
					</h2>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="animated wow fadeIn" data-wow-duration="1s">
								¿Tienes comentarios o preguntas sobre nuestra plataforma? No dudes en contactarnos en cualquier momento, te contactaremos en 24 horas.
							</p>
						</div>
					</div>

					<!-- CONTACT FORM -->
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form action="<?php echo site_url('landing/contacto'); ?>" method="post" id="contact-form" class="contact-form wow fadeInUp" data-wow-duration="1s" role="form">
								<div class="form-validation alert">
									<!-- Validation Message here -->
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Nombre completo" autocomplete="off">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Correo" autocomplete="off">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="subject" placeholder="Asunto" autocomplete="off">
								</div>
								<div class="form-group">
									<textarea rows="4" class="form-control" name="message" placeholder="Escríbenos tu mensaje"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block" data-loading-text="Enviando...">
										Enviar Mensaje
									</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</section>

			<!--
			=================================
			FOOTER SECTION
			=================================
			-->
			<footer class="footer-section section">

				<!-- CONTACT SECTION TOGGLE -->
				<a href="#contact" class="contact-toggle" data-toggle="collapse">
					<i class="icon-envelope"></i>

				</a>

				<div class="container">

					<!-- DOWNLOAD BUTTONS -->
					<p class="download-buttons wow fadeIn" data-wow-duration="1s">
						<?php /*
						<!-- APP STORE DOWNLOAD -->
						<a href="#please-edit-this-link" target="_blank" class="btn btn-app-download btn-ios">
							<i class="fa fa-apple"></i>
							<strong>Descargar App</strong> <span>desde App Store</span>
						</a>
						*/ ?>
						<?php /*
						<!-- PLAY STORE DOWNLOAD -->
						<a href="#please-edit-this-link" target="_blank" class="btn btn-app-download btn-primary">
							<i class="fa fa-android"></i>
							<strong>Descargar App</strong> <span>desde Play Store</span>
						</a>
						*/ ?>
						<?php /*
						<!-- WINDOWS PHONE STORE DOWNLOAD -->
						<a href="#please-edit-this-link" target="_blank" class="btn btn-app-download btn-windows-phone">
							<i class="fa fa-windows"></i>
							<strong>Descargar App</strong> <span>desde Windows Store</span>
						</a>
						*/ ?>
					</p>

					<!-- SOCIAL MEDIA LINKS -->
					<ul class="social-media-links wow fadeIn" data-wow-duration="1s">
						<li>
							<a href="https://www.facebook.com/ReactivaCN" target="_blank">
								<i class="fa fa-facebook"></i>
								<span class="sr-only">Facebook</span>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/ReactivaCN" target="_blank">
								<i class="fa fa-instagram"></i>
								<span class="sr-only">Instagram</span>
							</a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?phone=593978997377&text=Hola%20amigos%20de%20CAJA%20NEGRA,%20estoy%20interesado/a%20en%20REACTIVA." target="_blank">
								<i class="fa fa-whatsapp"></i>
								<span class="sr-only">WhatsApp</span>
							</a>
						</li>
						<li>
							<a href="mailto:info@cajanegra.com.ec?Subject=Contacto%20por%20REACTIVA" target="_blank">
								<i class="fa fa-envelope"></i>
								<span class="sr-only">Email</span>
							</a>
						</li>
						<?php /*
						<li>
							<a href="http://twitter.com" target="_blank">
								<i class="fa fa-twitter"></i>
								<span class="sr-only">Twitter</span>
							</a>
						</li>
						*/ ?>
					</ul>

					<!-- COPYRIGHT -->
					<div class="copyright">
						REACTIVA es un producto de <a href="http://www.cajanegra.com.ec" target="_blank">CAJANEGRA S.A.</a>
						<br />
						<?php echo date("Y"); ?> &copy; Todos los derechos están reservados.
					</div>
				</div>
			</footer>

		</div>

		<!--
		=================================
		JAVASCRIPTS
		=================================
		-->

		<script src="<?php echo base_url('assets/landing/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/retina.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/smoothscroll.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/wow.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/jquery.nav.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/nivo-lightbox.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/jquery.stellar.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/owl.carousel.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/landing/js/script.js'); ?>"></script>

	</body>

</html>