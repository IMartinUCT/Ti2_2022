
<div class='content_inside'> 
   
<br>
<br> 
<div>


    <table class="fl-table" id="tbldata">
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
</div>