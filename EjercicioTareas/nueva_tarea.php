<!DOCTYPE html>
<html lang="en">
    <head>
        <title>New Tarea</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <meta charset="UTF-8">
    </head>
    <body>
    <form action='indexBBDD.php' method='POST'>
    <div class='form-group'>
	<label>Tarea</label>
	<input type='text' name='ntarea' class="form-control" placeholder='Enter your tarea' required>
	</div>
	<div class='form-group'>
	<label>Descripcion</label>
	<input type='text' name='descripcion' class="form-control" placeholder='Enter your description' required>
	</div>
	<div class='form-group'>
	<label>Fecha Fin</label>
	<input type='text' name='fechafin' class="form-control" placeholder='Enter your date' required>
	</div>
	<button type='submit' class="btn btn-primary" name ='crear'> Crear </button>
     </form>
    </body>
</html>
