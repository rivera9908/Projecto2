<?php
	session_start();
	
if (!$_SESSION['inicio_sesion']){
    header("location: ../../index.php?Noseccion");
    }
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'mydb');
	define('DB_CHARSET', 'utf8');
?>