
<DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="{{ URL::asset('css/style.css'); }}">
        <link rel="stylesheet" media="all" href="css/app.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <header>@include('header')</header>
    
    <body>
    <div class="page" style="background: url(photos/30.jpg) no-repeat 50% 50%/cover;">
      <form class="form" method="POST" action="">
        @csrf
        <div class="form__container">
          <div class="logo"><img class="logo__pic" src="photos/Logo_UCT.webp" width="45"></div>
          <div class="fieldset">
            <div class="field"><input class="input" type="text" placeholder="Nombre" id="name" name="name" required></div>
            <div class="field"><input class="input" type="email" placeholder="Correo Electronico"  id="email" name="email" required></div>
            <div class="field"><input class="input" type="password" placeholder="Contraseña"  id="password" name="password"required></div>
            <div class="field"><input class="input" type="role_id" placeholder="ID Departamento "  id="role" name="role"required></div>
          </div><button type="submit"class="button1">Registrarse</button>
          <div class="text">Al crear una cuenta, aceptas a nuestros <a class= "botonreg" href="#">Terminos</a> y <a class= "botonreg" href="#">Privacidad de Seguridad</a>.</div>
        </div>
        <div class="form__footer">Ya tienes cuenta? <a class= "botonreg" href="<?php echo url('/login') ?>">Ingresar</a></div>
      </form>
    </div>
  </body>
  
</html>