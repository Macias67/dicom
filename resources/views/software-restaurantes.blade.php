@extends('layout.main')

@section('title', 'Software Restaurantes')

@section('csslibrary')
	<link href = "css/software-restaurantes.css" rel = "stylesheet">
@endsection

@section('intro-header')
	<div class = "container" style = "background-color: white">
		<h1 class = "text-center" style = "font-size: 4em; color: #d5730d; margin: 50px 0;">PuntoZero
																							“Restaurantes”</h1>
	</div>
	
	<!-- Header -->
	<div class = "intro-header-restaurantes">
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
					<h1 class = "section-heading" style = "color: orange">El Punto de Venta para restaurantes más
																		  sencillo y eficiente del mercado. </h1>
					<p class = "text-justify p-somos">
						El Punto de Venta y control administrativo más sencillo del mercado. Si sientes que la operación
						y administración de tu restaurante te lleva demasiado tiempo y por lo tanto tu negocio se
						encuentra estancado o no ha crecido tan rápido como te gustaría, necesitas un sistema de
						administración y control que te permita dedicar tu tiempo en hacer crecer tu negocio de forma
						inteligente. <br>
						
						Si quieres dedicarte a administrar y tomar decisiones verdaderamente importantes sin necesidad
						de encontrarte todo el día tras el mostrador o caja. Punto Zero es la solución para ti. ¡Ahora
						presentando su nueva versión diseñada para restaurantes!
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