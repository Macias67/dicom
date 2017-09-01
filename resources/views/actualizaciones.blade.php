@extends('layout.main')

@section('title', 'Bienvenidos')

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b" style = "background-color: #e7e7e7">
		<div class = "container">
			<div class = "row">
				<h3 class = "text-center">Descarga Actualizaciones</h3>
				<hr>
				<table class = "table" style = "border-collapse:collapse;">
					<thead>
					<tr>
						<th>Archivo</th>
						<th>Versión</th>
						<th>Fecha</th>
					</tr>
					</thead>
					<tbody>
					@foreach(\App\Infopze::limit(10)->orderBy('Fecha', 'desc')->get() as $index => $producto)
						<tr data-toggle = "collapse" data-target = "#id_{{$index}}" class = "accordion-toggle">
							<td>
								<a href = "{{route('actualizacion', $producto->Ejecutable)}}">{{$producto->Ejecutable}}</a>
							</td>
							<td>{{$producto->Version}}</td>
							<td>{{$producto->Fecha}}</td>
						</tr>
						<tr>
							<td colspan = "6" class = "hiddenRow">
								<div class = "accordian-body collapse" id = "id_{{$index}}">
									<p class = "text-justify">
										<small>{{$producto->Novedades}}</small>
									</p>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
@endsection

@section('jslibrary')
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
@endsection