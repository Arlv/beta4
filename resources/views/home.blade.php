@extends('admin.template.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Te damos la Bienvenida {{ Auth::user()->name }} ...</h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <h4>Con la implementacion de este sistema usted puede cotrolar un registro de las compra de insumos
                     indicando la cantidad de compra y los precios, un  registro de almacen que indicara cuantos productos hay en el stock para evitar que el producto se acabe y un registro de ventas junto con los precios para poder realizar la facturacion correspondiente.</h4>
                     <h1>:)</h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
