@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Te damos la Bienvenida {{ Auth::user()->name }}...</div>

					<div class="panel-body">
						<h4>Con la implementacion de este sistema usted puede cotrolar un registro de las compra de insumos
                     indicando la cantidad de compra y los precios, un  registro de almacen que indicara cuantos productos hay en el stock.</h4>
                     <br>
                     <h1>:)</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
