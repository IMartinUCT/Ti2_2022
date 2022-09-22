<DOCTYPE html> 
<html lang="en">
    <head>
    <title>Universidad Catolica De Temuco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/func.js') }}"></script>
    </head>

    <header>
    <a href="<?php echo url('/')?>" id='logo-uct'><img src="{{ asset('photos/logo-uct.png') }}"></a>
    
    <div class="container">
        <button class='user-menu'>    
            <img src="{{ URL::asset('photos/user.png') }}" class='user-avatar'/>            
        </button>
        <div class='box hide'>
            <ul id='menu'>
                <li><a href="<?php echo url('/login') ?>">Login</a></li>
                <li><a href="<?php echo url('/register') ?>">Registro</a></li>
                <li><a href="<?php echo url('/documents') ?>">Documentos</a></li>
                <li><a href="<?php echo url('/history') ?>">Historial</a></li>
            </ul>
        </div>
    </div>  
    </header>
</html>