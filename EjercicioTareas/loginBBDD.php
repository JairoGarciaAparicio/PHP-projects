<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<!--Indico el método de recogida de datos, que será con POST y en el momento de dar al botón
de inicio nos redirigirá a la página principal-->
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>Login Here</h2>
<form action='indexBBDD.php' method='POST'>
<!-- Creamos dos campos de nombre y contraseña -->
	<div class='form-group'>
	<label>Name</label>
	<input type='text' name='nusuario' class="form-control" placeholder='Enter your name' required>
	</div>
	<div class='form-group'>
	<label>Password</label>
	<input type='password' name='pass' class="form-control" placeholder='Enter your password' required>
	</div>
	<!-- Creamos un botón de inicio -->
	<button type='submit' class="btn btn-primary" name ='login'> Login </button>
</form>
<br>
<!--Indico el método de recogida de datos, que será con POST y en el momento de dar al botón
de registro nos redirigirá a la página de registro-->

 <a href ='registerBBDD.php'>Register</a>
</div>
</div>
</div>

</body>
</html>
