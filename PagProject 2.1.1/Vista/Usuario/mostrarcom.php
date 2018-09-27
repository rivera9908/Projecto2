<?php
session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
  header("location: ../../index.php?Noseccion");
  }

$nombre="";
	if(isset($_POST["envianame"])){
        $nombre=$_POST["nom"];
    
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Carrito de compras</title>
		<script type="text/javascript" src="js/functions.js"></script>
		<link rel="stylesheet" type="text/css" href="../../Vista/carrito1/css/styles2.css">
		
		
	</head>

	<body>
 		

				<div class="content" align="center">
					<cemter>
					<table border="1px" cellpadding="5px" >
						<thead class="cartHeader" display="off">
						
							<tr>
								<th colspan="9">MIS COMPRAS</th>
							</tr>
							
						</thead>
							<tbody class="cartBody">
							<div>
								<tr>
									
                                    <td><b>Producto</b></td>
                                    <td><b>Precio del Producto</b></td>
                                    <td><b>Cantidad</b></td>
                                    <td><b>Total</b></td>
                                    <td><b>Fecha de compra</b></td>
									
								</tr>
                                <?php 
                                $sql="SELECT * FROM compra WHERE Nom_usu='$nombre'";
                                $resultado=mysqli_query($con,$sql);
                                while($usuario=mysqli_fetch_array($resultado)){ ?> 
                <tr>
                     <td><?php echo $usuario['Nom_pro']; ?></td> 
                     <td>$<?php echo $usuario['Prec_pro']; ?></td> 
                     <td><?php echo $usuario['Cant']; ?></td> 
                     <td>$<?php echo $usuario['Total']; ?></td>
                     <td><?php echo $usuario['Fecha']; ?></td> 

                                </tr>
                                <?php } }?> 
                                <tr>
                    <td colspan="12">
                        <form action="../../Vista/Usuario/inicio.php" method="post">
                            <input type="text" name="nom" value="<?php if(isset($_POST["envianame"]) || isset($_GET["action"])){echo $nombre;} ?>" style="display: none">
                            <center><input type="submit" name="envianame" value="Volver"></center>
                        </form>
                    </td>
                </tr>
</table>
</center>
</body>
<html>
