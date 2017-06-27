@extends('layout.main')

@section('title', 'Productos')

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
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<h1 class = "section-heading h-somos text-center">Productos</h1>
					<div class = "row">
						<div class = "col-md-4">
							<img src = "img/productos/lectora.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">LECTORES</h6>
							<ul>
								<li>Lector económico ccd posline</li>
								<li>Lector código barras uso rudo Welch allyn</li>
								<li>Lector empotrable omnidireccional met- rologic mod.7625</li>
								<li>Seminuevo Lector código barras cubo omnidireccional(tipo Oxxo)</li>
								<li>Colector de datos unitech</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/papel.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">CONSUMIBLES</h6>
							<ul>
								<li>Etiquetas 12x25 3 al paso</li>
								<li>Etiqueta 30x20 al paso</li>
								<li>Etiqueta 51x25 al paso</li>
								<li>Etiqueta Joyera 63x22</li>
								<li>Ribbon</li>
								<li>Rollo de papel 76x70 Térmico</li>
								<li>Rollo de Papel 76x70 con copia</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/impresora.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">IMPRESORAS</h6>
							<ul>
								<li>Epson Tm20</li>
								<li>Impresora Términa Samsung</li>
								<li>Samsun Bixolon 275 A</li>
								<li>Impresora de Ticket Epson seminueva</li>
								<li>Impresora código de barras zebra GK42</li>
							</ul>
						</div>
					</div>
					<br>
					<div class = "row">
						<div class = "col-md-4">
							<img src = "img/productos/cajon.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">ACCESORIOS</h6>
							<ul>
								<li>Cajon de dinero</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/computadora.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">COMPUTADORAS</h6>
							<ul>
								<li>Intel Celeron</li>
								<li>Intel Pent Dual Core</li>
								<li>Intel Core i3</li>
								<li>Monitor LED Samsun de 18.5”</li>
								<li>Monitor LED ASUS de 18.5”</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/gps.png" class = "img-responsive" alt = "">
							<h6 class = "text-center">GPS Vehiculares</h6>
							<ul>
								<li>GPS Vehiculares</li>
								<li>GPS (Global Positioning System)</li>
							</ul>
						</div>
					</div>
					<br>
					<div class = "row">
						<div class = "col-md-4">
							<img src = "img/productos/camara.jpg" class = "img-responsive" alt = "">
							<h6 class = "text-center">CAMARAS</h6>
							<ul>
								<li>DVD de 8 cámaras</li>
								<li>DVD de 4 cámaras</li>
							</ul>
						</div>
						<div class = "col-md-4">
							<img src = "img/productos/software.jpg" class = "img-responsive" alt = "">
							<h6 class = "text-center">SOFTWARE</h6>
							<ul>
								<li>Punto Zero Light</li>
								<li>PuntoZero Premium</li>
								<li>PuntoZero Restaurantes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
	
	<div class = "content-section-b" style = "background-color: #e7e7e7">
		<div class = "container">
			<div class = "row">
				<h1 class = "text-center">DVD de 8 cámaras</h1>
				<div class = "col-lg-4 col-lg-offset-2 col-sm-6">
					<img src = "img/productos/dvd_8_camaras.png" class = "img-responsive center-block" alt = "">
				</div>
				<div class = "col-lg-4 col-sm-6">
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