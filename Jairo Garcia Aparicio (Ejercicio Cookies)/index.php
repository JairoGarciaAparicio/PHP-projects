<?php
/*realizamos un comprobaci�n para que si pulsamos el bot�n de "send" incluimos en las cookies
 * los valores definidos abajo.*/
if (isset($_POST['send'])) {
    setcookie("name", $_POST["name"], time() + 360);
    setcookie("passw", $_POST["passw"], time() + 360);
    setcookie("biografy", $_POST["biografy"], time() + 360);
    setcookie("birthdate", $_POST["birthdate"], time() + 360);
    setcookie("nacionality", $_POST["nacionality"], time() + 360);
    /*Si gender no est� definido nos saltar� un aviso y si est� 
     * definido se crear� la cookie */
    if (!isset($_POST["gender"])) {
        setcookie("gender", "gender undefined", time() + 360);
    } else {
        setcookie("gender", $_POST["gender"], time() + 360);
    }
}
?>
<!DOCTYPE HTML>
<html lang='es-ES'>
<head>
<meta charset='UTF-8'>
<title></title>
</head>
<body>
<?php
/*si la cookie no est� definida nos creamos el boton de login*/
if (!isset($_COOKIE['name'])) {
    echo "<form action='login.php' method='POST'>
    <input type='submit' name='login' value='login'>    
    </form>";
/* Si est� definido y pulsamos el boton de inicio, realizamos una comprobaci�n
 * para saber si ya est� incluido el nombre y la contrase�a. Si es as� creamos el boton 
 * de pefil. En el caso de que no est� incluido el nombre y contrase�a, aparecer� un aviso*/
} else {
    if (isset($_POST['start'])) {
        if ($_POST['name'] == $_COOKIE['name'] && $_POST['passw'] == $_COOKIE['passw']) {
            echo "<form method = 'POST'>";
            echo "<input type='submit' name='profile' value='profile'>";
            echo "</form>";
        } else {
            echo "Unregistered user";
        }
    }

}
/*Con el bot�n de perfil aparecer� por pantalla los datos recogidos*/
if (isset($_POST['profile'])) {
    echo "<br>";
    echo "Name: " . $_COOKIE['name'];
    echo "<br>";
    echo "Password: " . $_COOKIE['passw'];
    echo "<br>";
    echo "Biografy: " . $_COOKIE['biografy'];
    echo "<br>";
    echo "Birthdate: " . $_COOKIE['birthdate'];
    echo "<br>";
    echo "Nacionality: " . $_COOKIE['nacionality'];
    echo "<br>";
    echo "Gender: " . $_COOKIE['gender'];
}

?>

	
</body>
</html>
