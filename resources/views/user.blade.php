
@extends('admin.template.main') 

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
				<label>name</label>
				<input type="text" name="name" placeholder=" noame">
				<br>
				<label>email/label>
				<input type="text" name="email" placeholder=" email">
				<br>
				<label>password</label>
				<input type="text" name="password" placeholder="*********">
				<br>
			
				<label>type</label>
				<input type="text" name="type" placeholder=" member,admin">
				<br>
				<br>
				<button type="submit">+ agrgar item</button>
				</form>
		</center>

</body>
</html>
