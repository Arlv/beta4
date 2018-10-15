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