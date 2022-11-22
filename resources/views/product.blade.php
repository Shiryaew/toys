
@extends('master')
@section("content")
    <table class="table table-image">
    <thead>
    <tr>
        <th scope="col">№</th>
        <th scope="col">Title</th>
        <th scope="col">Product Type</th>
        <th scope="col">Article</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Product Person Count</th>
        <th scope="col">Production Workshop Number</th>
        <th scope="col">Min Cost For Agent</th>
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
