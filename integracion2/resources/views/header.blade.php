<DOCTYPE html> 
<html lang="en">
    <head>
    <title>Universidad Catolica De Temuco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/func.js') }}"></script>
	<script src="{{ URL::asset('js/tableHTML.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
	
    </head>
    <header>
		<img src="{{ asset('photos/logo-uct.png') }}" style = "width: auto; padding-top: 1.3em; float:left; margin-left:3em; margin-bottom:1.5em;">
		<div class="wrapper">
			@if(auth()->check())		
				<nav>	
					<a href="<?php echo url("#") ?>">Bienvenido <b> {{auth()->user()-> name}} </b></a>
					<a href="<?php echo url('/') ?>">Inicio</a>
					<a href="<?php echo url('/documentos') ?>">Documentos</a>
					<a href="{{route('login.destroy') }}" class="desconectar" >Desconectarse</a>

				</nav>
			@else			
				<nav>
					<a href="<?php echo url('/') ?>">Inicio</a>
					<a href="<?php echo url('/login') ?>">Login</a>
					<a href="<?php echo url('/register') ?>">Registro</a>
				</nav>
			@endif
		</div>
	</header>
</html>