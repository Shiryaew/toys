@extends('master')
@section("content")

    <div>
        <h5>
        <?php
            if (file_exists("../images".$row['Logo'])) {
                echo "<img class=\"logo\" src=\"../images".$row['Logo']."\"/>";
                } else {
                echo " ";
                }
        ?>
        <span class="agent_type">{{$item->agenttype'}}</span> {{$item->Title}} | Приоритет: {{$item->Priority}}</h5>
    </div>
    <div>
        <table>
            <tr><td>ИНН {{$item->INN}} / КПП {{$item->KPP}}</td></tr>
            <tr><td>Директор: {{$item->DirectorName}}</td></tr>
            <tr><td>Телефон: {{$item->Phone}} E-mail: {{$item->Email}}</td></tr>
            <tr><td>Адрес: {{$item->Address}}</td></tr>
        </table>
    </div>
@endsection
