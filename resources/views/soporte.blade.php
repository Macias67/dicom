@extends('layout.main')

@section('title', 'Soporte')

@section('intro-header')
	<!-- Header -->
	<div class = "intro-header-soporte">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						<h1>Todo el soporte que necesitas para <br> tu sistema punto de venta a tu alcance.</h1>
					</div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
	<!-- /.intro-header -->
@endsection

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<h1 class = "section-heading h-somos text-center">SOPORTE</h1>
					<p class = "text-justify p-somos">Ponemos a tu disposición toda la documentación, videos y manuales
													  necesarios para el funcionamiento de tu sistema punto de venta, en
													  caso que requerir atención técnica especial puedes llamar,
													  descargar el manual o actualización o bien dejar un e-mail de
													  ticket de soporte y a la brevedad nos comunicaremos contigo.</p>
				</div>
			</div>
			<br>
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<div class = "col-md-3 col-lg-offset-1">
						<a href = "tel:555-555-5555">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "71px" height = "94px">
								<image x = "0px" y = "0px" width = "71px" height = "94px" xlink:href = "data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAABeCAMAAABGt/l+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC31BMVEXVcwz////VcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwz///8P6n4JAAAA83RSTlMAAAMJDVf76vQ5G3CjyPHmK9mcE4P6DBaZ91yY/bcG6zBO8v6OJMfLEXhfL+CpAXvhOCHa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"/>
							</svg>
							<h3 style = "color: rgb(213,116,11); text-decoration: none; line-height: 0.3; ">Llamar</h3>
						</a>
					</div>
					<div class = "col-md-3">
						<a href = "{{route('soporte-descargas')}}">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "95px" height = "91px">
								<image x = "0px" y = "0px" width = "95px" height = "91px" xlink:href = "data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF8AAABbCAMAAAAiA6nRAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB7FBMVEX////VcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwzVcwz///9p9FIjAAAAonRSTlMAACLHzs3PvBIq/e8XKffmFucCIPblDAMBFYiek5Gk+/Sbkp99DmDy6FBH2jZF5Nc1Q9g0QOPWMjjcK8sozCczySYt0sW9HBu5GrW/rhGrD7upGLajN0lLL7CdCsTzEKyaBq3Alq/GqKbCC6CMBAiciQeY/oSUfwWN/HiLdob6coFsgPBrLqeqCci+s1ld3lVX4FT1wU8e32iPcOFtkCFclVoIGawHAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+EGGAI4E5uEwRwAAAKFSURBVGje7djZV9NAFAfguexWa5XFYkWtVRSxCuIuUkFaqqJgXaBWRIriglRFrAUXFAVU3PcdtX+plJI0p2SSm8nE48P8nubh5kubWc65Q0gmkJ2c3Lx8vRQUFgElJCvzChbYkvpZuIjZty9G+I4l1vpLhS984Qtf+MIXvvCFL/z/1S8uVhaUlCL8smXKR5zlmv5y14oKOStXrUb47jWezCNr11Vqf5/1GxAkPVUb9b5/tcMEv8mrP7+btzDzNbWY9bOV9QV123Drc/sOJn7nLuz6372HgS/Yi99f3jrDfP0+I/u31ugLGnzGzof9NYb4xiaj58+BZgO8vwR5/ihib0DzgRYw7oMP+4LCILD44KtH8QcPAZsPObkI/jD7/Qm0tOryR44Cuw/BgA7f1g5mfAge0+RDGjzKh+MnNPiTlaDnn+qonk1nWN2HotNUPnKGIoc702iHl3SdTccdovjQfY7C90Rpv7zXPaeeJ43yTNF86A6p8heoPPRJNX5yURpeovrQflmF99B5kP/xFZQP/Vfn8QMx4OfDtetZ/A0n8PRh8KZSH7oFwNeHaFzB3wbuPiSGpcqRO2CBD7G7c/w9PZ7NB7ifqht9oFvH6sNDW7J0TL+M2YdHj8cRVex+YgLDs/vICF/4wv+3/iRHv03Ff8LR78v4XdLQ/5Qb3/9MQqfIc2nofsHNfynf6/SSAWmYfPU6ykUffPNWNl3knTxOvm+N9JhP5IPi1usj+cR22YDL5yApHzbPUOOaaQDsVZbxZU2pDmNsxCJ+9MtsBxOLm6dU89WZ7rsSFUMW6DaJn8k3/ovo+w9l/xj28J1lx8+JrP50+tfvqbxmHskPxP9MpzZyiv0L3IC/5hezlNoAAAAASUVORK5CYII="/>
							</svg>
							<h3 style = "color: rgb(213,116,11); text-decoration: none; line-height: 0.3; ">
								Descargas</h4>
						</a>
					</div>
					<div class = "col-md-3">
						<a href = "mailto:correo@soporte.com?Subject=Solicitud%20soporte%20técnico">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "95px" height = "72px">
								<image x = "0px" y = "0px" width = "95px" height = "72px" xlink:href = "data:img/png;base64,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"/>
							</svg>
							<h3 style = "color: rgb(213,116,11); text-decoration: none; ">Ticket Soporte</h3></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
	
	<!-- Videos y tutoriales -->
	<div class = "content-section-b" style = "background-color: #000000">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-6 col-lg-offset-3 col-sm-12">
					<div class = "clearfix"></div>
					<h1 class = "section-heading text-center" style = "color: #999999">Videos y Tutoriales</h1>
					<ul style = "color: rgb(214,116,15); font-size: 26px" class = "lead">
						<li>Modo de Uso de Bares y Restaurantes</li>
						<li>Configuración Bares y Restaurantes</li>
						<li>Series/lotes de productos.</li>
						<li>Alta y modificaciones de usuarios</li>
						<li>Dar de alta productos y proveedores</li>
						<li>Como vender desde punto de venta.</li>
						<li>Reportes y Herramientas de punto de venta</li>
						<li>Reparar tablas con Control Center</li>
						<li>Configurar folios CFD</li>
						<li>Agregar campos a Facturas</li>
						<li>Como Instalar PuntoZero</li>
					</ul>
					<br>
					<iframe width = "560" height = "315" src = "https://www.youtube.com/embed/LVsREM9MahM" frameborder = "0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.Videos y tutoriales -->
	
	<div class = "content-section-b" style = "background-color: lightgray;">
		<div class = "container">
			<div class = "clearfix"></div>
			
			<div class = "container" style = "background-color: lightgray;">
				<div>
					<h4 class = "section-heading text-center">
						<a class = "accordion-toggle" data-toggle = "collapse" data-parent = "#collapseFive" href = "#collapseFive-3">
                            <span class = "collapse-heading-icon">
                                <i class = "fa fa-chevron-down"></i>
                            </span>
							<h1 class = "section-heading text-center" style = "color: #999999; display:inline;">
								Servicios incluidos en soporte gratuito</h1>
						</a>
					</h4>
				</div>
			</div>
			<div id = "collapseFive-3" class = "container panel-collapse collapse">
				<div class = "panel-body">
					<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
						<p style = "text-align: justify; max-height: 300px; overflow-y:scroll; ">
							Por medio de la presente, se hace de su conocimiento las nuevas políticas para la prestación
							del soporte telefónico gratuito <br>
							A) Dentro del área de soporte telefónico gratuito, los servicios y asesoría que se puede
							prestar son:<br>
							1.- Nota: ESTE ES SOLO UN SERVICIO DE ORIENTACION. (NO CONSIDERARSE APROPIADO PARA
							EMERGENCIAS EN SOLUCION DE PROBLEMAS, O ACCESO AL SISTEMA, POR LOS TIEMPOS DE RESPUESTA,
							entendemos lo importante de su negocio y la operación del mismo, por lo mismo en este tipo
							de situaciones cuando sea crucial el uso del sistema y no lo puedan hacer, les recomendamos
							ampliamente usar el servicio PREMIERE, o la visita de un técnico, que si bien es cierto
							estos2 servicios tienen costo, pero se hace de forma rápida y efectiva)<br>
							EN ORIENTACION SIEMPRE TRATAREMOS DE DAR LA MEJOR ATENCION POSIBLE PARA DAR EL MEJOR
							SERVICIO, SI BIEN ES CIERTO NO ES INSTANTANEO, PERO SI EFECTIVO<br>
							1.-Aclaracion de Dudas de cualquier tipo, siempre y cuando se refieran específicamente a la
							operación de PuntoZero, ejemplos:<br>
							a) Como procesar algunos reportes como listas de precios, clientes, facturación, cobranza,
							etc.<br>
							b) Como elaborar factura<br>
							c) Como cancelar factura y su timbrado<br>
							d) Como dar de alta clientes o productos<br>
							e) Como permitir/bloquear accesos a usuarios<br>
							f) Explicación de Cómo usar o para que sirven las herramientas incluidas en Puntozero.<br>
							2.- Revisión de problemas al timbrar, o enviar correo de facturación, indicándole al cliente
							cual fue el motivo del error y haciéndole las respectivas sugerencias, con el objeto de que
							no vuelvan a llamar por la misma razón.<br>
							También ayudar a reinstalar Open SSL, cargar de nuevo los Certificados de sellos
							digitales<br>
							3.-Correccion de problemas referentes a conexión de base de datos de Puntozero, daños en la
							información, (ojo: no recuperación de información) y no configuración de antivirus que se
							hayan instalado o actualizado posteriormente a la instalación de Puntozero, en dado caso
							solo se podrá asesorar referente a indicarle al cliente el tipo de problema para que sus
							técnicos o los nuestros en un servicio ya con costo, lo configuren.<br>
							4.-Ayudaen la instalación de PuntoZero, se le indicara y guiara al cliente como hacerlo,
							para qué en caso de que tenga varias computadoras, el mismo ya pueda por si solo instalar en
							las demás. Procurando siempre no estar esperando a que el cliente termine en todas, sino que
							se le guía en la primera y después el solo ya tendrá que hacer las demás, en caso de algún
							problema ya se tendrá que comunicar de nuevo para ver el caso específico.<br>
							5.-Cuando se tengan problemas para su instalación y que esta no se realice en modo normal
							por cuestiones ajenas a PuntoZero (eje. virus, Windows dañado o con problemas, etc.), estas
							se tendrán que turnar a un técnico propio del cliente o de nosotros PREFERENTEMENTE donde el
							servicio ya tendrá un costo adicional.6.-Para editar formatos se le puede asesorar y guiar
							al cliente como hacerlo, el hecho desagregar algún letrero, dato o formula, pero NO SE
							DEBERA por parte de personal de soporte telefónico gratuito, modificar formatos,<br>
							En el caso especifico de que se haya visitado por parte de algún técnico y el formato lo
							dejaron mal diseñado se deberá reportar al departamento administrativo para que lo turnen de
							inmediato hacia el técnico que lo dejo fallo, y este resuelva el problema, como garantía del
							servicio.<br>
							6.-Como exportar o importar productos desde Excel.<br>
							7.-Ayuda en caso de que Puntozero no inicie (abre) o se cierra en algún proceso, así como
							los casos en que marca DEMO y no permite capturar más información.<br>
							8.-Para revisión de inconsistencias en la información como CXC o CXP, que no aparezcan
							algunos movimientos o casos específicos en los que se requiere revisar directamente la
							información del cliente, será requerido:<br>
							a) Respaldo de Puntozero de la información de la empresa en cuestión vía email.<br>
							b) Especificar en el mismo correo la falla específica y los números de movimientos a
							revisar.<br>
							c) Contacto de la persona que puede aclarar alguna duda o que este bien enterada del
							problema.<br>
							NOTA: SI NO SE ENTREGA ESTA INFORMACION, no será procesada la petición y se tendrá como no
							recibido el respaldo. Y DICOM necesita un lapso de 72 hrs para entregar algún diagnostico o
							razón del problema en cuestión.<br>
							EN CASO DE QUE EL CLIENTE, POR CUESTIONES DE SEGURIDAD, PERSONALES O DECUALQUIER OTRA
							INDOLE, NO ACCEDA A ENVIAR INFORMACION, ESTA SE TENDRA QUE TURNAR A DEPARTAMENTO TECNICO
							HACIENDO LA OBSERVACION DE QUE SERA UNSERVICIO CON COSTO PARA IR A DOMICILIO O REVISARLO VIA
							REMOTA-TEAMVIEWER.<br>
							1.1NO SE INCLUYEN ni se podrá prestar asesoría referente a Windows, configuración de redes,
							eliminación de virus, instalar impresoras, envió de mails desde cuentas ajenas a Puntozero
							como Yahoo, Hotmail, Gmail, Outlook.<br>
							No diseñar formatos ni reportes de crystal reports (solo se puede asesorar u orientar en
							cómo hacerlo)<br>
							No instalar dispositivos externos o periféricos como impresoras, scanner, lectores, etc.<br>
							Si usted así lo desea, puede tener una copia de este documento en Word, dando click
							<a href = "http://www.puntodeventa-puntozero.com/DOCS/Soporte%20Gratuito.doc" target = "_blank">AQUI</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- Collapse -->
@endsection