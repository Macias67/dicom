@extends('layout.main')

@section('title', 'Pago en Línea')

@section('intro-header')
	<!-- Header -->
	<div class = "intro-header-pago">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						@if(isset($error_msg))
							<h1>{{$error_msg}}</h1>
						@elseif(isset($msg))
							<h1>Tu pago ha sido exitoso.</h1>
						@endif
					</div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
@endsection
