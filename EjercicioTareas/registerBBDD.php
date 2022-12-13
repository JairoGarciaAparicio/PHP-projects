<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>Register Here</h2>
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
	<div class='form-group'>
	<label>Biografy</label>
	<input type='text' name='biografia' class="form-control" placeholder='Enter your biografy' required>
	</div>
	<div class='form-group'>
	<label>Birthdate</label>
	<input type='date' name='fechanac' class="form-control" placeholder='Enter your birthdate' required>
	</div>
	<div class='form-group'>
	<label>Nacionality</label>
	<input type='text' name='nacionalidad' class="form-control" placeholder='Enter your nacionality' required>
	</div>
	<div class='form-group'>
	<label>Gender
	<br>
	<br>
	<input type='radio' name='sexo' class="form-control" value='man'> Man <input type='radio' name='sexo' class="form-control" value='woman'>Woman
	</label>
	</div>
	<div class='form-group'>
	<label>Accept Terms and conditions
	<input type='checkbox' name='terms' class="form-control" required>
	</label> 
	</div>

	<!-- Creamos un botón de inicio -->
	<button type='submit' class="btn btn-primary" name ='send'> Register </button>
</form>
</div>
</div>
</div>
</body>
</html>
