@extends('layout.main')

@section('title', 'Software Premium')

@section('intro-header')
	<div class = "container" style = "background-color: white">
		<h1 class = "text-center" style = "font-size: 4em; color: #d5730d; margin: 50px 0;">PuntoZero "Premium"</h1>
	</div>
	
	<!-- Header -->
	<div class = "intro-header-premium">
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
					<h1 class = "section-heading" style = "color: orange">El Punto de Venta y control administrativo más
																		  sencillo del mercado. </h1>
					<p class = "text-justify p-somos">
						Quiere dedicarse a administrar su negocio y tomar decisiones verdaderamente importantes sin
						necesidad de encontrarse todo el día en el mostrador? ¡Esta es la solución ideal! PuntoZero
						PREMIUM Controla y administra tu negocio invirtiendo menos tiempo del que actualmente dedicas,
						es la mejor, más fácil y económica manera de hacerlo. <br>
						
						Controlar productos con diversas listas de precios, existencias por talla, color, número de
						serie o pedimento, estados de cuenta, vencimientos y programación de pagos, reportes históricos
						de costos, control de clientes y proveedores con órdenes de compra y pedidos, cuentas por cobrar
						y por pagar, ventas de mostrador y facturación, multiempresa y multimoneda, modalidad para
						restaurantes, opera opcionalmente con lector de código de barras, impresora de tickets, cajón de
						dinero o inclusive basculas, puede generar facturas electrónicas. <br>
						
						Envíe un correo a PuntoZero solicitando la cobranza pendiente de algún cliente y recíbala de
						inmediato en su email al igual que el corte de sus ventas al terminar las operaciones del día.
						<br>
						
						Ponga candados a la información que no quiere que sus empleados conozcan. <br>
						
						Maneje también sus compras y consulte fácilmente la historia de los costos de los productos
						convirtiéndose así en un mejor comprador y al mismo tiempo y sin mayor esfuerzo ya tendrá el
						control de las existencias, deteniendo definitivamente las fugas que tanto daño hacen a su
						negocio. <br>
						
						No se necesita ser un experto en computadoras y mucho menos conocer programas administrativos,
						con los videos tutoriales que se encuentran incluidos con este programa, se tiene un maestro a
						la hora que se necesite y verlo tantas veces como quiera. <br>
						
						Además, el paquete incluye una memoria USB que además de funcionar como llave Licencia del
						programa también en ella se hacen respaldos de su información de modo automático, así que, si en
						algún momento su computadora se daña, usted tendrá la información de su negocio y la licencia
						del programa a salvo. <br>
						
						Y recuerde, PuntoZero PREMIUM es el programa más sencillo del mercado así que no porque el
						programa tenga todas estas opciones quiere decir que será complicado su manejo ya que lo más
						interesante es que si usted no las necesita, no las tendrá activas y no serán visibles, por lo
						tanto no.
					</p>
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