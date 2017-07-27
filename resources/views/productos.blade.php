@extends('layout.main')

@section('title', 'Productos')

@section('csslibrary')
	<link href = "css/productos.css" rel = "stylesheet">
@endsection

@section('intro-header')
	<!-- Header -->
	<div class = "intro-header-productos">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						<h1>Todo lo que necesitas para administrar y controlar tu negocio</h1>
					</div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
	<!-- /.intro-header -->
@endsection

@section('content')
	<div class = "container-fluid" style = "background-color: black">
		<a href = "{{route('pago')}}"><h1 class = "text-center" style = "color: #ffffff; margin: 20px 0;">PAGO en
				LINEA</h1></a>
	</div>
	
	<!-- Page Content -->
	<div class = "content-section-b" style = "background-color: #ffffff">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12" id = "descriptionDetail">
					<div class = "clearfix"></div>
					<h1 class = "section-heading h-somos text-center">Productos</h1>
					<div class = "row">
						<div class = "col-md-4">
							<img src = "img/productos/lectora.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">LECTORES</h6>
							<ul>
								<li onclick = "changeDetails(1);">Lector económico ccd posline</li>
								<li onclick = "changeDetails(2);">Lector código barras uso rudo Welch allyn</li>
								<li onclick = "changeDetails(3);">Lector empotrable omnidireccional met- rologic
									mod.7625
								</li>
								<li onclick = "changeDetails(4);">Seminuevo Lector código barras cubo
									omnidireccional(tipo Oxxo)
								</li>
								<li onclick = "changeDetails(5);">Colector de datos unitech</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/papel.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">CONSUMIBLES</h6>
							<ul>
								<li onclick = "changeDetails(6);">Etiquetas 12x25 3 al paso</li>
								<li onclick = "changeDetails(7);">Etiqueta 30x20 al paso</li>
								<li onclick = "changeDetails(8);">Etiqueta 51x25 al paso</li>
								<li onclick = "changeDetails(9);">Etiqueta Joyera 63x22</li>
								<li onclick = "changeDetails(10);">Ribbon</li>
								<li onclick = "changeDetails(11);">Rollo de papel 76x70 Térmico</li>
								<li onclick = "changeDetails(12);">Rollo de Papel 76x70 con copia</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/impresora.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">IMPRESORAS</h6>
							<ul>
								<li onclick = "changeDetails(13);">Epson Tm20</li>
								<li onclick = "changeDetails(14);">Impresora Términa Samsung</li>
								<li onclick = "changeDetails(15);">Samsun Bixolon 275 A</li>
								<li onclick = "changeDetails(16);">Impresora de Ticket Epson seminueva</li>
								<li onclick = "changeDetails(17);">Impresora código de barras zebra GK42</li>
							</ul>
						</div>
					</div>
					<br>
					<div class = "row">
						<div class = "col-md-4">
							<img src = "img/productos/cajon.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">ACCESORIOS</h6>
							<ul>
								<li onclick = "changeDetails(18);">Cajon de dinero</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/computadora.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">COMPUTADORAS</h6>
							<ul>
								<li onclick = "changeDetails(19);">Intel Celeron</li>
								<li onclick = "changeDetails(20);">Intel Pent Dual Core</li>
								<li onclick = "changeDetails(21);">Intel Core i3</li>
								<li onclick = "changeDetails(22);">Monitor LED Samsun de 18.5”</li>
								<li onclick = "changeDetails(23);">Monitor LED ASUS de 18.5”</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/gps.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">GPS Vehiculares</h6>
							<ul>
								<li onclick = "changeDetails(24);">GPS Vehiculares</li>
								<li onclick = "changeDetails(25);">GPS (Global Positioning System)</li>
							</ul>
						</div>
					</div>
					<br>
					<div class = "row">
						<div class = "col-md-4">
							<img src = "img/productos/camara.jpg" class = "img-responsive" alt = "">
							<h6 class = "text-center">CAMARAS</h6>
							<ul>
								<li onclick = "changeDetails(26);">DVD de 8 cámaras</li>
								<li onclick = "changeDetails(27);">DVD de 4 cámaras</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/software.jpg" class = "img-responsive" alt = "">
							<h6 class = "text-center">SOFTWARE</h6>
							<ul>
								<li><a href = "software-light.html">Punto Zero Light</a></li>
								<li><a href = "software-premium.html">PuntoZero Premium</a></li>
								<li><a href = "software-restaurantes.html">PuntoZero Restaurantes</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
	
	<div class = "content-section-b" style = "background-color: #e7e7e7" id = "containerDetails">
		<div class = "container">
			<div class = "row">
				<h1 class = "text-center" id = "descriptionTitle">DVD de 8 cámaras</h1>
				<div class = "col-lg-4 col-lg-offset-2 col-sm-6">
					<img id = "imgDetail" src = "img/productos/dvd_8_camaras.png" class = "img-responsive center-block" alt = "">
				</div>
				<div class = "col-lg-4 col-sm-6" id = "descriptionContent">
					<div class = "clearfix"></div>
					<h3 class = "section-heading">Descripción</h3>
					<ul class = "lead">
						<li>8 cámaras con lente de 92°</li>
						<li>Disco Duro 1TB</li>
						<li>Graba de 15 a 31 días</li>
						<li>Visión nocturna de hasta 15 mts</li>
						<li>Control Web remoto inteligente por móvil (Symbian, Windows Mobile, iPhone, Blackberry y
							Android).
						</li>
					</ul>
					
					<h3>Incluye</h3>
					<p class = "lead">Instalación y configuración <br>20 metros de cable por cámara.</p>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
@endsection

@section('jslibrary')
	<!-- Required JSs -->
	<script src = "js/jquery.js"></script>
	<script type = "text/javascript" src = "js/productos.js"></script>
@endsection