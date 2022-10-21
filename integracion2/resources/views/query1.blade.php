
<div class='content_inside'>    
<div id = 'exportar2' style = "display:none;">
    <button onclick="hacerocultacion2(),OcultarMostrar2()" id="boton2" class="btn btn-outline-primary btn-lg" value="Exportar">Exportar Query 2</button>
</div>
<div id='Mostrar2' style = "display:none;">
    <br>
    <button onclick="CSV2('Query2.csv')" class="button_active btn btn-outline-primary btn-lg">CSV</button>

</div>
<br>
<br>

<table class="fl-table" id="tbldata1">   
    <thead>
        <tr>
        @foreach($query1[0] as $key=>$value)
            <th scope="col">{{$key}}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($query1 as $row)
        <tr>
            @foreach($row as $data)
                <td>{{$data}}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
    </table>    
</div>