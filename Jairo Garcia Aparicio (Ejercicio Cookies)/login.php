<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title></title>
</head>
<body>
<!--Indico el m�todo de recogida de datos, que ser� con POST y en el momento de dar al bot�n
de inicio nos redirigir� a la p�gina principal-->
<form action='index.php' method='POST'>
<!-- Creamos dos campos de nombre y contrase�a -->
	<p>Name<br><input type='text' name='name'></p>
	<p>Password<br><input type='password' name='passw'></p>
	<!-- Creamos un bot�n de inicio -->
	<input type='submit' name='start' value='start'>
</form>
<br>
<!--Indico el m�todo de recogida de datos, que ser� con POST y en el momento de dar al bot�n
de registro nos redirigir� a la p�gina de registro-->
<form action='register.php' method='POST'>
<!-- Creamos un bot�n de registro -->
	<input type='submit' name='registry' value='registry'>
	</form>
</body>
</html>
