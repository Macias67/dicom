@extends('layout.main')

@section('title', 'Distribuidores')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-md-8 col-md-push-2">
				<h1 class = "text-center">Distribuidores</h1>
				<br>
				<table class = "table table-hover">
					<thead>
					<tr>
						<th></th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Sitio web</th>
					</tr>
					</thead>
					<tbody>
					@foreach ($distribuidores as $distribuidor)
						<tr>
							<td><img src = "http://via.placeholder.com/80x80" alt = "logo"></td>
							<td>{{$distribuidor->nombre}}</td>
							<td>{{$distribuidor->correo}}</td>
							@if (empty($distribuidor->web))
								<td>Sin sitio</td>
							@else
								<td><a href = "{{$distribuidor->web}}" target = "_blank">Ver</a></td>
							@endif
						
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection