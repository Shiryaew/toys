@extends('master')
@section("content")

 <div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image" data-pagination="true">
		  <thead>
		    <tr>
		      <th scope="col">Image</th>
		      <th scope="col">Name</th>
		      <th scope="col">Info</th>
		      <th scope="col">Discount?</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach ($agent as $item)
		    <tr>
		      <td class="w-25">
			      <img src={{$item['Logo']}} class="img-fluid img-thumbnail" alt="Sheep" width="80px" height="80px">
		      </td>
		      <td>
				<div>
					<span>{{$item['Logo']}} продаж в год</span>
					<span>{{$item['Phone']}}</span>
					<span>Приоритетность: {{$item['Priority']}}</span>
				</div>
			  </td>
		      <td>{{$item['Priority']}}</td>

		    </tr>
			@endforeach
		  </tbody>
		</table>
    </div>
  </div>
</div>
 @endsection
