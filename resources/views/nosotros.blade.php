@extends('layout.main')

@section('title', 'Nosotros')

@section('intro-header')
	<!-- Header -->
	<div class = "intro-header-nosotros">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "intro-message">
						<h1>Una empresa joven con más de 20 años <br> de experiencia trabajando para ti</h1>
					</div>
				</div>
			</div>
		
		</div>
		<!-- /.container -->
	</div>
@endsection

@section('content')
	<!-- Page Content -->
	<div class = "content-section-b" style = "background-color: #e7e7e7">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<div class = "clearfix"></div>
					<h1 class = "section-heading h-somos">Nosotros</h1>
					<p class = "text-justify p-somos">Somos una empresa joven con más de 20 años de experiencia, formada
													  por jóvenes en constante actualización y desarrollo, dispuestos a
													  dar lo mejor de sí mismos cada día simplificando la operación
													  administrativa de tu negocio.</p>
					<p class = "text-justify p-somos">Estamos convencidos de que nosotros crecemos con nuestros
													  clientes, por lo que el objetivo es desarrollar y mejorar las
													  herramientas para hacer crecer tu negocio.</p>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
	
	<!-- Page Content -->
	<div class = "content-section-b" id = "ventajas">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-8 col-lg-offset-2 col-sm-12">
					<h1 class = "section-heading h-somos text-center">Ventajas</h1>
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12">
						<div class = "col-md-2">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "50px" height = "50px">
								<image x = "0px" y = "0px" width = "50px" height = "50px" xlink:href = "data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAMAAAAPzWOAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAC2VBMVEXVcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3Vcw3///8tdiFqAAAA8XRSTlMABhsyYYanwtfm8efWwYcCJlmWyPKXWicDDEqR0tOSB1Su6+xVP6bwqEAZgOWBGD22/rdd3d5gCXVRn3cKhPjuLOL0uvz5DfvgoehQHcuaCA7DhXT2UvplGuQ5BbsB6v1xFK1N71464bWpFYIjnMUEzovMuBd97ZhYMyhiiaMgRINJEs/VTHI7fwuNs8rHX1bRKY/z93jbLcCsRapwnoxmjtTpoFuUqy4TRrn1sdlONR48m2giQ8kqxm04vyUWH9wh2DDQPmpPkCRr2kjE42xCY6+kMRARvIo3pRxpQXy0L5NXvlwPnb1nNqJTlX5udis0TPuv4QAAAAFiS0dE8tu2jngAAAAHdElNRQfhBhYLMBQiN5ILAAAGVUlEQVRYw5WY+UMTRxTHH2BEkKMiCh4hAiKW4hHAcoRDI8oNIjEaYsADEQEJXkWpeKCgUEURRKm3oih40CLWCyyeaFsPqra2ar1aay87/0E32Z3ZIxtC3y/Z/c6bT3bfe/NmEgAzZmVt00fS17afnb19fwfHvk59bKyt4H+Z8wcDXAa6Ip65Dhw02M2914ghQ4cNR6Im9Rg6pFcI2QhPL2TWvD1HyiwzfEb5oh7Nd/SHFhB+H/kji2Y3ZmxPjHHj5ZYZCMkDeniYwKDeIAw24WMziOAQezNTRoWGCSVXRbhoYiMizTCifGDiJOpT2XdyNBGnSKaKZDYixnR6bFy84VsTIDGJ+kxOmZbKjsVMDzaBpKlEHiEUZlAJV8+EWbYIadJBO5szqlLoBIwBUSLvkUElQYFQ5hyYG4DQPID5vKhlLeAzsheKRiNnKgQvQigCZHFIORSmjeIPa8ZxGbk5vEESPnmeO+RL0WKAPFSgh3HelFa4ZClxXLacZehWZHIQnxQFhhTg9w4FWKl0WFUcgD4F3WoKW7LGeS1ZW/J17LJO59a6Zj2llCbL6bsNxWAzCS3ciNDi3DIN0pRTwRyRQZztNmGGFfdVozcbtYpK5t5x8GfM1RZ/tNVQ7lXcul6UwkDKuDFXbqNF/RhhgBDaXg2wfAevJmsSaPfwRVy1NhAHaqdcmKy6XeCzW6DVVxi9P8/givI9FZiy12QdFO4zKQWv9Ubf/Xw1U6LFwTqgRJZtmCFB+Sb99CBZFAt8LUMOuVGOI00XrwvpxgMOi0wLOnJwPLsV1DZQ+T0q4hZWiikJsSaDxxpTdMdH9iP3yTIYu1XsGfeQLnqiTjDURJf64GYsbEmExizRNz1pjSk+p3gDvqeZJUvmZZ2BQDPxamrBlC8cuPqXjLqWrdBWWGcu6o5nMeXMBlbVFDNiGwuphBKzuTtXjSlfnSfiBaxdZLvYPLgkTvBaKkXbV+EZl20Z+RIpoXK2JQ+EjaKM2entHQ12V9LxlK/rjeuw8yrBsilGE0B027zWYXDcNGHSdTyp4sY1O/+ARnzr7MHxjgKxDEeH0K420sMnSOcqvdqYQm7auAeHSBDb9VQ3Gd/ia1E3QcSGcLcOpIZ4EUjmLezdVRg1XwRym+duD3eEBHXdHeT6DXZP/NZ+mwmjS8Ob8R0UCBhBd7su79Vk3MMTljfF3BcwnI/wpxTCMb4Qb2xUm2J9y/CU3AfoLh9SJtgtc6CSL3TTft871IzAcx52ozQu49FjwcMPgla+8APj6ZakrCI1kox2ciDlagEkDX6s5QlPsOtPBZE/42urOOVTwrARpqL2KbTwW6z3DBLRx9Fz8NlhbGyJM9ZXC9N5KB/Cu/mShtToo3r0jNlqw59vIFt3qLA8R1N7zEx2M1cvkyT7RyVg9/AjSKI3XslytpCuKxN8a7ShO/xCWrGqPBe0Z5JqVmL/4KOo0nh+Ls54wQZ2fg0PstDQMFLIyTDO6NPiyOZFtgTFJVKxTNVcZSEy3raLnhiPkS8Zsoqpr9zZ0TdwRLX70Z2mV/3jecvwNTehygajNpcpHtV6xunNZBSCKcFN6iCHX4u5DEj5jQPZ3U6Lb+nqkSdjr+OeSIGPQHNO/a4XrB3YwTJibuM5jsyjkNPg1HfIidnW78buEjLgNXtcTc3F4h9M6rM+JXn5E70w9jH9qwLT83c26WvsCgPZPhylVixpIzJLqE3Qajraa8KAi94YUsI5VVdvZ8TmNBwA3V+ocHXEuUgPrSnkJd6HpRO5Mtme1ZvxJHfPmCvS1ANiP9ac8NIL5Mn6PFz8chxRuO7d0O4sggCrANo100nwlOGLScA9mEi6NW8DUXvJnHDCKoQjfmyfLKIH8/qvEmX4MbVWb206tqaeUMKo5OvvxRzTiTHCi2inB2fFRlvesbWsqHrRXJgv5rWGafXdHeLv+mg/W4lTvIrEvNrvJ9HFfasUzJi2lT2g2U4zHT+elio3Dtbd6OlnevYDfJRXpQnH5iqG04jok9nQo725IJUzZVfF1XUdiiC6lOSH/n4Dlixf0klj1P88xJrz5WfMGVLe6dRlEWGw9yts6XJ6frraaP9KmHORq+2K971CGMwvYcd5w3KfcuUUZZ12RoL3+VszZvUaYTD3xLa3LuP7MQWeIQ1waW1rMfc/zn9/BVIGa01CvgAAAABJRU5ErkJggg=="/>
							</svg>
						</div>
						<div class = "col-md-10">
							<p>Estable y sencillo</p>
						</div>
					</div>
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12">
						<div class = "col-md-2">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "50px" height = "50px">
								<image x = "0px" y = "0px" width = "50px" height = "50px" xlink:href = "data:img/png;base64,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"/>
							</svg>
						</div>
						<div class = "col-md-10">
							<p>Servicio de ayuda y soporte</p>
						</div>
					</div>
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12">
						<div class = "col-md-2">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "50px" height = "50px">
								<image x = "0px" y = "0px" width = "50px" height = "50px" xlink:href = "data:img/png;base64,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"/>
							</svg>
						</div>
						<div class = "col-md-10">
							<p>Fácil de instalar y de usar</p>
						</div>
					</div>
					<div class = "col-lg-10 col-lg-offset-2 col-sm-12">
						<div class = "col-md-2">
							<svg
									xmlns = "http://www.w3.org/2000/svg"
									xmlns:xlink = "http://www.w3.org/1999/xlink"
									width = "50px" height = "50px">
								<image x = "0px" y = "0px" width = "50px" height = "50px" xlink:href = "data:img/png;base64,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"/>
							</svg>
						</div>
						<div class = "col-md-10">
							<p>¡Al mejor precio!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.content-section-b -->
	
	<div class = "banner">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<h2 class = "text-center">Trabajamos para darte el mejor servicio.</h2>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
@endsection