<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title></title>
</head>
<body>
<!--indico el metodo de recogida de datos, que será con POST y en el momento de dar al botón
de envio nos redirigirá a la página principal-->
<form action="index.php" method='POST'>
<!-- Creamos los campos a rellenar que será obligatorios, excepto el de gender. -->
	<p>Name<br><input type='text' name='name' required></p>
	<p>Password<br><input type='password' name='passw' required></p>
	<p>Biografy<br><input type='text' name='biografy' required></p>
	<p>Birthdate<br><input type='date' name='birthdate' required></p>
	<p>Nacionality<br><input type='text' name='nacionality' required></p>
	<p>Gender<br><input type='radio' name='gender' value='man'> Man <input type='radio' name='gender' value='woman'> Woman</p>
	<p>Accept terms and conditions<br><input type='checkbox' name='terms' required></p>
	<input type='submit' name='send' value='send'>
	</form>
</body>
</html>
