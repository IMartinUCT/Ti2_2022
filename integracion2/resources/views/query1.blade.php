<div class="table-wrapper">
<div class='content_inside'>    
<table class="fl-table" id="tbldata">   
<thead>
        @foreach($query1[0] as $key=>$value)
            <th scope="col">{{$key}}</th>
        @endforeach
    </thead>
    <tbody>
        @foreach($query1 as $row)
        <tr>
            @foreach($row as $key => $val)
                <td>{{$val}}</td>
            @endforeach
        </tr>
        @endforeach
    </tbody>
    </table>    
</div>
</div>