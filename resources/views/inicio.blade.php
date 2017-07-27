@extends('layout.main')

@section('title', 'Bienvenidos')
	
@section('csslibrary')
	<!-- Page loader -->
	<link rel = "stylesheet" href = "assets/pace/css/pace-minimal.css" type = "text/css">
	
	<!-- CSS animation library -->
	<link rel = "stylesheet" href = "assets/animate/animate.min.css" type = "text/css">
	
	<!-- Plugins -->
	<link rel = "stylesheet" href = "assets/bootstrap-select/css/bootstrap-select.min.css">
	<link rel = "stylesheet" href = "assets/swiper/css/swiper.min.css">
	
	<!-- Light Gallery -->
	<link rel = "stylesheet" href = "assets/lightgallery/css/lightgallery.min.css">
	
	<!-- Icons -->
	<link rel = "stylesheet" href = "fonts/font-awesome/css/font-awesome.min.css" type = "text/css">
	<link rel = "stylesheet" href = "fonts/ionicons/css/ionicons.min.css" type = "text/css">
	<link rel = "stylesheet" href = "fonts/line-icons/line-icons.css" type = "text/css">
	<link rel = "stylesheet" href = "fonts/line-icons-pro/line-icons-pro.css" type = "text/css">
	
	<!-- RS5.0 -->
	<link rel = "stylesheet" type = "text/css" href = "assets/revolution/css/settings.css">
	<link rel = "stylesheet" type = "text/css" href = "assets/revolution/css/layers.css">
	<link rel = "stylesheet" type = "text/css" href = "assets/revolution/css/navigation.css">
@endsection

