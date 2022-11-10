<div class='content_inside'> 
<br>
    <table id="tbldata" class="fl-table">
        <thead>
            <tr>
            @foreach($columnas_gastos as $colum)
                <th scope="col">{{$colum}}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>
        @foreach($filas_gastos as $row)            
            <tr>
                @foreach($row as $data)
                    <td>{{$data}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>