@extends('layout.main')

@section('title', 'Soporte Descargas')

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<h1 class = "section-heading h-somos text-center">Descargas</h1>
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">GUÍAS DE PUNTO ZERO</h2>
						<p><a href = "{{route('download', ['1activacion_de_certificados_digitales.docx'])}}">Activación
								de certificados Digitales</a></p>
						<p><a href = "{{route('download', ['2como_cambia_de_proveedor_de_timbres.docx'])}}">Como cambia
								de proveedor de timbres</a></p>
						<p>
							<a href = "{{route('download', ['3configuracion_de_correo_saliente_para_envio_de_facturas_y_corte_de_caja.docx'])}}">Configuración
								de correo saliente para envío de facturas y corte de caja</a></p>
						<p><a href = "{{route('download', ['4diferencia_entre _cfds_y_fiel.docx'])}}">Diferencia de un
								certificado digital y una fiel</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Configuraciones</h2>
						<p><a href = "{{route('download', ['5activar_plugin.docx'])}}">Activar plugins (muy general)</a>
						</p>
						<p><a href = "{{route('download', ['6agregar_impuesto_adicional.docx'])}}">Agregar impuesto
								adicional (solo en generales)</a>
						</p>
						<p>
							<a href = "{{route('download', ['7como_activar_la_utilidad_para_el_precio_de_venta.docx'])}}">Cómo
								activar la utilidad para el precio de venta</a>
						</p>
						<p><a href = "{{route('download', ['8como_activar_precios_especiales_a_clientes.docx'])}}">Cómo
								activar precios especiales a clientes</a></p>
						<p><a href = "{{route('download', ['9como_dar_de_alta_y_configurar_los usuarios.docx'])}}">Cómo
								dar de alta y configurar los usuarios</a></p>
						<p><a href = "{{route('download', ['10como_poner_imagenes_a_los_productos.docx'])}}">Cómo
								ponerles imágenes a los productos</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Crystal</h2>
						<p><a href = "{{route('download', ['11agregar_campo_de_unidad_de_medida.docx'])}}">Agregar campo
								a formato de venta (unidad de
								medida)</a></p>
						<p>
							<a href = "{{route('download', ['12agregar_y_modificar_campos_dentro_de_un_formato.docx'])}}">Agregar
								y modificar campos dentro de un formato (muy
								básico)</a></p>
						<p>
							<a href = "{{route('download', ['13como_agregar_campos_al_reporte_de_lista_de_precios.docx'])}}">Cómo
								agregar campos al reporte de lista de precios
								(básico)</a></p>
						<p>
							<a href = "{{route('download', ['14como_agregar_iva_total_y_descuentos_en_ordenes_de_compra.docx'])}}">Cómo
								agregar IVA, total y descuentos en órdenes de
								compra</a></p>
						<p>
							<a href = "{{route('download', ['15formula_para_que_salga_impreso_la_leyenda_de_metodo_de_pago.docx'])}}">Fórmula
								para que salga impreso la leyenda de método
								de pago</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Actualizaciones</h2>
						<p><a href = "{{route('download', ['16como_actualizar.docx'])}}">Cómo actualizar (desde la
								página)</a></p>
						<p><a href = "{{route('updates')}}">Descarga Actualizaciones</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Nómina</h2>
						<p><a href = "{{route('download', ['17manual_nominas.doc'])}}">Manual nominas (activar
								plugins)</a></p>
						<p><a href = "{{route('download', ['18nomina_cambio2017.docx'])}}">Nómina cambio 2017</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Respaldar y reparar información</h2>
						<p><a href = "{{route('download', ['19manueal_anual_para_pasar_data.docx'])}}">Manual para pasar
								data</a></p>
						<p><a href = "{{route('download', ['20repara_tablas_con_r.docx'])}}">Reparar tablas con -r</a>
						</p>
						<p><a href = "{{route('download', ['21reparar_base_de_datos.docx'])}}">Reparar base de datos
								(control center)</a></p>
						<p><a href = "{{route('download', ['22respaldar_pzp.docx'])}}">Respaldar pzp</a></p>
						<p><a href = "{{route('download', ['23ejecutar_pz_como_administrador(error75).docx'])}}">Ejecutar
								PZ como Administrador (Error 75)</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Plugins</h2>
						<p><a href = "{{route('download', ['24mesa_de_regalos.docx'])}}">Mesa de regalos</a></p>
						<p><a href = "{{route('download', ['27como_hacer_notas_de_credito.docx'])}}">Cómo hacer notas de
								crédito</a></p>
					</div>
				</div>
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12" id = "descargas">
						<h2 style = "color: rgb(213,116,11)">Operaciones</h2>
						<p><a href = "{{route('download', ['26kits.docx'])}}">Kits</a></p>
						<p><a href = "{{route('download', ['27como_hacer_notas_de_credito.docx'])}}">Notas decrédito</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
@endsection