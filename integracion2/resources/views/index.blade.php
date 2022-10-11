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

    </head>

    <body>
        <header>@include('header')</header>
        <div class="table-wrapper">
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione la tabla</option>
                @foreach($table_names as $table)
                <option value="{{$table}}">{{$table}}</option>
                @endforeach
            </select>
        </div>
        <div>
        <table class="fl-table" id="tbldata">
        <thead>
            <tr>
            @foreach($columnas as $col)
                <th scope="col">{{$col}}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>
        @foreach($filas as $row)
            <tr>
                @foreach($row as $data)
                    <td>{{$data}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
        </table>
        </div>
    </body>
    <footer>@include('footer')</footer>
</html>
