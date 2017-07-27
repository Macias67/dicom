@extends('layout.main')

@section('title', 'Software')

@section('csslibrary')
	<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
	<link rel = "stylesheet" type = "text/css" href = "css/jquery.jscrollpane.css" media = "all"/>
	<link href = "css/software.css" rel = "stylesheet">
@endsection

@section('intro-header')
	<!-- Header -->
	<div class = "intro-header-software">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						<h1>Hacemos que la administración de tu negocio<br>sea eficiente, fácil y económica </h1>
					</div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
@endsection

@section('content')
	<!-- Software -->
	<div class = "content-section-b" style = "background-color: #d5730d">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<h1 class = "section-heading h-somos" style = "color: #ffffff">Software</h1>
					<p class = "text-justify p-somos" style = "color: #ffffff">
						Administración de tu negocio es más que tener un contador, o apuntar tus ventas en un cuaderno,
						administrar bien se traduce en vender mejor, la tarea administrativa implica llevar un registro
						de compras, control de inventarios, registro de ventas, generación de reportes, etc. Toda la
						información disponible para una correcta toma de DECISIONES en tu negocio, en un sistema de
						software seguro y fácil de usar, que se ocupa de llevar un control de todas tus tareas
						administrativas y así puedas dedicarte a lo que realmente VALE LA PENA dentro de tu negocio y
						verlo crecer.
					</p>
					
					<div class = "col-md-10">
						<h2 class = "text-left" style = "color: #ffffff">Contamos con diferentes paquetes de acuerdo a
							tus necesidades:</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.software -->
	
	<div class = "content-section-b">
		<div class = "container">
			<div class = "row">
				<h1 class = "text-center orange-text">PuntoZero “Light Versión”</h1>
				<div class = "col-lg-4 col-lg-offset-2 col-sm-6">
					<img src = "img/PZLightVersion.png" class = "img-responsive center-block" alt = "">
					<br>
					<h2 class = "lead">
						<a href = "{{route('software-light')}}" class = "light-brown-text"><strong>+</strong>
							Información</a></h2>
				</div>
				<div class = "col-lg-4 col-sm-6">
					<div class = "clearfix"></div>
					<h3 class = "section-heading">El Punto de Venta más sencillo del mercado.</h3>
					<p class = "text-justify lead">Administra tu negocio de forma segura, rápida y fácil. Diseñado para
						la venta de mostrador, OBTÉN el corte de caja para saber el total de
						venta y cuánto debe tener la caja chica. Maneja compras y consulta
						fácilmente la historia de los costos de productos, lo que permite no
						solo comprar mejor sino también controlar las existencias.</p>
				</div>
				<div class = "col-lg-8 col-lg-offset-2">
					<hr style = "height: 8px; background-color: orange">
				</div>
			</div>
			<div class = "row">
				<h1 class = "text-center orange-text">PuntoZero “PREMIUM”</h1>
				<div class = "col-lg-4 col-lg-offset-2 col-sm-6">
					<img src = "img/PZPremium.png" class = "img-responsive center-block" alt = "">
					<br>
					<h2 class = "lead">
						<a href = "{{route('software-premium')}}" class = "light-brown-text"><strong>+</strong>
							Información</a></h2>
				</div>
				<div class = "col-lg-4 col-sm-6">
					<div class = "clearfix"></div>
					<h3 class = "section-heading">El Punto de Venta y control administrativo más sencillo del mercado,
						que te permite controlar, administrar y hacer crecer tu negocio
						invirtiendo menos tiempo, de manera fácil y económica.</h3>
					<p class = "text-justify lead">Permite generar facturas electrónicas y diseñar todos sus formatos,
						tan completo que incluso pude controlar productos con diversas listas
						de precios, existencias por talla, color, número de serie o
						pedimento, clientes y proveedores con órdenes de compra y pedidos,
						cuentas por cobrar y por pagar, ventas de mostrador y facturación,
						multiempresa y multimoneda.
						Y POR SUPUESTO EL PUNTO DE VENTA QUE Opera opcionalmente con lector
						de código de barras, impresora de tickets, cajón de dinero o
						inclusive básculas.</p>
				</div>
				<div class = "col-lg-8 col-lg-offset-2">
					<hr style = "height: 8px; background-color: orange">
				</div>
			</div>
			<div class = "row">
				<h1 class = "text-center orange-text">PuntoZero “RESTAURANTES”</h1>
				<div class = "col-lg-4 col-lg-offset-2 col-sm-6">
					<img src = "img/PZRestaurantes.png" class = "img-responsive center-block" alt = "">
					<br>
					<h2 class = "lead">
						<a href = "{{route('software-restaurantes')}}" class = "light-brown-text"><strong>+</strong>
							Información</a>
					</h2>
				</div>
				<div class = "col-lg-4 col-sm-6">
					<div class = "clearfix"></div>
					<h3 class = "section-heading">Sabemos que la administración de un restaurante es un caso especial,
						es por eso que creamos Punto Zero Restaurantes.</h3>
					<p class = "text-justify lead">controla cada comanda realizada, lleva el control de inventarios y
						recetas COSTEADAS, agiliza el cobro, administra y resguarda CUENTAS y
						órdenes de cada mesero, todo para hacer la administración de tu
						restaurante una tarea fácil, cómoda y económica.INCLUSIVE PUEDES
						LEVANTAR COMANDAS DESDE TABLETS ( requiere una configuración
						adicional ).</p>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
	
	<div class = "content-section-b lightGray">
		<div class = "container">
			<div class = "row">
				<h1 class = "text-center white-text">Clientes Satisfechos</h1>
				<div id = "ca-container" class = "ca-container">
					<div class = "ca-wrapper">
						<div class = "ca-item ca-item-1">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 1</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-2">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 2</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-3">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 3</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-4">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 4</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-5">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 5</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-6">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 6</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-7">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 7</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
						<div class = "ca-item ca-item-8">
							<div class = "ca-item-main">
								<div class = "ca-icon"></div>
								<h3>Customer 8</h3>
							</div>
							<div class = "ca-content-wrapper">
								<div class = "ca-content">
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
@endsection

@section('jslibrary')
	<!-- jQuery -->
	<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type = "text/javascript" src = "js/carousel/jquery.easing.1.3.js"></script>
	<!-- the jScrollPane script -->
	<script type = "text/javascript" src = "js/carousel/jquery.mousewheel.js"></script>
	<script type = "text/javascript" src = "js/carousel/jquery.contentcarousel.js"></script>
	<script type = "text/javascript">
        $('#ca-container').contentcarousel();
        console.log('ok');
	</script>
@endsection