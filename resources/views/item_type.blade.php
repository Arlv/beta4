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
				<input type="text" name="item_type" placeholder=" nombre item">
				<br>
		
				<button type="submit">+ agrgar item</button>
				</form>
		</center>

</body>
</html>