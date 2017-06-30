@extends('layout.main')

@section('title', 'Pago en Línea')

@section('intro-header')
	<!-- Header -->
	<div class = "intro-header-pago">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						<h1>Recibimos tus pagos online</h1>
					</div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
@endsection

@section('content')
	<div class = "content-section-b contacto" style = "background: #4c4c4c">
		<div class = "container">
			<div class = "row">
				<div class = "col-md-8 col-md-push-2">
					<h1 class = "orange-text text-center">Paga en Línea</h1>
					<br>
					{!! Form::open(['route' => 'genera.pago', 'method' => 'post', 'id' => 'card-form']) !!}
					<div class = "col-lg-12 col-md-12">
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "noFactura" name = "nofactura" placeholder = "No. de Factura o No. de Referencia">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "cliente" name = "cliente" placeholder = "Cliente">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "monto" name = "monto" placeholder = "Monto a pagar">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "ciudad" name = "ciudad" placeholder = "Ciudad">
						</div>
						<br>
						<h3 style="color: orange">Datos de la tarjeta</h3>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "ciudad" size="20" data-conekta="card[name]" placeholder = "Nombre del tarjetahabiente">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "ciudad" size="20" data-conekta="card[number]" placeholder = "Número de tarjeta de crédito">
						</div>
						<div class = "form-group">
							<input type = "text" class = "form-control" id = "ciudad" size="4" data-conekta="card[cvc]" placeholder = "CVC">
						</div>
						<div class = "form-group">
							<div class = "col-md-6">
								<input type = "text" class = "form-control" id = "ciudad" size="4" data-conekta="card[exp_month]" placeholder = "Fecha de expiración (MM)">
							</div>
							<div class = "col-md-6">
								<input type = "text" class = "form-control" id = "ciudad" size="4" data-conekta="card[exp_year]" placeholder = "Fecha de expiración (AAAA)">
							</div>
							<div class="clearfix"></div>
						</div>
						<br>
						<div class = "form-group">
							<div class = "col-md-12">
								<button type = "submit" class = "btn btn-default">Pagar</button>
							</div>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
@endsection

@section('jslibrary')
	<script type = "text/javascript" src = "https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
	<script type = "text/javascript" src = "js/tokenizer.js"></script>
@endsection