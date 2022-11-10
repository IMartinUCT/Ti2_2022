<DOCTYPE html> 
<html lang="en">
    <head>
    <title>Universidad Catolica De Temuco</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchbuilder/1.4.0/css/searchBuilder.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ URL::asset('js/func.js') }}"></script>
	<script src="{{ URL::asset('js/tableHTML.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchbuilder/1.4.0/js/dataTables.searchBuilder.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

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