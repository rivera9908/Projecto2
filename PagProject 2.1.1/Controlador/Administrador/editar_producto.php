<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Producto</title>
	<link rel="stylesheet" href="../../Vista/Administrador/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(../../Vista/Administrador/img/fondo.jpg);
		}
		
	</style>
</head>
<body>
	<?php
		require("../../Modelo/conexion.php");

		if (isset($_REQUEST['eliminar_ing'])){
			$id_ing = $_GET['id_ing'];
			$id_prod = $_GET['id_prod'];
			$sqle = "DELETE FROM producto_has_ingrediente WHERE Producto_cod_producto = $id_prod AND Ingrediente_cod_ingrediente = $id_ing";

			mysqli_query($con, $sqle);
			print "<script>alert(\"Ingrediente eliminado exitosamente.\");</script>";
			print "<script>location.reload();'</script>";
			
		}

		if (isset($_REQUEST['actualizar_prod'])){
			$id = $_POST['id_produ'];
			$nom = $_POST['nombre'];
			$prec = $_POST['precio'];
			$desc = $_POST['desc'];
			$img = $_FILES['Foto_prod']['name'];
			$estado = $_POST['estado_pro'];
			$categ = $_POST['categoria'];


			if($img == ""){
				$img = $_POST['Foto_prod2'];
			}else{
				$Ruta_imagen = "../../Vista/Administrador/img/";
            	$Ruta_imagen = $Ruta_imagen . basename($_FILES['Foto_prod']['name']);
            	move_uploaded_file($_FILES['Foto_prod']['tmp_name'], $Ruta_imagen);
			}
			
			if ($prec <1 ) {

    	print "<script>alert(\"Por favor inserte numeros positivos \");window.location='../../Vista/Administrador/ver_productos.php';</script>";
    	
    }else{

    	$sqli = "UPDATE producto SET Nom_pro = '$nom', Prec_pro = '$prec', Desc_pro = '$desc', img_pro = '$img', estado_pro = $estado, Categoriadelproducto_Nom_cat = '$categ' WHERE cod_producto = $id";
			mysqli_query($con, $sqli);

			if(isset($_POST['ingred'])){ //En caso de que se agreguen nuevos ingredientes al producto
				$number = count($_POST["ingred"]);
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

						$sqler ="INSERT INTO producto_has_ingrediente (Producto_cod_producto, Nom_pro, Ingrediente_cod_ingrediente, Nom_ing, cantidad)VALUES('$id', '$nom', '$ing', '$Nom_ing', '$cantidad')";
						mysqli_query($con, $sqler);
					}
				}

    }

			
			}

			print "<script>alert('Producto actualizado exitosamente.');window.location='../../Vista/Administrador/ver_productos.php';</script>";
            
		}

			

		//------------------------FORMULARIO-------------------------------------//

			$codd = $_GET['id_prod'];
		  	$sqll = "SELECT * FROM producto WHERE cod_producto = $codd";
		  	foreach (mysqli_query($con, $sqll) as $row) { 

		  		 ?>
		  		 <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    
</script>	
		  		
				<h2 align="center">Editar Producto</h2><br />
				<form enctype="multipart/form-data" action="#" method="post" style="margin: auto; max-width: 55%;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="nombre" value="<?php echo $row['Nom_pro']; ?>" class="form-control name_list" onkeypress="return soloLetras(event)" required>
									<input type="text" name="id_produ" value="<?php echo $row['cod_producto']; ?>" style="display: none;" ></td>
							</tr>
							<tr>
								<td>Precio $</td>
								<td><input type="text" name="precio" value="<?php echo $row['Prec_pro']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Descripcion</td>
								<td><input type="text" name="desc" value="<?php echo $row['Desc_pro']; ?>" class="form-control name_list" onkeypress="return soloLetras(event)" required></td>
							</tr>
							<tr>
								<td>Foto</td>
								<td><input type="file" name="Foto_prod">
								<input type="text" name="Foto_prod2" value="<?php echo $row['img_pro']; ?>" style="display: none;" ></td>
							</tr>
							<tr>
								<td>Categoria</td>
								<td>
								<select class="form-control" name="categoria" >
                                    <?php
                                    $sqli = "SELECT * from categoriadelproducto";
                                    foreach (mysqli_query($con, $sqli) as $row1) {
                                        echo '<option value="' . $row1['Nom_cat'] . '">' . $row1['Nom_cat'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>
							<tr>
								<td>Estado</td>
								<td>
									<select class="form-control" name="estado_pro">
									  <option value="1" <?php if($row['estado_pro'] == 1){ echo "selected"; }?> >Activo</option>
									  <option value="0">Inactivo</option>
									</select>
								</td>
							</tr>
							<tr class="success">
								<td>Ingredientes</td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Añadir Ingrediente</button></td>
								
							</tr>	
                                    <?php 
                                    $sql22 = "SELECT t1.cod_ingrediente, t1.Nom_ing  from ingrediente as t1 JOIN producto_has_ingrediente as t2 on (t1.cod_ingrediente = t2.Ingrediente_cod_ingrediente) WHERE t2.Producto_cod_producto = $codd";
                                    foreach (mysqli_query($con, $sql22) as $row2) { ?>
                                    <tr>   
                                    <td>
                                    	<?php echo $row2['Nom_ing']; ?>
                                	</td>
                                	<td>
                                		<form action="#" method="get">
								  			<input type="text" name="id_ing" value="<?php echo $row2['cod_ingrediente']; ?>" style="display: none;" >
								  			<input type="text" name="id_prod" value="<?php echo $row['cod_producto']; ?>" style="display: none;" >
								  			<input type="submit" name="eliminar_ing" class="btn btn-warning" value="Eliminar Ingrediente">
								  		</form>
                                	</td>

                                	</tr>
                                    <?php } ?>
               
							
						</table>
						<input type="submit" name="actualizar_prod" class="btn btn-primary" value="Finalizar y Actualizar">
						
						<a href="../../Vista/Administrador/ver_productos.php" class="btn btn-danger" style="color: white;">Cancelar</a>
					</div>
				</form>
				
				<?php } ?>

</body>
</html>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td></td><td><select class="form-control" name="ingred[]" ><?php
                                    $sql = "SELECT * from ingrediente";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['Nom_ing'] . '</option>';
                                        ;
                                    }
                                    ?></select></td><td><input type="number" name="cantidad[]" value="1" min="1" max="30" class="form-control name_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
});
</script>