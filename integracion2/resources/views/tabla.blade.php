<div class='content_inside'>      
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