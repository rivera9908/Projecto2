

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fruteria el bosque // Pagina Cliente</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<header>
</header>

<?php session_start(); //Inicio la sesión 
if ($_SESSION["validar"]="true") { //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO //si no existe, envio a la página de logueo de nuevo 
//header("Location: ../html/Sesion.php"); //ademas salgo de este script 
header("Location: ../html/usuario.php");
exit(); 
} 
?>


<?php include_once 'header.php'; ?>
<?php include_once 'menula.php'; ?>





<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">¡!</h3>
</div>
<div class="panel-body">
<p>Bienvenido Cliente</p>




<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center"> <span><img src="vista/imagenes/Frut1.jpg" width="100"
width="100"></span></div>
<div class="col-md-3" align="center"> <span><img src="vista/imagenes/Frut2.jpg" width="100"
width="100"></span></div>
<div class="col-md-3" align="center"> <span><img src="vista/imagenes/Frut3.jpg" width="130"
width="130"></span></div>
<div class="col-md-3" align="center"> <span><img src="vista/imagenes/Frut4.jpg" width="110"
width="110"></span></div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>