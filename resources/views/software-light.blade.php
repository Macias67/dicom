@extends('layout.main')

@section('title', 'Software Light')

@section('csslibrary')
	<link href = "css/software-light.css" rel = "stylesheet">
@endsection

@section('intro-header')
	<div class = "container" style = "background-color: white">
		<h1 class = "text-center" style = "font-size: 4em; color: #d5730d; margin: 50px 0;">PuntoZero "Light
																							Versión"</h1>
	</div>
	
	<!-- Header -->
	<div class = "intro-header-light">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message"></div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
@endsection

@section('content')
	<!-- Software -->
	<div class = "content-section-b">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<h3 class = "section-heading" style = "color: orange">PuntoZero es el mejor y más sencillo programa
																		  para administrar tu negocio de la manera más
																		  segura, rápida y sobre todo fácil.</h3>
					<p class = "text-justify p-somos">
						Este programa está diseñado para facilitar y controlar toda la operación del negocio,
						principalmente la venta de mostrador e inventarios. Puede operar solo con su computadora y
						opcionalmente con lector de código de barras, impresora de tickets, cajón de dinero o inclusive
						basculas. y precios, y comience a vender. Al final del día saque su corte para saber el total de
						venta y cuánto dinero debe de tener en su caja chica. Ponga candados a la información que no
						quiere que sus empleados vean. Maneje también sus compras y consulte fácilmente la historia de
						los costos de los productos convirtiéndose así en un mejor comprador y al mismo tiempo y sin
						mayor esfuerzo ya tendrá el control de las existencias de productos, deteniendo definitivamente
						las fugas que tanto daño hacen a todos los negocios.
						Comience a vender y procese el corte para saber total de venta y cuánto dinero debe de tener en
						su caja chica y después obtenga reportes de ventas, análisis de que productos se venden más y
						cuales no se venden, ganancias, reportes gráficos, entre muchos otros que serán de gran utilidad
						para tomar dediciones respecto a su negocio.
					</p>
					<h4 class = "text-justify">¡Controle también sus compras a proveedores ya sea a contado o a crédito,
											   programe los pagos y consulte fácilmente la historia de los costos de los
											   productos convirtiéndose así en un mejor comprador!</h4>
					<div class = "col-md-10">
						<h3><a href = "{{route('software')}}">- Regresar</a></h3>
					</div>
					<div class = "col-md-10">
						<h3 style = "color: orange">Descarga el demo aqui</h3>
						<svg
								xmlns = "http://www.w3.org/2000/svg"
								xmlns:xlink = "http://www.w3.org/1999/xlink"
								width = "70px" height = "68px">
							<image x = "0px" y = "0px" width = "70px" height = "68px" xlink:href = "data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAABECAMAAAALOLO9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABYlBMVEX////biDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDDbiDD////WZSjXAAAAdHRSTlMAAF3NysvCDoYUdvYSZ/UEPykiifcyIzwgi+8rf+h43HHXEG/eDGbMDcYDVmDFBki2vk+5RvqpMaaNtSGkaazmN54v+JmU8irzkCTuivCSHuTgeRaEci6RyI7DwbQRWe11d68nz1RQvwWi/dttH1t9jI+HR37D920AAAABYktHRACIBR1IAAAAB3RJTUUH4QYWFiQlSbl1RwAAAaJJREFUWMPt1ldXwjAUB/BcEBVxgSKgqOBCnKjgFhEVFbfiwD1xD7Tf/yhNjgds0qYtL5zT/0sf7s3vkCZpQEgMFMZkLmPEUl4BlCAqUymwY+VnqtiKrdpgDMZgDMZgSompYTO1oMDU1dsdJA1sptFJeppcbjrjEVSluYUxKa8apdXBfDdt/Eq7FZgM+HgVf4fsSnXyKV3dCgvew6MEehX3jUlZCfZxbL9+JcXCt4sH5JXBIc7DMCynhPjPlIwzonSm8jPKUsZADQPhCFUZB3UMTNCUSWAxU6HpXGYkFZdUmZWOnxOHR9E87ohJO2L/57VA+RlRXEJB/IxTWuKLBcoSbTbLYikhx8DKap6yBloZSK7/KRugnQH3JlG2QA8D2zti2Qv6GLDu/lb3QC8D+wkhBfoZcB5AMRjZGEyJMocamSPCHGMmqZFJE+YEM2GNzClhzjDjP9ekXODRNpQiH5RLz5XqXN+QwbXoVihCAgjdFYG5R8iuXwnlbs2MXsWML99MRJfy8EjucMfTs2bk5TW38OSvwNv7x2c2rTbZL9833j8/e/2J7Cxd/7wAAAAASUVORK5CYII="/>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.software -->
@endsection