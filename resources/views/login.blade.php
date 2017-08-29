@extends('layout.main')

@section('title', 'Bienvenidos')

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b" style = "background-color: #e7e7e7">
		@if(Auth::check())
			<div class = "container">
				<div class = "row">
					<div class = "col-md-8 col-md-push-2">
						<h5 class = "text-center">{{bcrypt('demo')}}</h5>
						<h1 class = "text-center">{{ Auth::user()->name }}</h1>
						<h6 class = "text-center"><a href = "{{route('logout')}}">Salir</a></h6>
					</div>
				</div>
				<hr>
				<div class = "row">
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
									<a href = "ftp://69.73.141.47/public_html/descargas/{{$producto->Ejecutable}}">{{$producto->Ejecutable}}</a>
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
		@else
			<div class = "container">
				<div class = "row">
					<div class = "col-md-8 col-md-push-2">
						<h1 class = "text-center">Identifícate</h1>
						<h5 class = "text-center">Escribe tu correo y tu cotraseña</h5>
						<br>
						{!! Form::open(['route' => 'login']) !!}
						<div class = "col-lg-6 col-lg-push-3 col-md-6">
							@if(session('error'))
								<div class = "alert alert-danger">
									{{ session('error') }}
								</div>
							@endif
							<div class = "form-group">
								<input type = "email" class = "form-control" name = "email" placeholder = "Email">
							</div>
							<div class = "form-group">
								<input type = "password" class = "form-control" name = "password" placeholder = "Contraseña">
							</div>
							<div class = "form-group">
								<button type = "submit" class = "btn btn-default">Entrar</button>
							</div>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<!-- /.container -->
		@endif
	</div>
	<!-- /.content-section-b -->
@endsection


@section('jslibrary')
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
@endsection