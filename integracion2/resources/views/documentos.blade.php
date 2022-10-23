<DOCTYPE html> 
<html lang="en" theme='default'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="{{ URL::asset('css/style.css'); }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/cr-1.5.4/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/cr-1.5.4/datatables.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/cr-1.5.4/datatables.min.js" defer></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/b-2.2.3/b-html5-2.2.3/sl-1.4.0/datatables.min.css"/>
 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/b-2.2.3/b-html5-2.2.3/sl-1.4.0/datatables.min.js" defer></script>


    </head>

    <body class= "consultas1">
        @include('header')
        <br>
        <div>
            <div>
                <h1 class='display-2 text-center' >Genere su consulta</h1>
            </div>
            <div class="menu">
                <button onclick=Ocultar() class="button_active btn btn-outline-primary btn-lg" type="button">Gastos Totales</button>
                <button onclick=Ocultar() class="btn btn-outline-primary btn-lg" type="button">Gastos de Vehiculos</button>
                <button onclick=Ocultar() class="btn btn-outline-primary btn-lg" type="button">Gastos Funcionarios</button>
            </div>
            <div class="table-wrapper">
            @include('tabla')
            @include('query1')
            @include('query2')
            </div>
        </div>
        

    </div>

    </body>
    <footer>@include('footer')</footer>
</html>
