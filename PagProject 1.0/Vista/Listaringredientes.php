<html>
<title>Documento sin título</title>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="tabla.css"/>
</head>
<body background="img/ejemplo.jpg">




<?php
require_once '../Controlador/ingrediente.model.php';
require_once '../Modelo/ingrediente.entidad.php';
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
            header('Location: Listaringredientes.php');
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
            header('Location: ingrediente.php?registrocorrect');
    
            
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['Cod_ingrediente']);
            header('Location: Listaringredientes.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['Cod_ingrediente']);
            break;
    }
}

?>


<center><br/><br/><br/>
<table border="2" style="background-color:#999">
<tbody>

        
                    <thead>
                    <tr>
<th colspan="12"><a href="ingrediente.php">nuevo</a></th>
</tr>
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
                            <th colspan="2">Operaciones</th>
                        </tr>
                    </thead>
                    </tbody>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Cod_ingrediente'); ?></td>
                            <td><?php echo $r->__GET('Nom_ing'); ?></td>
                            
                            <td><?php echo  '$'.$r->__GET('Valor_ing'); ?></td>
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
                    <?php 
                    endforeach;
                     ?>
                </table>    
                </thead> 
                <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="Administrador/css/stiloingrediente.css">
 <title>Fruteria el bosque</title>
<meta charset="utf-8">


</head>
<body>
<div class="container">





<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">FRUTERIA EL BOSQUE</h3>
</div>

<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center">


                
                <form action="?action=<?php echo $alm->Cod_ingrediente> 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                <table >
                <tr>
                    <th >Codigo Ingrediente</th>
                    <td><input name="Cod_ingrediente" type="text" id="imp1"  style="border: 7px;" value="<?php echo $alm->__GET('Cod_ingrediente'); ?>" /></td>
                    </tr>
                    
                    
                        <tr>
                            <th >Nombre Ingrediente</th>
                            <td><input name="Nom_ing" type="text" id="imp1"  style="border: 7px;" value="<?php echo $alm->__GET('Nom_ing'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Valor ingrediente</th>
                            <td><input type="text" name="Valor_ing"  style="border: 7px;"  id="imp1" value="<?php echo $alm->__GET('Valor_ing'); ?>"  /></td>
                        </tr>
                        </tr>
                        <tr>
                            <th  >Cantidad existente</th>
                            <td><input name="Can_existente" type="text" id="inp1"  style="border: 7px;" id="imp1" value="<?php echo $alm->__GET('Can_existente'); ?>"  /></td>
                        </tr>
                        </tr>
                        <tr>
                            <th >Stock Máximo</th>
                            <td><input type="text"  style="border: 7px;"name="stock_max" id="imp1" value="<?php echo $alm->__GET('stock_max'); ?>"  /></td>
                        </tr>
                        </tr>
                        <tr>
                            <th >Stock Mínimo</th>
                            <td><input type="text" style="border: 7px;"  name="stock_min" id="imp1" value="<?php echo $alm->__GET('stock_min'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Estado</th>
                            <td>
                                <select name="estado_ING" id="imp1" style="border: 7px;" >
                                    <option value="0" <?php echo $alm->__GET('estado_ING') == 0 ? 'selected' : ''; ?>>INACTIVO</option>
                                    <option value="1" <?php echo $alm->__GET('estado_ING') == 1 ? 'selected' : ''; ?>>ACTIVO</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                   
                            <th >Peso Ingrediente</th>
                            <td><input type="text" name="Peso_ing"  style="border: 7px;" value="<?php echo $alm->__GET('Peso_ing'); ?>"  /></td>
                        </tr>
                        
                        <tr>
                   
                            <th >Proveedor id</th>
                            <td><input type="text"  style="border: 7px;" name="Proveedor_idproveedor"   value="<?php echo $alm->__GET('Proveedor_idproveedor'); ?>"  /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="padding:20px ; ">
                                <button type="submit"  style="border: 7px; font-family:Georgia, 'Times New Roman', Times, serif;"class="pure-button pure-button-primary" >Actualizar</button>
                            </td>
                        <tr>
                   
                          
            <td colspan="2"><a href="Administrador/inicio_administrador.php" style="color:#000"><p>volver al inicio</p></a></td>
            
                           
                        </tr>
                        </table>
              






</body>
</html>