<DOCTYPE html> 
<html lang="en">
    
    <head>
    <script>
    $(function() {     
    $('.user-avatar').on('click', function(e) {
      e.preventDefault();
      $('.box').toggleClass('hide');
    });
    });
    </script>
    </head>

    <body>
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


    </body>
</html>