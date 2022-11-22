
@extends('master')
@section("content")
    <table class="table table-image">
    <thead>
    <tr>
        <th scope="col">№</th>
        <th scope="col">Название</th>
        <th scope="col">Тип Продукта</th>
        <th scope="col">Артикул</th>
        <th scope="col">Описание</th>
        <th scope="col">Изображение</th>
        <th scope="col">Product Person Count</th>
        <th scope="col">Production Workshop Number</th>
        <th scope="col">Минимальная стоимость для агента</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    @foreach ($product as $item)
    <tr>
        <td>{{$item->ID}}</td>
        <td>{{$item->Title}}</td>
        <td>{{$item->prodType}}</td>
        <td>{{$item->ArticleNumber}}</td>
        <td>{{$item->Description}}</td>
        <td><img width="80" height="80" src={{$item->Image}}></td>
        <td>{{$item->ProductionPersonCount}}</td>
        <td>{{$item->ProductionWorkshopNumber}}</td>
        <td>{{$item->MinCostForAgent}}</td>
    </tr>
    @endforeach
</table>

@endsection
