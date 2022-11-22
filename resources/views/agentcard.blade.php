@extends("master")
@section("content")

    <h5>
        <span class="agent_type">{{$item->agType}}</span> {{$item->Title}} | Приоритет: {{$item->Priority}}
    </h5>
    <table>
            <tr><td>ИНН {{$item->INN}} / КПП {{$item->KPP}}</td></tr>
            <tr><td>Директор: {{$item->DirectorName}}</td></tr>
            <tr><td>Телефон: {{$item->Phone}} E-mail: {{$item->Email}}</td></tr>
            <tr><td>Адрес: {{$item->Address}}</td></tr>
        </table>

@endsection
