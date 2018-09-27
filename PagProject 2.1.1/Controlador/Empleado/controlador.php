<?php




require("../../Modelo/conexion.php");
$number = count($_POST["ingred"]);
$fecha_inventario = $_POST["fecha_inventario"];
$Usuario_id_usu = $_POST["Usuario_id_usu"];
$Usuario_Tipo_doc_Tipo_doc = $_POST["Usuario_Tipo_doc_Tipo_doc"];
$cantidad = $_POST["cantidad"];

if($number > 1)
{

	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["ingred"][$i] != '' && trim($_POST["cantidad"][$i] != '')))
		{
			$ing = $_POST["ingred"][$i];
			$cantidad = $_POST["cantidad"][$i];
			$sql4="SELECT cant_existente FROM ingrediente WHERE cod_ingrediente = $ing";
			$resultado3 =mysqli_query($con, $sql4);

			while ($row=mysqli_fetch_array($resultado3)) {
				$cant_existente = $row ['cant_existente'];
			}
            $suma1 = $cant_existente + $cantidad;
			if ($cant_existente>=80|| $suma1>80){

				print "<script>alert(\" Inventario exitoso, Sin embargo uno o varios de los ingredientes fallaron al intentar hacerles inventario ya que no puedes agregar mas ingredientes ha algunos  que ya han superado el limite.\");window.location='../../Vista/Empleado/ver_inventario.php';</script>";	

			}else{

			 $ing = $_POST["ingred"][$i];
			$cantidad = $_POST["cantidad"][$i];
			$sqler="SELECT * FROM ingrediente WHERE cod_ingrediente='$ing'";
			$resultado33=mysqli_query($con, $sqler);
			while ($row=mysqli_fetch_array($resultado33)) {

				$Nom_ing = $row ['Nom_ing'];
				break;
				# code...
			}

			$sql = "INSERT INTO inventario (fecha_inventario, Usuario_id_usu, Usuario_Tipo_doc_Tipo_doc, Ingrediente_cod_ingrediente, Nom_ing, cantidad) VALUES ('$fecha_inventario','$Usuario_id_usu','$Usuario_Tipo_doc_Tipo_doc' , '$ing', '$Nom_ing', '$cantidad')";
			$resultado=mysqli_query($con, $sql);

			}
			
		}
	}
	
}
else
{
	print "<script>alert(\"Por favor, ingrese otro ingrediente.\");window.location='javascript:window.history.back();';</script>";
}
	if ($resultado==true){

for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["ingred"][$i] != '' && trim($_POST["cantidad"][$i] != '')))
		{
			 $ing = $_POST["ingred"][$i];
			 $cantidad = $_POST["cantidad"][$i];
			 $sql2="SELECT cant_existente FROM ingrediente WHERE cod_ingrediente = $ing";
              $resultado2=mysqli_query($con, $sql2);    

                    while ($linea = mysqli_fetch_array($resultado2)) {
                        $cantidadexistente = $linea["cant_existente"];
                        break;
                        
    }  

   
		}
		$suma = $cantidadexistente + $cantidad;
		if ($cantidadexistente >=80 || $suma>80){
         
         echo "No se pudo actualizar la tabla ingrediente ya que uno o mas ingredientes han superado el limite.";
         //print "<script>alert(\" No se pudo actualizar la tabla ingrediente ya que uno o mas ingredientes han superado el limite.\");window.location='../../Vista/Empleado/ver_inventario.php';</script>";	

		}else{
			 $sql3="UPDATE ingrediente SET cant_existente = $suma WHERE cod_ingrediente = $ing";
             $resultado3=mysqli_query($con, $sql3);
	} 
	}

	print "<script>alert(\"Inventario agregado exitosamente.\");window.location='../../Vista/Empleado/ver_inventario.php';</script>";
}else{
	echo "algo salio mal";
	//print "<script>alert(\"Algo salio mal.\");window.location='inventario.php';</script>";
}


?>
