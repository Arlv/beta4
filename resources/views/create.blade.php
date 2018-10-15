<div class="modal fade" id="create">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
      </button>
      <h4>Agregar item</h4>
    </div>
    <form>


</form>
    <div class="modal-body">
      <form action="/create" method="POST">
        {{ csrf_field() }}
        

  <div class="form-group">
    <label for="item_name">name</label>
    <input type="text" name="item_name" class="form-control" placeholder="nombre producto">
  </div>

    <div class="form-group">
    <label for="item_price">precio</label>
    <input type="text" name="item_price" class="form-control" placeholder="precio">
  </div>

    <div class="form-group">
    <label for="item_type_id">tipo</label>
    <input type="text" name="item_type_id" class="form-control" placeholder="1 pastillas, 2 jarabe">
  </div>


    <div class="form-group">
    <label for="item_code">codigo</label>
    <input type="text" name="item_code" class="form-control" placeholder="codigo">
  </div>

    <div class="form-group">
    <label for="item_brand">marca</label>
    <input type="text" name="item_brand" class="form-control" placeholder="marca">
  </div>

    <div class="form-group">
    <label for="item_grams">gramos</label>
    <input type="text" name="item_grams" class="form-control" placeholder="gramos">
  </div>


          <div>
    <input type="submit" class="btn btn-primary" value="enviar" name="">
  </div>
</form>


    </div>
    
  </div>  
  </div>
  
</div>