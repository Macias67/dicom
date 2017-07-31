@extends('layout.main')

@section('title', 'Bienvenidos')

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b" style = "background-color: #e7e7e7">
		@if(Auth::check())
			<div class = "container">
				<div class = "row">
					<div class = "col-md-8 col-md-push-2">
						<h5 class = "text-center">Bienvenido</h5>
						<h1 class = "text-center">{{ Auth::user()->name }}</h1>
						<h6 class = "text-center"><a href = "{{route('logout')}}">Salir</a></h6>
					</div>
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