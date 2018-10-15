<div class="modal fade" id="create2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times</span>
					
				</button>
				<h4>Crear Usuario</h4>
			</div>
			<div class="modal-body">
				...
 



			<form action="/create2" method="POST">
				{{ csrf_field() }}
				
    <div class="form-group">
    <label for="name">nombre</label>
    <input type="text" name="name" class="form-control" placeholder="nombre usuario">
  </div>

      <div class="form-group">
    <label for="email">correo electronico</label>
    <input type="email" name="email" class="form-control" placeholder="exampler@example.com">
  </div>

      <div class="form-group">
    <label for="password">password</label>
    <input type="password" name="password" class="form-control" placeholder="**********">
  </div>

      <div class="form-group">
    <label for="type">tipo de usuario</label>
    <input type="type" name="type" class="form-control" placeholder="admin,member">
  </div>




				  <div>
    <input type="submit" class="btn btn-primary" value="enviar" name="">
  </div>
				</form>










			</div>
			<div class="modal-footer">
				registro de nuevos usuarios 
			</div>
			
		</div>
		
	</div>
	
</div>