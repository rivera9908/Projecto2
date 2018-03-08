<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$a=$_REQUEST['valor1']; /* cáptura el valor de la caja de texto en una variable a */
$b=$_REQUEST['valor2']; /* cáptura el valor de la caja de texto en una variable b */
if ($_REQUEST['radio1']=="suma") /* pregunta el valor del radio, toca preguntar por cada radio*/
{
$resul=$_REQUEST['valor1'] + $_REQUEST['valor2']; /* si esta seleccionada la opción, se suman variables*/
echo "La suma es:".$suma;
}

if ($_REQUEST['radio1']=="resta") /* pregunta el valor del radio, toca preguntar por cada radio*/
{
$resul=$_REQUEST['valor1'] - $_REQUEST['valor2'];
echo "La resta es:".$resta;
}
if (isset($_REQUEST['check1'])) /* con la palabra isset se verifica si esta seleccionado o no el control*/
{
$suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
echo "La suma es:".$suma."<br>";
}
$r=$_REQUEST['cerveza']; /* captura el contenido seleccionado del select y lo imprime */
echo $r;
If($_REQUEST['cerveza']=="Aguila") /* Por cada opción select se debe hacer un if */
{ echo "ricaa";}
/* Este código es para retornar datos a la misma página, quitar comentarios para ver resultado */
/* header(“Location:formulario.php?a=$resul”); */
?>
</body>
</html>