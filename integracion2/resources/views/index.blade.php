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
      <?php 
            $serverName = "MAYBEE\SQLEXPRESS";
            $connectinfo = array("Database" => "Integracion2");
            $conn= sqlsrv_connect($serverName,$connectinfo);

            if($conn){
                echo "Connection successful.";
            }
            else{
                echo "Connection failed";
                die(print_r(sqlsrv_errors(),true));
            
            }
        ?>

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
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@twitter</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            </tr>
            </tr>
        
        </tbody>
    </table>
    </body>
    <footer>@include('footer')</footer>
</html>
