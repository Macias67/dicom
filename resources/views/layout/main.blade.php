<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<meta name = "description" content = "">
	<meta name = "author" content = "">
	
	<title>DICOM - @yield('title')</title>
	
	<!-- Custom Fonts -->
	<link href = "https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel = "stylesheet">
	<link href = "font-awesome/css/font-awesome.min.css" rel = "stylesheet" type = "text/css">
	
	<!-- Bootstrap Core CSS -->
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	
	<!-- Custom CSS -->
	<link href = "css/landing-page.css" rel = "stylesheet">
	<link href = "css/custom.css" rel = "stylesheet">

@yield('csslibrary')

<!-- Favicon -->
	<link href = "images/favicon.png" rel = "icon" type = "image/png">
</head>

<body>

<!-- Header info -->
<div class = "content-section-a header-info">
	<div class = "container">
		<div class = "row display-table">
			<div class = "col-lg-3 col-sm-6 display-cell">
				<a href = "{{route('inicio')}}"><img src = "img/LOGO DICOM 320x100.png" class = "img-responsive" alt = ""></a>
			</div>
			<div class = "col-lg-9 col-sm-6 display-cell">
				<div class = "row">
					<div class = "col-md-9 col-sm-6">
						<span>Tel: (01 33) 13 77 02 43</span><br>
						<span>Guadalajara, Jalisco, México</span><br>
						@if(Auth::check())
							<small>{{ Auth::user()->name }} | <a href = "{{route('logout')}}">Salir</a></small>
						@else
							<small><a href = "{{route('entrar')}}">Entrar</a></small>
						@endif
					</div>
					<div class = "col-md-3 col-sm-6">
						<a class = "fa fa-facebook-square fa-2x" href = "https://www.facebook.com/PuntodeventaPZ/?ref=br_rs" target = "_blank"></a>
						<a class = "fa fa-youtube-square fa-2x" href = "https://www.youtube.com/channel/UCPhXP6_PDflTheon_K4cjoA" target = "_blank"></a>
					</div>
				</div>
				<div class = "row">
					<div class = "col-lg-12 col-sm-12">
						<ul id = "menu-nav" class = "list-inline">
							<li><a href = "{{route('nosotros')}}">Nosotros</a></li>
							<li><a href = "{{route('software')}}">Software</a></li>
							<li><a href = "{{route('productos')}}">Productos</a></li>
							<li><a href = "{{route('soporte')}}">Soporte</a></li>
							<li><a href = "{{route('distribuidores')}}">Distribuidores</a></li>
							<li><a href = "#contactSection">Contacto</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
</div>
<!-- /.Header info -->

@yield('intro-header')

@yield('content')

<!-- Contactanos -->
<div class = "content-section-b contacto" style = "background: #4c4c4c" id = "contactSection">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-8 col-md-push-2">
				<img src = "img/LOGO DICOM 400x170.png" alt = "" class = "img-responsive center-block"><br>
				<h4 class = "text-center">Tel: (01 33) 1377 0243</h4>
				<h1 class = "text-center">Contáctanos</h1>
				<h5 class = "text-center">Nuestro equipo de atencion a clientes estamos encantados <br> de responder
					cualquier solicitud, pregunta o comentario:</h5>
				<br>
				<form>
					<div class = "col-lg-6 col-md-6">
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "nombre" placeholder = "Nombre">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "email" placeholder = "Email">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "telefono" placeholder = "Telefono">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "ciudad" placeholder = "Ciudad">
						</div>
					</div>
					<div class = "col-lg-6 col-md-6">
						<div class = "form-group">
                            <textarea name = "detalleCita" class = "form-control" id = "detalleCita" cols = "30" rows = "8"
									  placeholder = "Mensaje"></textarea>
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-12">
							<button type = "submit" class = "btn btn-default">Envíar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /.container -->
</div>
<!-- /.Contactanos -->

<!-- Footer -->
<footer>
	<div class = "container">
		<div class = "row">
			<div class = "col-lg-9">
				<p class = "copyright text-muted"><strong class = "s-resalta">DICOM</strong>
					&copy; Copyright derechos reservados 2017 Sitio creado por Meraki Marketing
				</p>
			</div>
			<div class = "col-lg-3">
				<a href = "https://www.facebook.com/PuntodeventaPZ/?ref=br_rs" target = "_blank"><i class = "fa fa-facebook-square fa-2x"></i></a>
				<a class = "fa fa-youtube-square fa-2x" href = "https://www.youtube.com/channel/UCPhXP6_PDflTheon_K4cjoA" target = "_blank"></a>
			</div>
		</div>
	</div>
</footer>

<!-- SCRIPTS -->
<a href = "#" class = "back-to-top"></a>

@yield('jslibrary')

</body>

</html>