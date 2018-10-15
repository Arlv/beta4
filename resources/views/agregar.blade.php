@extends('admin.template.main')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iTEMS</title>

</head>
<body>
		<center>
			<form action="/create" method="POST">
				{{ csrf_field() }}
				<label>nombre</label>
				<input type="text" name="item_name" placeholder=" nombre item">
				<label>precio</label>
				<input type="text" name="item_price" placeholder=" precio">
				<br>
				<label>tipo</label>
				<input type="text" name="item_type_id" placeholder="tipo id">
				<br>
				<label>codigo</label>
				<input type="text" name="item_code" placeholder=" codigo">
				<br>
				<label>marca</label>
				<input type="text" name="item_brand" placeholder=" marca">
				<br>
				<label>gramos</label>
				<input type="text" name="item_grams" placeholder=" gramos">
				<br>
				<button type="submit">+ agrgar item</button>
				</form>
		</center>

</body>
</html>
@stop

