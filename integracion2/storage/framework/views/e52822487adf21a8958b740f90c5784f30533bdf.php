
<DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="<?php echo e(URL::asset('css/style.css')); ?>">
        <link rel="stylesheet" media="all" href="css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <header><?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></header>
    
    <body>
    <div class="page" style="background: url(photos/30.jpg) no-repeat 50% 50%/cover;">
      <form class="form" action>
        <div class="form__container">
          <div class="logo"><img class="logo__pic" src="photos/Logo_UCT.webp" width="45"></div>
          <div class="fieldset">
            <div class="field"><input class="input" type="email" placeholder="Correo Electronico" required></div>
            <div class="field"><input class="input" type="text" placeholder="ID Departamento" required></div>
            <div class="field"><input class="input" type="text" placeholder="Nombre Departamento" required></div>
            <div class="field"><input class="input" type="text" placeholder="Nombre de Jefe de Departamento" required></div>
            <div class="field"><input class="input" type="text" placeholder="Rut de Jefe Departamento" required></div>
            <div class="field"><input class="input" type="password" placeholder="Contraseña" required></div>
          </div><button class="button1">Registrarse</button>
          <div class="text">Al crear una cuenta, aceptas a nuestros <a class= "botonreg" href="#">Terminos</a> y <a class= "botonreg" href="#">Privacidad de Seguridad</a>.</div>
        </div>
        <div class="form__footer">Ya tienes cuenta? <a class= "botonreg" href="<?php echo url('/login') ?>">Ingresar</a></div>
      </form>
    </div>
  </body>
  
</html><?php /**PATH C:\xampp\htdocs\integracion2\resources\views/register.blade.php ENDPATH**/ ?>