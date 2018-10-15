@extends('adminlte::layouts.app')
@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">ITEMS</div>

</div>
<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Agregar item</a>
<table class="table">
	<thead>
		<th>Nº</th>
		<th>nombre item</th>
		<th>precio</th>
		<th>tipo</th>
		<th>codigo</th>
		<th>marca</th>
		<th>gramos</th>
		<th>acciones</th>
	</thead>
	@foreach($it as $item)  
	<tbody>
		<td>{{$item->item_id}}</td>
		<td>{{$item->item_name}} </td>
		<td>{{$item->item_price}} </td>
		<td>{{$item->item_type_id}} </td>
		<td>{{$item->item_code}} </td>
		<td>{{$item->item_brand}} </td>
		<td>{{$item->item_grams}} </td>
	
	</tbody>

	@endforeach
</table>
@include('create')
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
<div class="panel-body">

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection