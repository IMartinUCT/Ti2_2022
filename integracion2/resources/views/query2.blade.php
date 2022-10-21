
<div class='content_inside'> 
<div id = 'exportar3' style = "display:none;">
    <button onclick="hacerocultacion3(),OcultarMostrar3()" id="boton3" class="btn btn-outline-primary btn-lg" value="Exportar">Exportar Query 3</button>
</div>
<div id='Mostrar3' style = "display:none;">
    <br>
    <button onclick="CSV3('Query3.csv')" class="button_active btn btn-outline-primary btn-lg">CSV</button>
    
</div>
<br>
<br>
 
<table class="fl-table" id="tbldata2">
    <thead>
        <tr>
        @foreach($query2[0] as $key=>$value)
            <th scope="col">{{$key}}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($query2 as $row)
        <tr>
            @foreach($row as $data)
                <td>{{$data}}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
