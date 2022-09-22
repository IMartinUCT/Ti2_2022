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
        
    </head>

    <body>
        @include('header')
        <br>
        <br>
        <br>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id_Gastos</th>
                <th scope="col">Vehiculos</th>
                <th scope="col">Combustible</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Capital</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gastos as $gasto)
            <tr>
                <th scope="row">{{$gasto['Id_Gastos']}}</th>
                <td>{{$gasto['Vehiculos']}}</td>
                <td>{{$gasto['Combustible']}}</td>
                <td>{{$gasto['Sueldo']}}</td>
                <td>{{$gasto['Capital']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </body>
    <footer>@include('footer')</footer>
</html>
