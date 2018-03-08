<?php
session_start(); //Inicio la sesión

if($_SESSION["validar"]="true") { //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
//si no existe, envio a la página de logueo de nuevo
header("Location: ../html/pagusu.php");
//ademas salgo de este script
exit();
}
?>