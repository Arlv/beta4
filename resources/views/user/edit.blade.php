@extends('adminlte::layouts.app')
@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>





{!! Form::model($user,['route'=>['users.update', $user],'method'=>'PUT' ])  !!}
<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Nombre completo', 'required'] ) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Correo electronico') !!}
			{!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => 'example@example.com', 'required'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class'=> 'form-control', 'placeholder' => '**********', 'required'] ) !!}
		</div>
		<div class="form-group">
		{!! Form::label('type', 'Tipo' ) !!}
		{!! Form::select('type', ['' => 'selccione nivel de usuario', 'member'=> 'miembro', 'admin'=> 'administrador' ],null, ['class' => 'form-control'] ) !!}
		</div>	
		{!! Form::model($user,['route'=>['users.update', $user],'method'=>'PUT' ])  !!}		
			{!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-primary'] ) !!}
	{!! Form::close()  !!}



<div class="panel-body">
						{{ trans('adminlte_lang::message.logged') }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection