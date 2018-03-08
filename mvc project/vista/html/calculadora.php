<!DOCTYPE html>
<html lang="en">
<head>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="vista/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<header>

<?php include_once 'header.php'; ?>

</header>
<?php include_once 'menula.php'; ?>





<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">EJERCICIOS DE PRACTICA PHP</h3>
</div>
<div class="panel-body">
<p>Aplicación de ejercicios de uso de Variables, estructuras condicionales, repetitivas con lenguaje PHP
combinando con Bootstrap </p>
<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center"> <span><form name="Calculadora">


<table s border="4" align="center">
<tr>
<td>
<input type="txvalor" name="valor "id="valor" size="11" />
</td>
</tr>
<tr>
<td>
 <input type="button" name="uno" height="4" width="4"  value="1" onclick="Calculadora.valor.value +='1'" />
  <input type="button" name="dos"  height="4" width="4" value="2" onclick="Calculadora.valor.value +='2'" />
   <input type="button" name="tres"  height="4" width="4" value="3" onclick="Calculadora.valor.value +='3'" />
    <input type="button" name="suma"   height="4" width="4" value="+" onclick="Calculadora.valor.value +=' + '" />
<br>
<input type="button" name="cuantro" height="4" width="4" value="4" onclick="Calculadora.valor.value +='4'" />
  <input type="button" name="cinco" height="4" width="4" value="5" onclick="Calculadora.valor.value +='5'" />
   <input type="button" name="seis" height="4" width="4" value="6" onclick="Calculadora.valor.value +='6'" />
    <input type="button" name="menos" height="4" width="4"value="-" onclick="Calculadora.valor.value +=' - '" />
<br>
<input type="button" name="siete" height="4" width="4" value="7" onclick="Calculadora.valor.value +='7'" />
  <input type="button" name="ocho" height="4" width="4" value="8" onclick="Calculadora.valor.value +='8'" />
   <input type="button" name="nueve" height="4" width="4" value="9" onclick="Calculadora.valor.value +='9'" />
    <input type="button" name="multiplicacion" height="4" width="4"  value="x" onclick="Calculadora.valor.value +=' * '" />
    <br>
<input type="button" name="limpiar" height="4" width="4" value="c" onclick="Calculadora.valor.value =''" />
  <input type="button" name="cero" height="4" width="4" value="0" onclick="Calculadora.valor.value +='0'" />
   <input type="button" name="igual" height="4" width="4" value="=" onclick="resultado();" />
    <input type="button" name="divicion" height="4" width="4" value="/" onclick="Calculadora.valor.value +=' / '" />
</td>


</tr>



</table>


<script>
function resultado(){
	var input = document.getElementById('valor'); 
	var valor = input.value;
	
	input.value = eval(valor);
	
	}


</script></span></div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>