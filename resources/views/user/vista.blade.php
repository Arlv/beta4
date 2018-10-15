@extends('adminlte::layouts.app')
@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					

</div>
<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create2">Agregar usuario</a>
<table class="table">
		<thead>
		<tr>
		
		<th>Nombre</th>
		<th>Correo electronico</th>
		<th>Tipo de usuario</th>
		<th>Creado </th>
		<th>Actualizado</th>
		<th>Operaciones</th>
		</tr>
		</thead>
		<tbody>
		@foreach($users as $user)
		<tr>
	
		<td>{{$user->name}} </td>
		<td>{{$user->email}}</td>
		<td>{{$user->type}}</td>
		<td>{{$user->created_at}} </td>
		<td>{{$user->updated_at}} </td>
		<td><a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> EDITAR</a>
<a href="{{route('users.destroy', $user->id)}}" onclick="return confirm('¿Seguro que deseas eliminar?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"> ELIMINIAR</span></a>

		</div>  </td>
		</tr>
		 @endforeach
@include('editar2')
	 
	</tbody>


</table>
@include('create2')



<div class="panel-body">

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection