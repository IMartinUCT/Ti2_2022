
<DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="{{ URL::asset('css/style.css'); }}"> 
        <link rel="stylesheet" media="all" href="css/app.css">       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <header>@include('header')</header>
    
    <body>
    <div class="page" style="background: url(photos/30.jpg) no-repeat 50% 50%/cover;">
      <form class="form", method="POST" action="">
      @csrf
        <div class="form__container">
          <div class="logo"><img class="logo__pic" src="photos/Logo_UCT.webp" width="45"></div>
          <div class="fieldset">
            <div class="field"><input class="input" type="email" placeholder="Correo Electronico"  id="email" name="email" required></div>
            <div class="field"><input class="input" type="password" placeholder="Contraseña"  id="password" name="password"required></div>
            @error('message')
              <div class="alert alert-danger" role="alert">
                <h2>El correo ingresado o la contraseña son incorrecta, porfavor intenlo de nuevo.</h2>
              </div>
            @enderror
          </div><button type="submit"class="button1">Ingresar</button>
          <div class="text">Se te olvido tu contraseña? <a class= "botonreg" href="#">Recuperar Clave</a></div>
        </div>
        <div class="form__footer">No tienes cuenta? <a class= "botonreg" href="<?php echo url('/register') ?>">Registrarse!</a></div>
      </form>
    </div>
  </body>
</html>