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
					<form>
						<div class = "col-lg-12 col-md-12">
							<div class = "form-group">
								<input type = "text" class = "form-control" id = "noFactura" placeholder = "No. de Factura o No. de Referencia">
							</div>
							<div class = "form-group">
								<input type = "text" class = "form-control" id = "cliente" placeholder = "Cliente">
							</div>
							<div class = "form-group">
								<input type = "text" class = "form-control" id = "monto" placeholder = "Monto a pagar">
							</div>
							<div class = "form-group">
								<input type = "text" class = "form-control" id = "ciudad" placeholder = "Ciudad">
							</div>
							<br>
							<div class = "form-group">
								<div class = "radio">
									<label>
										<input type = "radio" name = "optionsRadios" id = "optionsRadios1" value = "option1" checked>
										Option one is this and that&mdash;be sure to include why it's great
									</label>
								</div>
								<div class = "radio">
									<label>
										<input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "option2">
										Option two can be something else and selecting it will deselect option one
									</label>
								</div>
							</div>
							<br>
							<div class = "form-group">
								<div class = "col-md-12">
									<button type = "submit" class = "btn btn-default">Pagar</button>
								</div>
							</div>
						</div>
					
					</form>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
@endsection