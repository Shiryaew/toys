@extends('master')
@section("content")
<!--<nav class="navbar navbar-default">
    <div class="container-fluid">
       Brand and toggle get grouped for better mobile display
      <div class="navbar-header">
      </div>

      <!-- Collect the nav links, forms, and other content for toggling
      /*<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Сортировка
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>/.navbar-collapse
    </div> /.container-fluid
 </nav> -->
 <div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image" data-pagination="true">
		  <thead>
		    <tr>
		      <th scope="col">Image</th>
		      <th scope="col">Info</th>
		      <th scope="col">Discount?</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach ($agent as $item)
		    <tr>
		      <td class="w-25">
			      <img src={{$item->Logo}} class="img-fluid img-thumbnail" alt="Sheep" width="80px" height="80px">
		      </td>
		      <td>
				<div>
                    <span>{{$item->Title}}</span></br>
					<span>{{$item->Logo}} продаж в год</span></br>
					<span>{{$item->Phone}}</span></br>
					<span>Приоритетность: {{$item->Priority}}</span>
				</div>
			  </td>
		      <td>{{$item->Priority}}</td>

		    </tr>
			@endforeach
		  </tbody>
		</table>
    </div>
  </div>
</div>
 @endsection
