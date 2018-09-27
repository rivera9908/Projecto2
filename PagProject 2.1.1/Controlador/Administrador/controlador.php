<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$number = count($_POST["ingred"]);
$Nom_pro = $_POST["nombre"];
$Prec_pro = $_POST["precio"];
$Desc_pro = $_POST["desc"];
$img_pro = $_FILES['Foto_prod']['name'];
$categ = $_POST["categoria"];
$cantidad = $_POST["cantidad"];


if($number > 1)
{

	$sql33="SELECT Nom_pro,Desc_pro,img_pro FROM producto WHERE Nom_pro='$Nom_pro'";

    $result2=mysqli_query($con,$sql33);
    $contar=mysqli_num_rows($result2);
   
    if($contar==1){
   
    print "<script>alert(\"ALGUNOS DATOS QUE ESTA INGRESANDO YA SE ENCUENTRA EN EL SISTEMA, PORFAVOR INTENTELO DE NUEVO\");window.location='../../Vista/Administrador/ver_productos.php';</script>";
    	
    
	}else{

		if ($Prec_pro <1 ) {

    	print "<script>alert(\"Por favor inserte numeros positivos \");window.location='../../Vista/Administrador/ver_productos.php';</script>";
    	
    }else{
     
     $Ruta_imagen = "../../Vista/Administrador/img/";
    $Ruta_imagen = $Ruta_imagen . basename($_FILES['Foto_prod']['name']);
    move_uploaded_file($_FILES['Foto_prod']['tmp_name'], $Ruta_imagen);
	$sql1 = "INSERT INTO PRODUCTO (Nom_pro, Prec_pro, Desc_pro, img_pro, estado_pro, fecha_ingreso, Categoriadelproducto_Nom_cat) VALUES ('$Nom_pro',$Prec_pro,'$Desc_pro','$img_pro',1,NOW(),'$categ')";
	mysqli_query($con, $sql1);


	
	$id = $con->insert_id;

	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["ingred"][$i] != '' && trim($_POST["cantidad"][$i] != '')))
		{
			
			
			$ing = $_POST["ingred"][$i];
			$cantidad = $_POST["cantidad"][$i];
			$sql2="SELECT * FROM ingrediente WHERE cod_ingrediente= '$ing'";
			$resultado=mysqli_query($con, $sql2);
			while ($row = mysqli_fetch_array($resultado)) {

				$Nom_ing = $row['Nom_ing'];
				break;
				
			}

			$sql ="INSERT INTO producto_has_Ingrediente (Producto_cod_producto, Nom_pro, Ingrediente_cod_ingrediente, Nom_ing, cantidad)VALUES('$id', '$Nom_pro', '$ing', '$Nom_ing', '$cantidad')";
			mysqli_query($con, $sql);
		}
	}



    }
	}

	print "<script>alert(\"Producto agregado exitosamente.\");window.location='../../Vista/Administrador/ver_productos.php';</script>";
}
else
{
	print "<script>alert(\"Por favor, ingrese otro ingrediente.\");window.location='javascript:window.history.back();';</script>";
}

?>