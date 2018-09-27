<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$Nom_ing =$_POST["Nom_ing"];
$Valor_ing = $_POST["Valor_ing"];
$cant_existente = $_POST["cant_existente"];
$Stock_max= $_POST["Stock_max"];
$Stock_min = $_POST["Stock_min"];
$Estado_ing = $_POST["Estado_ing"];
$Peso_ing = $_POST["Peso_ing"];
$Proveedor_IdPROVEEDOR = $_POST["Proveedor_IdPROVEEDOR"];


$sql33="SELECT Nom_ing FROM ingrediente WHERE Nom_ing='$Nom_ing'";

    $result2=mysqli_query($con,$sql33);
    $contar=mysqli_num_rows($result2);
   
    if($contar==1){
   
    print "<script>alert(\"ALGUNOS DATOS QUE ESTA INGRESANDO YA SE ENCUENTRA EN EL SISTEMA, PORFAVOR INTENTELO DE NUEVO\");window.location='../../Vista/Administrador/ver_ing.php';</script>";
    	
    
	}else{

		if ($Valor_ing <1 || $cant_existente <1 || $Stock_max <1 || $Stock_min <1 || $Peso_ing <1) {

    	print "<script>alert(\"Por favor inserte numeros positivos \");window.location='../../Vista/Administrador/ver_ing.php';</script>";
    	
    }else{

    	$sql1 = "INSERT INTO ingrediente (Nom_ing, Valor_ing, cant_existente, Stock_max, Stock_min, Estado_ing, Peso_ing, Proveedor_IdPROVEEDOR) VALUES ('$Nom_ing',$Valor_ing,'$cant_existente','$Stock_max','$Stock_min','$Estado_ing','$Peso_ing','$Proveedor_IdPROVEEDOR')";
	$resultado=mysqli_query($con, $sql1);

    }

}
	
	if($resultado==true){

	print "<script>alert(\"Ingrediente agregado exitosamente.\");window.location='../../Vista/Administrador/ver_ing.php';</script>";	
	}else{
	print "<script>alert(\"Algo salio mal.\");window.location='javascript:window.history.back();';</script>";
}

?>