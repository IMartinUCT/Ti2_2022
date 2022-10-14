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
    </head>

    <body>
        @include('header')
        <br>
        <br>
        <br>
        <div class = "containerboton">
            <a onclick="exportarAexcel('tbldata')" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-export"></span>EXCEL
            </a>
            <a href="#" id= "xx" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-export"></span>CSV
            </a>
            
        </div>
        
        
        <div class="table-wrapper">
        <table class="fl-table" id = "tbldata">
        <thead>
            <tr>
                <th scope="col">Id_Gastos</th>
                <th scope="col">Vehiculos</th>
                <th scope="col">Combustible</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Capital</th>
                <th scope="col">Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gastos as $gasto)
            <tr>
                <th scope="row">{{$gasto['id']}}</th>
                <td>{{$gasto['Vehiculos']}}</td>
                <td>{{$gasto['Combustible']}}</td>
                <td>{{$gasto['Sueldo']}}</td>
                <td>{{$gasto['Capital']}}</td>
                <td>{{$gasto -> departamentos -> tipo_departamento}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>

    </div>

    </body>
    <footer>@include('footer')</footer>
</html>