@section('intro-header')
	<!-- Header -->
	{{--<div class = "intro-header">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						<h1>Haz crecer tu negocio</h1>
					</div>
				</div>
			</div>
		</div>
	</div>--}}
	<!-- /.intro-header -->
	
	<!-- REVOLUTION SLIDER -->
	<div id = "rev_slider_1_wrapper" class = "rev_slider_wrapper fullwidthbanner-container" data-alias = "image-hero39" data-source = "gallery">
		<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
		<div id = "rev_slider_1" class = "rev_slider fullwidthabanner" style = "display:none;" data-version = "5.3.0.2">
			<ul>
				<li data-index = "rs-3" data-transition = "slidevertical" data-slotamount = "1" data-hideafterloop = "0" data-hideslideonmobile = "off" data-easein = "default" data-easeout = "default" data-masterspeed = "1500" data-rotate = "0" data-fstransition = "fade" data-fsmasterspeed = "1500" data-fsslotamount = "7" data-saveperformance = "off" data-title = "1" data-param1 = "" data-param2 = "" data-param3 = "" data-param4 = "" data-param5 = "" data-param6 = "" data-param7 = "" data-param8 = "" data-param9 = "" data-param10 = "" data-description = "">
					<!-- MAIN IMAGE -->
					<img src = "img/banners/inicio_01.png" alt = "" data-bgposition = "center center" data-bgfit = "cover" data-bgrepeat = "no-repeat" class = "rev-slidebg" data-no-retina>
					
					<div class = "tp-caption title--style-1 c-white tp-resizeme" id = "slide-3-layer-2"
						 data-x = "['center','center','center','center']" data-hoffset = "['0','40','0','0']"
						 data-y = "['middle','middle','middle','middle']" data-voffset = "['-80','-80','-80','-80']"
						 data-fontsize = "['50','50','40','40']"
						 data-lineheight = "['50','50','40','40']"
						 data-width = "none"
						 data-height = "none"
						 data-whitespace = "nowrap"
						 data-type = "text"
						 data-responsive_offset = "on"
						 data-frames = '[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
						 data-textAlign = "['left','left','left','left']"
						 data-paddingtop = "[0,0,0,0]"
						 data-paddingright = "[0,0,0,0]"
						 data-paddingbottom = "[0,0,0,0]"
						 data-paddingleft = "[0,0,0,0]"
						 style = "z-index: 11; white-space: nowrap;text-transform:left;">
						
						<span class = "strong-700" style = "color: white;">Administra tu Negocio</span>
					
					</div>
				</li>
				
				<li data-index = "rs-2" data-transition = "slidevertical" data-slotamount = "1" data-hideafterloop = "0" data-hideslideonmobile = "off" data-easein = "default" data-easeout = "default" data-masterspeed = "1500" data-rotate = "0" data-fstransition = "fade" data-fsmasterspeed = "1500" data-fsslotamount = "7" data-saveperformance = "off" data-title = "2" data-param1 = "" data-param2 = "" data-param3 = "" data-param4 = "" data-param5 = "" data-param6 = "" data-param7 = "" data-param8 = "" data-param9 = "" data-param10 = "" data-description = "">
					<!-- MAIN IMAGE -->
					<img src = "img/banners/inicio_02.png" alt = "" data-bgposition = "center center" data-bgfit = "cover" data-bgrepeat = "no-repeat" class = "rev-slidebg" data-no-retina>
					
					
					<div class = "tp-caption title--style-1 c-white tp-resizeme" id = "slide-3-layer-2"
						 data-x = "['center','center','center','center']" data-hoffset = "['0','40','0','0']"
						 data-y = "['middle','middle','middle','middle']" data-voffset = "['-80','-80','-80','-80']"
						 data-fontsize = "['50','50','40','40']"
						 data-lineheight = "['50','50','40','40']"
						 data-width = "none"
						 data-height = "none"
						 data-whitespace = "nowrap"
						 data-type = "text"
						 data-responsive_offset = "on"
						 data-frames = '[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
						 data-textAlign = "['left','left','left','left']"
						 data-paddingtop = "[0,0,0,0]"
						 data-paddingright = "[0,0,0,0]"
						 data-paddingbottom = "[0,0,0,0]"
						 data-paddingleft = "[0,0,0,0]"
						 style = "z-index: 11; white-space: nowrap;text-transform:left;">
						
						<span class = "strong-700" style = "color: white;">Mejora tus procesos</span>
					
					</div>
				</li>
				
				<li data-index = "rs-1" data-transition = "slidevertical" data-slotamount = "1" data-hideafterloop = "0" data-hideslideonmobile = "off" data-easein = "default" data-easeout = "default" data-masterspeed = "1500" data-rotate = "0" data-fstransition = "fade" data-fsmasterspeed = "1500" data-fsslotamount = "7" data-saveperformance = "off" data-title = "3" data-param1 = "" data-param2 = "" data-param3 = "" data-param4 = "" data-param5 = "" data-param6 = "" data-param7 = "" data-param8 = "" data-param9 = "" data-param10 = "" data-description = "">
					<!-- MAIN IMAGE -->
					<img src = "img/banners/inicio_03.png" alt = "" data-bgposition = "center center" data-bgfit = "cover" data-bgrepeat = "no-repeat" class = "rev-slidebg" data-no-retina>
					
					
					<div class = "tp-caption title--style-1 c-white tp-resizeme" id = "slide-3-layer-2"
						 data-x = "['center','center','center','center']" data-hoffset = "['0','40','0','0']"
						 data-y = "['middle','middle','middle','middle']" data-voffset = "['-80','-80','-80','-80']"
						 data-fontsize = "['50','50','40','40']"
						 data-lineheight = "['50','50','40','40']"
						 data-width = "none"
						 data-height = "none"
						 data-whitespace = "nowrap"
						 data-type = "text"
						 data-responsive_offset = "on"
						 data-frames = '[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
						 data-textAlign = "['left','left','left','left']"
						 data-paddingtop = "[0,0,0,0]"
						 data-paddingright = "[0,0,0,0]"
						 data-paddingbottom = "[0,0,0,0]"
						 data-paddingleft = "[0,0,0,0]"
						 style = "z-index: 11; white-space: nowrap;text-transform:left;">
						
						<span class = "strong-700" style = "color: white;">Has crecer tu negocio</span>
					
					</div>
				</li>
			</ul>
			<div class = "tp-bannertimer tp-bottom" style = "visibility: hidden !important;"></div>
		</div>
	</div>
	<!-- END REVOLUTION SLIDER -->
