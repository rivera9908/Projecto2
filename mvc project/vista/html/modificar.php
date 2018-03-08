


<?php
require_once '../../controlador/alumno.model.php';
require_once '../../Modelo/alumno.entidad.php';
include_once 'header.php';
include_once 'menula.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('Cod_ingrediente',              $_REQUEST['Cod_ingrediente']);
            $alm->__SET('Nom_ing',          $_REQUEST['Nom_ing']);
            $alm->__SET('Valor_ing',        $_REQUEST['Valor_ing']);
            $alm->__SET('Can_existente',            $_REQUEST['Can_existente']);
            $alm->__SET('stock_max', $_REQUEST['stock_max']);
			$alm->__SET('stock_min', $_REQUEST['stock_min']);
			$alm->__SET('estado_ING', $_REQUEST['estado_ING']);
			$alm->__SET('Peso_ing', $_REQUEST['Peso_ing']);
			$alm->__SET('Proveedor_idproveedor', $_REQUEST['Proveedor_idproveedor']);

            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('Cod_ingrediente',          $_REQUEST['Cod_ingrediente']);
            $alm->__SET('Nom_ing',        $_REQUEST['Nom_ing']);
            $alm->__SET('Valor_ing',            $_REQUEST['Valor_ing']);
            $alm->__SET('Can_existente', $_REQUEST['Can_existente']);
			$alm->__SET('stock_max', $_REQUEST['stock_max']);
			$alm->__SET('stock_min', $_REQUEST['stock_min']);
			$alm->__SET('estado_ING', $_REQUEST['estado_ING']);
			$alm->__SET('Peso_ing', $_REQUEST['Peso_ing']);
			$alm->__SET('Proveedor_idproveedor', $_REQUEST['Proveedor_idproveedor']);

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['Cod_ingrediente']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['Cod_ingrediente']);
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fruteria el bosque</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="vista/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">





<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Bienvenido, FRUTERIA EL BOSQUE</h3>
</div>
<div class="panel-body">
<p>DISFRUTE SU ESTADIA EN NUESTRA PAGINA... </p>
<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center">
                
                <form action="?action=<?php echo $alm->Cod_ingrediente > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                <table >
                <tr>
                	<th >Codigo Ingrediente</th>
                    <td><input type="text" name="Cod_ingrediente" value="<?php echo $alm->__GET('Cod_ingrediente'); ?>" /></td>
                    </tr>
                    
                    
                        <tr>
                            <th >Nombre Ingrediente</th>
                            <td><input type="text" name="Nom_ing" value="<?php echo $alm->__GET('Nom_ing'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Valor ingrediente</th>
                            <td><input type="number" name="Valor_ing" value="<?php echo $alm->__GET('Valor_ing'); ?>"  /></td>
                        </tr>
                        </tr>
                        <tr>
                            <th >Cantidad existente</th>
                            <td><input type="number" name="Can_existente" value="<?php echo $alm->__GET('Can_existente'); ?>"  /></td>
                        </tr>
                        </tr>
                        <tr>
                            <th >Stock Máximo</th>
                            <td><input type="number" name="stock_max" value="<?php echo $alm->__GET('stock_max'); ?>"  /></td>
                        </tr>
                        </tr>
                        <tr>
                            <th >Stock Mínimo</th>
                            <td><input type="number" name="stock_min" value="<?php echo $alm->__GET('stock_min'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Estado</th>
                            <td>
                                <select name="estado_ING" >
                                    <option value="0" <?php echo $alm->__GET('estado_ING') == 0 ? 'selected' : ''; ?>>INACTIVO</option>
                                    <option value="1" <?php echo $alm->__GET('estado_ING') == 1 ? 'selected' : ''; ?>>ACTIVO</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                   
                            <th >Peso Ingrediente</th>
                            <td><input type="number" name="Peso_ing" value="<?php echo $alm->__GET('Peso_ing'); ?>"  /></td>
                        </tr>
                        
                        <tr>
                   
                            <th >Proveedor id</th>
                            <td><input type="number" name="Proveedor_idproveedor" value="<?php echo $alm->__GET('Proveedor_idproveedor'); ?>"  /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >Codido Ingrediente</th>
                            <th >Nombre Ingrediente</th>
                            <th >Valor Ingrediente</th>
                            <th >Cantidad Existente</th>
                            <th>Stock Máximo</th>
                            <th>Stock Minimo</th>
                            <th>Estado Ingrediente</th>
                            <th>Peso Ingrediente</th>
                            <th>Id Proveedor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Cod_ingrediente'); ?></td>
                            <td><?php echo $r->__GET('Nom_ing'); ?></td>
                            
                            <td><?php echo $r->__GET('Valor_ing'); ?></td>
                             <td><?php echo $r->__GET('Can_existente'); ?></td>
                              <td><?php echo $r->__GET('stock_max'); ?></td>
                               <td><?php echo $r->__GET('stock_min'); ?></td>
                               <td><?php echo $r->__GET('estado_ING') == 0 ? 'INACTIVO' : 'ACTIVO'; ?></td>
                                <td><?php echo $r->__GET('Peso_ing'); ?></td>
                                 <td><?php echo $r->__GET('Proveedor_idproveedor'); ?></td>
                            <td>
                                <a href="?action=editar&Cod_ingrediente=<?php echo $r->Cod_ingrediente; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&Cod_ingrediente=<?php echo $r->Cod_ingrediente; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
          </span></div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>
    </body>
</html>



