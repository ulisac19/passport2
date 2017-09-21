<!doctype html>
<html lang="es">
	<head>
	<meta charset="utf-8">
	<title>Clientes</title>
	</head>
	<body>
		<form action="{{ url('/oauth/clients') }} " method="POST">
			<p>
				<input type="text" name="name">
			</p>
			<p>
				<input type="text" name="redirect">
			</p>
			<p>
				<input type="submit" name="send" value="Enviar">
			</p>
			{{ csrf_field() }}

		</form>
	</body>
</html>