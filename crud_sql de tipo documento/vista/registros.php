<?php
require_once '../controller/rol_controlador.php';
require_once '../model/rol_model.php';
require_once '../model/conexion.php';

$Tipo_doc = new tipo_doc();
$model = new tipo_docModel();
$db = database::conectar();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$Tipo_doc->__SET('Tipo_doc',					$_REQUEST['Tipo_doc']);
			$Tipo_doc->__SET('Estado_tdoc',			$_REQUEST['Estado_tdoc']);
			$Tipo_doc->__SET('Tipo_doc2',					$_REQUEST['Tipo_doc2']);
			
			$model->Actualizar_tipo_de_documento($Tipo_doc);
			print "<script>alert(\"Registro Actualizado Exitosamente.\");window.location='registros.php';</script>";
			break;

		case 'registrar':
			$Tipo_doc->__SET('Tipo_doc',					$_REQUEST['Tipo_doc']);
			$Tipo_doc->__SET('Estado_tdoc',			$_REQUEST['Estado_tdoc']);
			
			$model->Registrar_tipo_de_documento($Tipo_doc);
		
			print "<script>alert(\"Registro Agregado Exitosamente.\");window.location='registros.php';</script>";
			break;

		case 'eliminar':
			$model->Eliminar_tipo_de_documento($_REQUEST['Tipo_doc']);
			print"<script>alert(\"Registro Eliminado Exitosamente.\");window.location='registros.php'</script>";
			break;

		case 'editar';
			$Tipo_doc = $model->Obtener_tipo_de_documento($_REQUEST['Tipo_doc']);
			break;
	}
}		
			
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title> CRUD-MARLON</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
<center>

		<!-- FORMULARIO DE REGISTRO -->
<br><a href="?action=ver&m=1" > Nuevo registro </a><br><br>

	<div id="div_form">
	<?php if( !empty($_GET['m']) && !empty($_GET['action']) ){ ?>

	<form action="#" method="post">
	<table>
		<td>
		<label for="user_login">Tipo de Documento</label>
		<input type="text" name="Tipo_doc" placeholder="Tipo_doc" required>

		<br><label for="user_pass">Estado tipo de documento</label></br>
		ACTIVO <input type="radio" name="Estado_tdoc" value="1" checked="">
		INACTIVO <input type="radio" name="Estado_tdoc" value="0">

		<br><input type="submit" value= "Guardar" onclick = "this.form.action = '?action=registrar';" />
		</td>	
	</table>		
	</form>

	</div>

	<?php } ?>

	<!-- Formulario Actualizar Registro  -->

	<div id="div_form">

	<?php if ( !empty($_GET['Tipo_doc']) &&  !empty($_GET['action']) ){ ?>

	<form action="#" method="post" >

	<!-- LABEL USUARIO FINAL -->
	<!--<laber>rol por modificar: <?php echo $Tipo_doc->__GET('Tipo_doc'); ?></label>-->

	<label> Tipo de documento por modificar:</label>

	<br><input type="text" name="Tipo_doc" value="<?php echo $Tipo_doc->__GET('Tipo_doc'); ?>" placeholder="TIPO DE DOCUMENTO" required></br>

	<!--Campo que guarda el nuevo rolpk-->

	<br><input type="text" name="Tipo_doc2" id="user_login" value="<?php echo $Tipo_doc->__GET('Tipo_doc'); ?> " placeholder="TIPO DE DOCUMENTO" required></br>

	<br><label> Estado del tipo de documento: </label></br>

	<br>ACTIVO <input type="radio" name="Estado_tdoc" value="1" checked="<?php echo ($Tipo_doc->__GET('Estado_tdoc') == 1)?'checked':''; ?>">

	<br>INACTIVO <input type="radio" name="Estado_tdoc" value="0" checked="<?php echo ($Tipo_doc->__GET('Estado_tdoc') == 0)?'checked':''; ?>">

	<br><input type="submit" value= "Actualizar" onclick= "this.form.action = '?action=actualizar';"/>

	</form>	
	</div>

	 <?php } 

	 $sqll= "SELECT * FROM tipo_doc";
	 $query = $db->query($sqll);

	 if($query->rowCount()>0):?>

	 	<br><h1> Consulta - Registros</h1></br>
	 		<table id="customers" >
	 			<thead>
	 				<tr>
	 					<th>tipo de documento</th>
	 					<th>Estado tipo de documento</th>
	 					<th>Funcion Editar </th>
	 					<th>funcion Eliminar</th>
	 				</tr>
	 			</thead>
	 			

	 <?php foreach($model->Listar_tipo_de_documento() as $r): ?>
		<tr>
			<td><?php echo $r->__GET('Tipo_doc'); ?></td>
			<td><?php
				if($r->__GET('Estado_tdoc')== 1){
					echo "ACTIVO";
				}else{
					echo "INACTIVO";
				}?></td>
				
			<td>
			<a href="?action=editar&Tipo_doc=<?php echo $r->Tipo_doc; ?>">Editar</a>
			</td>
			
			<td>
			<a href="?action=eliminar&Tipo_doc=<?php echo $r->Tipo_doc; ?>" onclick="return confirm('¿Esta seguro que quiere eliminar este usuario?')">Eliminar</a>
			</td>
		</tr>
		
	<?php endforeach; ?>
	
		</table>
		
	<?php else:?>
	
		<h4 class="alert alert-danger">Señor Usuario NO se Encuentra en Registros!!!</h4>
		
	<?php endif;?>

	</center>
	</body>
	</html>