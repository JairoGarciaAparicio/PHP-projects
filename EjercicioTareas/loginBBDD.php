<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<!--Indico el m�todo de recogida de datos, que ser� con POST y en el momento de dar al bot�n
de inicio nos redirigir� a la p�gina principal-->
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>Login Here</h2>
<form action='indexBBDD.php' method='POST'>
<!-- Creamos dos campos de nombre y contrase�a -->
	<div class='form-group'>
	<label>Name</label>
	<input type='text' name='nusuario' class="form-control" placeholder='Enter your name' required>
	</div>
	<div class='form-group'>
	<label>Password</label>
	<input type='password' name='pass' class="form-control" placeholder='Enter your password' required>
	</div>
	<!-- Creamos un bot�n de inicio -->
	<button type='submit' class="btn btn-primary" name ='login'> Login </button>
</form>
<br>
<!--Indico el m�todo de recogida de datos, que ser� con POST y en el momento de dar al bot�n
de registro nos redirigir� a la p�gina de registro-->

 <a href ='registerBBDD.php'>Register</a>
</div>
</div>
</div>

</body>
</html>
