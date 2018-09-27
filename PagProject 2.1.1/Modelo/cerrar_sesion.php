<?php
session_start();
if(isset($_POST['cerrar_sesion'])){
	session_destroy();
	session_unset();
	header("location: ../index.php");
}
?>