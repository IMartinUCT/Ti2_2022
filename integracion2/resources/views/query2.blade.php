<div class='content_inside'>  
<table class="fl-table" id="tbldata2">
<thead>
        @foreach($query2[0] as $key=>$value)
            <th scope="col">{{$key}}</th>
        @endforeach
    </thead>
    <tbody>
        @foreach($query2 as $row)
        <tr>
            @foreach($row as $key => $val)
                <td>{{$val}}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
