<?php
session_start();

class BBDD
{

    private $servidor;

    private $user;

    private $pass;

    private $base_datos;

    private $puerto;

    private $socket;

    private $descriptor;

    private $resultado;

    function __construct($servidor, $user, $pass, $base_datos, $puerto, $socket)
    {
        $this->servidor = $servidor;
        $this->user = $user;
        $this->pass = $pass;
        $this->base_datos = $base_datos;
        $this->puerto = $puerto;
        $this->socket = $socket;
        $this->descriptor = mysqli_connect($this->servidor, $this->user, $this->pass, $this->base_datos, $this->puerto, $this->socket);
    }

    public function consulta($consulta)
    {
        $this->resultado = mysqli_query($this->descriptor, $consulta);
    }

    public function extraer_registro()
    {
        if ($fila = mysqli_fetch_array($this->resultado, MYSQLI_ASSOC)) {
            return $fila;
        } else {
            return false;
        }
    }
}
$host = "127.0.0.1";
$port = 3306;
$socket = "";
$user = "root";
$password = "";
$dbname = "entregable4php";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket) or die('Could not connect to the database server' . mysqli_connect_error());

$con = new BBDD($host, $user, $password, $dbname, $port, $socket) or die('Could not connect to the database server' . mysqli_connect_error());

// area de registro un vez doy al boton de enviar

if (isset($_POST['send'])) {
    $usuario = $_POST['nusuario'];
    $password = $_POST['pass'];
    $biografia = $_POST['biografia'];
    $fecha = date('Y.m-d', strtotime($_POST['fechanac']));
    $nacionalidad = $_POST['nacionalidad'];
    $sexo = $_POST['sexo'];

    $con->consulta("INSERT INTO usuarios (nusuario, pass, biografia, fechanac, nacionalidad, sexo) values
    ('$usuario', '$password', '$biografia', '$fecha', '$nacionalidad', '$sexo')");

    $_SESSION['nusuario'] = $usuario;

    echo "<br>";
    echo "<form method='POST' action='loginBBDD.php'>";
    // echo "&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' class='btn btn-primary' name ='perfil'> Profile </button>";
    echo "<br>";
}

if (isset($_POST['login'])) {
    if (isset($_SESSION['nusuario']) && ($_SESSION['nusuario']) == true) {
        echo "<br>";
        echo "<form method='POST'>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' class='btn btn-primary' name ='perfil'> Profile </button>";
        echo "<br>";
    }
    if (isset($_SESSION['nusuario']) && ($_SESSION['nusuario']) == false) {
        echo "<First you need register>";
    }
}

if (isset($_POST['perfil'])) {
    $user = $_SESSION['nusuario'];
    $con->consulta("SELECT nusuario, biografia, fechanac, nacionalidad, sexo FROM usuarios WHERE nusuario = '$user'");
    echo "<h2> USER </H2>";
    while ($fila = $con->extraer_registro()) {
        foreach ($fila as $key => $valor) {
            echo "$key : $valor <br>";
        }
    }
    echo "<br>";


    $con->consulta("SELECT ntarea, descripcion, fechafin FROM tareas WHERE idusuarios = $user");

    $userTarea = $_SESSION['ntarea'];
    $con->consulta("SELECT ntarea, descripcion, fechafin FROM tareas WHERE ntarea ='$userTarea'");
    echo "<h2> TAREA </H2>";
    while ($fila = $con->extraer_registro()) {
        foreach ($fila as $key => $valor) {
            echo "$key : $valor <br>";
        }
    }
    echo"<form action='nueva_tarea.php' method='POST'>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' class='btn btn-primary' name ='tarea'> Nueva Tarea </button>";
    echo "<br>";
}
echo "<br>";
if(isset($_POST['crear'])){
   $tarea = $_POST['ntarea'];
   $descripcion = $_POST['descripcion'];
   $fechafin = date('Y.m-d', strtotime( $_POST['fechafin']));
 
   $con->consulta( "INSERT INTO tareas (ntarea, descripcion, fechafin) values ('$tarea', '$descripcion', '$fechafin')");
   $_SESSION['ntarea'] = $tarea;
 
   $user = $_SESSION['nusuario'];
   $con->consulta("SELECT nusuario, pass, biografia, fechanac, nacionalidad, sexo FROM usuarios WHERE nusuario = '$user'");
   echo "<h2> USER </H2>";
   while ($fila = $con->extraer_registro()){
       foreach($fila as $key => $valor){
           echo "$key : $valor <br>";
       }
   }
   echo"<br>";
   
 
   $con->consulta("SELECT ntarea, descripcion, fechafin FROM tareas WHERE idusuario = $user");
 
   $userTarea = $_SESSION['ntarea'];
   $con->consulta("SELECT ntarea, descripcion, fechafin FROM tareas WHERE ntarea ='$userTarea'");
   echo "<h2> TAREA </H2>";
   while($fila = $con->extraer_registro()){
       foreach($fila as $key =>$valor){
           echo"$key : $valor <br>";
       }
   }
   echo"<br>";
   echo"<br>";
}

?>

<head>
<meta charset='UTF-8'>
<title>Login</title>
<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<br>
	<form action='loginBBDD.php' method='POST'>
		&nbsp;&nbsp;&nbsp;
		<button type='submit' class='btn btn-primary' name='sessionStart'>
			sessionStart</button>
	</form>