@endsection

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<h1 class = "section-heading h-somos">Somos</h1>
					<p class = "text-justify p-somos">Somos una <span class = "s-resalta">empresa 100% Tapatía</span>,
						que
						nació
						en 1992 y que como otras grandes del sector comenzó en una pequeña
						habitación en casa de los padres,
						haciendo programas administrativos a medida de cada empresa,
						fuimos
						creciendo hasta crear el primer
						PuntoZero, nutrido de la experiencia, y el conocimiento
						administrativo
						adquirido y las sugerencias
						de los mismos clientes.</p>
					
					<p class = "text-justify p-somos">Nosotros NO gastamos miles de pesos en publicidad, han sido el
						trabajo
						y
						nuestros clientes quien nos han creado un valor de marca que hoy
						ya
						<span class = "s-resalta">con más de 20 años operando, seguimos siendo una empresa joven y de jóvenes, con presencia en toda la república mexicana.</span>
						Actualizándonos día a día para cubrir las crecientes necesidades
						del
						mercado y ofrecer a nuestros
						clientes mejores y más nuevas herramientas para controlar y hacer
						crecer sus negocios y nosotros
						crecer junto con ellos.</p>
					
					<p class = "text-justify p-somos"> Tenemos la convicción de que los programas de control
						administrativo
						no
						tienen que ser caros para ser buenos, <span class = "s-resalta">por eso nuestros productos son de los más económicos del mercado, apoyando así a las empresas o pequeños negocios</span>
						para que fácilmente puedan comenzar a controlar mejor su
						administración y por ende crecer más
						rápidamente.</p>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
@endsection

@section('jslibrary')
	<!-- jQuery -->
	<script src = "js/jquery.js"></script>
	<script src = "js/jquery-ui.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src = "js/bootstrap.min.js"></script>
	<!-- Page loader -->
	<script src = "assets/pace/js/pace.min.js"></script>
	
	<!-- Essential JSs -->
	<script src = "assets/bootstrap/js/bootstrap.min.js"></script>
	<script src = "js/bootstrap-extensions/bootstrap-dropdownhover.js"></script>
	<script src = "js/bootstrap-extensions/bootstrap-dropdowneffect.js"></script>
	<script src = "js/bootstrap-extensions/bootstrap-validator.js"></script>
	<script src = "js/modernizr.custom.js"></script>
	<script src = "js/jquery.mousewheel-3.0.6.pack.js"></script>
	<script src = "js/jquery.easing.js"></script>
	<script src = "js/classie.js"></script>
	<script src = "js/slidebar/slidebar.js"></script>
	
	<!-- Assets - Required -->
	<script src = "assets/headroom/headroom.min.js"></script>
	<script src = "assets/headroom/jquery.headroom.min.js"></script>
	<script src = "assets/footer-reveal/footer-reveal.min.js"></script>
	<script src = "assets/bootstrap-select/js/bootstrap-select.min.js"></script>
	<script src = "assets/swiper/js/swiper.min.js"></script>
	<script src = "assets/parallax/parallax.min.js"></script>
	<script src = "assets/viewport-checker/viewportchecker.min.js"></script>
	<script src = "assets/milestone-counter/jquery.countTo.js"></script>
	
	<!-- Light Gallery -->
	<script src = "assets/lightgallery/js/lightgallery.min.js"></script>
	<script src = "assets/lightgallery/js/lg-thumbnail.min.js"></script>
	<script src = "assets/lightgallery/js/lg-video.js"></script>
	
	<!-- Cross-browser responsivity scripts -->
	<!--[if lt IE 9]>
	<script src = "js/html5shiv.js"></script>
	<script src = "js/respond.min.js"></script>
	<![endif]-->
	
	<!-- Google Analitycs JS -->
	<script type = "text/javascript" src = "js/wpx.ga.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type = "text/javascript" src = "assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type = "text/javascript" src = "assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type = "text/javascript" src = "js/revolution/revolution-slider-shop-grid-1.js"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type = "text/javascript" src = "assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	
	<!-- App JS -->
	<script src = "js/wpx.app.js"></script>
@endsection