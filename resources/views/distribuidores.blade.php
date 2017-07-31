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
						<th>Información</th>
						<th>Sitio web</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><img src = "http://via.placeholder.com/80x80" alt = "logo"></td>
						<td>Doe</td>
						<td>john@example.com</td>
						<td><a href = "http://www.facebook.com" target = "_blank">Ver</a></td>
					</tr>
					<tr>
						<td><img src = "http://via.placeholder.com/80x80" alt = "logo"></td>
						<td>Moe</td>
						<td>mary@example.com</td>
						<td></td>
					</tr>
					<tr>
						<td><img src = "http://via.placeholder.com/80x80" alt = "logo"></td>
						<td>Dooley</td>
						<td>july@example.com</td>
						<td></td>
					</tr>
					</tbody>
				</table>
				<br>
				<div class = "col-md-12">
					<div class = "col-md-4 col-md-push-1">
						<img src = "http://via.placeholder.com/130x130" alt = "logo" class = "img-circle img-responsive">
					</div>
					<div class = "col-md-7">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<footer>Someone famous in <cite title = "Source Title">Source Title</cite></footer>
						</blockquote>
					</div>
				
				
				</div>
			</div>
		</div>
	</div>
@endsection