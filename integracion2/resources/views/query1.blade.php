
<div class='content_inside'>    

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