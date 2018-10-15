<div class="modal fade" id="user.create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times</span>
					
				</button>
				<h4>nueva tarea</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="guardar" >
			</div>
			
		</div>
		
	</div>
	
</div>
<div class="modal fade" id="create">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				<span>&times;</span>
			</button>
			<h4>Agregar usuario</h4>
		</div>
		<form>


</form>
		<div class="modal-body">
			<form action="/createId" method="POST">
				{{ csrf_field() }}
				

  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" class="form-control" placeholder="nombre usuario">
  </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="email@io.com">
  </div>

    <div class="form-group">
    <label for="password">contraseña</label>
    <input type="password" name="password" class="form-control" placeholder="******************">
  </div>

    <div class="form-group">
    <label for="type">Tipo</label>
    <input type="text" name="type" class="form-control" placeholder="miembro, admin">
  </div>


		</div>

		<div class="modal-footer">
			<input  type="submit" class="btn btn-primary" >
			<a class="btn btn-primary" href="/user/vista" role="button">guardar2</a>
		</div>
		
	</div>	
	</div>
	
</div>