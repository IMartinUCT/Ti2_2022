<DOCTYPE html> 
<html lang="en" theme='default'>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/cr-1.5.4/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/b-2.2.3/b-html5-2.2.3/sl-1.4.0/datatables.min.css"/>
        <!-- Excel -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/cr-1.5.4/datatables.min.js"></script>
        <!-- PDF -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/b-2.2.3/b-html5-2.2.3/sl-1.4.0/datatables.min.js" defer></script>
    </head>

    <body class= "consultas1">
        @include('header')
        <br>
        <div>
            <div>
                <h1 class='display-2 text-center' >Generador de reportes</h1>
            </div>
            <div class="menu">
                <button onclick=Ocultar() class="button_active btn btn-outline-primary btn-lg" type="button">Mostrar gastos</button>
            </div>
                @include('tabla')
            </div>
        </div>   
    </div>
    </body>
    <footer>@include('footer')</footer>
</html>
