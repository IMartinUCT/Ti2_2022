<DOCTYPE html> 
<html lang="en">
    <head>
    <title>Universidad Catolica De Temuco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="<?php echo e(URL::asset('js/func.js')); ?>"></script>
    </head>
    <header>
		<div class="wrapper">
			<div class="logo"> <img src="<?php echo e(asset('photos/logo-uct.png')); ?>"></div>
			
			<nav>
				<a href="<?php echo url('/') ?>">Inicio</a>
				<a href="<?php echo url('/login') ?>">Login</a>
				<a href="<?php echo url('/register') ?>">Registro</a>
				<a href="<?php echo url('/documentos') ?>">Documentos</a>
				<a href="<?php echo url('/history') ?>">Historial</a>
			</nav>
		</div>
	</header>
</html><?php /**PATH C:\xampp\htdocs\integracion2\resources\views/header.blade.php ENDPATH**/ ?>