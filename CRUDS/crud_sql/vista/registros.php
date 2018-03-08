<?php
require_once '../controller/rol_controlador.php';
require_once '../model/rol_model.php';
require_once '../model/conexion.php';

$rol = new Rol();
$model = new RolModel();
$db = database::conectar();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$rol->__SET('Rol',					$_REQUEST['Rol']);
			$rol->__SET('estado_rol',			$_REQUEST['estado_rol']);
			$rol->__SET('Rol2',					$_REQUEST['Rol2']);
			
			$model->actualizar_Rol($rol);
			print "<script>alert(\"Registro Actualizado Exitosamente.\");window.location='registros.php';</script>";
			break;

		case 'registrar':
			$rol->__SET('Rol',					$_REQUEST['Rol']);
			$rol->__SET('estado_rol',			$_REQUEST['estado_rol']);
			
			$model->Registrar_Rol($rol);
		
			print "<script>alert(\"Registro Agregado Exitosamente.\");window.location='registros.php';</script>";
			break;

		case 'eliminar':
			$model->Eliminar_Rol($_REQUEST['Rol']);
			print"<script>alert(\"Registro Eliminado Exitosamente.\");window.location='registros.php'</script>";
			break;

		case 'editar';
			$rol = $model->Obtener_Rol($_REQUEST['Rol']);
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
		<label for="user_login">Rol</label>
		<input type="text" name="Rol" placeholder="Rol" required>

		<br><label for="user_pass">Estado rol</label></br>
		ACTIVO <input type="radio" name="estado_rol" value="1" checked="">
		INACTIVO <input type="radio" name="estado_rol" value="0">

		<br><input type="submit" value= "Guardar" onclick = "this.form.action = '?action=registrar';" />
		</td>	
	</table>		
	</form>

	</div>

	<?php } ?>

	<!-- Formulario Actualizar Registro  -->

	<div id="div_form">

	<?php if ( !empty($_GET['Rol']) &&  !empty($_GET['action']) ){ ?>

	<form action="#" method="post" >

	<!-- LABLE USUARIO FINAL -->
	<!--<laber>rol por modificar: <?php echo $rol->__GET('Rol'); ?></label>-->

	<label> Rol por modificar:</label>

	<br><input type="text" name="Rol" value="<?php echo $rol->__GET('Rol'); ?>" placeholder="ROL" required></br>

	<!--Campo que guarda el nuevo rolpk-->

	<br><input type="text" name="Rol2" id="user_login" value="<?php echo $rol->__GET('Rol'); ?> " placeholder="ROL" required></br>

	<br><label> Estado rol: </label></br>

	<br>ACTIVO <input type="radio" name="estado_rol" value="1" checked="<?php echo ($rol->__GET('estado_rol') == 1)?'checked':''; ?>">

	<br>INACTIVO <input type="radio" name="estado_rol" value="0" checked="<?php echo ($rol->__GET('estado_rol') == 0)?'checked':''; ?>">

	<br><input type="submit" value= "Actualizar" onclick= "this.form.action = '?action=actualizar';"/>

	</form>	
	</div>

	 <?php } 

	 $sqll= "SELECT * FROM rol";
	 $query = $db->query($sqll);

	 if($query->rowCount()>0):?>

	 	<br><h1> Consulta - Registros</h1></br>
	 		<table id="customers" >
	 			<thead>
	 				<tr>
	 					<th>Rol</th>
	 					<th>Estado Rol</th>
	 					<th>Funcion Editar </th>
	 					<th>funcion Eliminar</th>
	 				</tr>
	 			</thead>
	 			

	 <?php foreach($model->Listar_Rol() as $r): ?>
		<tr>
			<td><?php echo $r->__GET('Rol'); ?></td>
			<td><?php
				if($r->__GET('estado_rol')== 1){
					echo "ACTIVO";
				}else{
					echo "INACTIVO";
				}?></td>
				
			<td>
			<a href="?action=editar&Rol=<?php echo $r->Rol; ?>">Editar</a>
			</td>
			
			<td>
			<a href="?action=eliminar&Rol=<?php echo $r->Rol; ?>" onclick="return confirm('¿Esta seguro que quiere eliminar este usuario?')">Eliminar</a>
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