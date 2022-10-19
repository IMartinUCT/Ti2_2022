<DOCTYPE html> 
<html lang="en" theme='default'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href="{{ URL::asset('css/style.css'); }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        @include('header')
        <br>
        <br>
        <br>
        <div>
            <h1 class='display-2 text-center' >Genere su consulta</h1>
        </div>
        <div class="menu">
            <button onclick=Ocultar() class="button_active btn btn-outline-primary btn-lg" type="button">Gastos Totales</button>
            <button onclick=Ocultar() class="btn btn-outline-primary btn-lg" type="button">Gastos de Vehiculos</button>
            <button onclick=Ocultar() class="btn btn-outline-primary btn-lg" type="button">Gastos Funcionarios</button>
        </div>
        <div>
            <button  type='button' id='Mostrar' class="btn btn-primary btn-sm"><h4>¿Desea exportar su tabla?</h1></button>
        </div>
        <div class = "containerboton" id='exportar'>
            <br>
            <a onclick="exportarAexcel('tbldata')" class="btn btn-info btn-lg" >
            <span class="glyphicon glyphicon-export"></span>EXCEL
            </a>
            <a href="#" id= "xx" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-export"></span>CSV
            </a>
            <br>
            <br>

            <button type='button' id='Ocultar' class="btn btn-warning btn-sm"><h4>¿Desea cerrar esta opcion?</h1></button>
        </div>
    
        <div class="table-wrapper">
        @include('tabla')
        @include('query1')
        @include('query2')
        </div>

    </div>

    </body>
    <footer>@include('footer')</footer>
</html>
