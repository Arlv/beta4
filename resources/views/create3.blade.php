<div class="modal fade" id="create3">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times</span>
					
				</button>
				<h4>Nuevo Stock</h4>
			</div>
			<div class="modal-body">
				...
				<form class="form-horizontal" role="form" id="form-stock">
					 <div class="modal-body">
      <form action="/create" method="POST">
        {{ csrf_field() }}
        
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Producto:</label>
				  <div class="col-sm-9"> 
				      <input type="number" min="1" class="form-control" id="qty" placeholder="Ingresa la producto" required="">
				    </div>

				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Cantidad:</label>
				    <div class="col-sm-9"> 
				      <input type="number" min="1" class="form-control" id="qty" placeholder="Ingresa la cantidad" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Vence:</label>
				    <div class="col-sm-9"> 
				      <input type="date" class="form-control" id="xDate" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Fabricado:</label>
				    <div class="col-sm-9"> 
				      <input type="date" class="form-control" id="manu" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Comprado:</label>
				    <div class="col-sm-9"> 
				      <input type="date" class="form-control" id="purc" required="">
				    </div>
				  </div>


				  <div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-default">Guardar datos
				      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>
				</form>






			</div>
			<div class="modal-footer">
				registro stock
			</div>
			
		</div>
		
	</div>
	
</div>