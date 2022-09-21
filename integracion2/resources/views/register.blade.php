
<DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="{{ URL::asset('css/style.css'); }}">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <header>@include('header')</header>
    
    <body>
        <br><br>
    <div class="col-12 col-md-4 offset-md-4">
        <div class= "card"> 
            <div class= "card-body">
                <h2>Registrarse</h2>
                <hr>
                <form action="" class="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo Electronico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese correo">
                </div>
                <div class="form-group">
                    <label>ID Departamento</label>
                    <input type="text" class="form-control"  placeholder="Ingrese su ID">
                </div>
                <div class="form-group">
                    <label>Nombre Departamento</label>
                    <input type="text" class="form-control"  placeholder="Ingrese el nombre del departamento">
                </div>
                <div class="form-group">
                    <label>Nombre Jefe Departamento</label>
                    <input type="text" class="form-control"  placeholder="Ingrese el nombre jefe departamento">
                </div>
                <div class="form-group">
                    <label>Rut Jefe Departamento</label>
                    <input type="int" class="form-control"  placeholder="Ingrese el rut del jefe departamento">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                
                <button type="submit" class="btn btn-primary">Registrarse</button>
                <a href="<?php echo url('/login') ?>" class="btn btn-secondary">Ya tengo una cuenta</a>
                </form>

            </div> 
        </div>
    </div>
    </body>
    <footer>@include('footer')</footer>
</html>