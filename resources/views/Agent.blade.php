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
 </nav> 



-->
 <form method="get" >
 <div class="filTable">

    <!--<input class="searchTable" placeholder="Введите для поиска">-->

    </input>
    <div class="sortTableTitle" id="sortTableTitle" >
        Сортировка:
    </div>
    <!--https://tokmakov.msk.ru/blog/item/585-->
    <select class="sortTable" id="sortTable"  name="Priority">
        <option value="min" @if(request()->Priority == 'min') selected @endif>
            Возрастание
        </option>
        <option value="max" @if(request()->Priority == 'max') selected @endif>
            Убывание
        </option>

    </select>
    <!--<div class="filterTableTitle" id="filterTableTitle">
        Фильтр:
    </div>
    <select class="filterTable" id="filterTable">
        <option value="1">
            Вариант 1
        </option>
        <option value="2">
            Вариант 2
        </option>

    </select>-->
    <button type="submit" class="btn btn-light">Фильтровать</button>
    
</div>
</form>
 <div class="container">
  <div class="row">
    <div class="col-12">
		<table id="AgentTable" class="table table-image" data-pagination="true">
         //   @php
         //   $('#AgentTable')
         //   @endphp
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
					<span>{{$item->Sum}} продаж в год</span></br>
					<span>{{$item->Phone}}</span></br>
					<span>Приоритетность: {{$item->Priority}}</span>
				</div>
			  </td>
		      <td>@php
                      if ($item->Multiply<10000)
                          $item->Multiply="0%";
                      elseif ($item->Multiply<50000)
                          $item->Multiply="5%";
                      elseif ($item->Multiply<150000)
                            $item->Multiply="10%";
                      elseif ($item->Multiply<500000)
                            $item->Multiply="20%";
                      else
                            $item->Multiply="25%";

                  @endphp
                  {{$item->Multiply}}
		      </td>

		    </tr>
			@endforeach
		  </tbody>
		</table>
        <div class="d-flex justify-content-center">

        </div>
    </div>
  </div>
</div>
 @endsection
