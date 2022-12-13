<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title></title>
</head>
<body>
<!--Indico el método de recogida de datos, que será con POST y en el momento de dar al botón
de inicio nos redirigirá a la página principal-->
<form action='index.php' method='POST'>
<!-- Creamos dos campos de nombre y contraseña -->
	<p>Name<br><input type='text' name='name'></p>
	<p>Password<br><input type='password' name='passw'></p>
	<!-- Creamos un botón de inicio -->
	<input type='submit' name='start' value='start'>
</form>
<br>
<!--Indico el método de recogida de datos, que será con POST y en el momento de dar al botón
de registro nos redirigirá a la página de registro-->
<form action='register.php' method='POST'>
<!-- Creamos un botón de registro -->
	<input type='submit' name='registry' value='registry'>
	</form>
</body>
</html>
