
<div class='content_inside'> 
<div id = 'exportar1' style = "display:none;">
    <button onclick="hacerocultacion(),OcultarMostrar()" id="boton" class="btn btn-outline-primary btn-lg" value="Exportar">Exportar Query 1</button>
</div>
<div id='Mostrar' style = "display:none;">
    <br>
    <button onclick="CSV1('Query1.csv')" class="button_active btn btn-outline-primary btn-lg">CSV</button>

</div>    
<br>
<br> 
<table class="fl-table" id="tbldata">
    <thead>
        <tr>
        @foreach($gastos[0] as $key=>$value)
            <th scope="col">{{$key}}</th>
        @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($gastos as $gasto)
        <tr>
            @foreach($gasto as $key=>$value)
                <td>{{$value}}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
    </table>
</div>  