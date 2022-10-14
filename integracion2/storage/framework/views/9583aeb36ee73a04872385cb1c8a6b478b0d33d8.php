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
			<?php if(auth()->check()): ?>		
				<nav>
					<a href="<?php echo url("#") ?>">Bienvenido <b> <?php echo e(auth()->user()-> name); ?> </b></a>
					<a href="<?php echo url('/') ?>">Inicio</a>
					<a href="<?php echo url('/documentos') ?>">Documentos</a>
					<a href="<?php echo e(route('login.destroy')); ?>" class="p-3 mb-2 bg-danger text-white">Desconectarse</a>

				</nav>
			<?php else: ?>			
				<nav>
					<a href="<?php echo url('/') ?>">Inicio</a>
					<a href="<?php echo url('/login') ?>">Login</a>
					<a href="<?php echo url('/register') ?>">Registro</a>
				</nav>
			<?php endif; ?>
		</div>
	</header>
</html><?php /**PATH C:\xampp\htdocs\integracion2\resources\views/header.blade.php ENDPATH**/ ?>