<?php
require_once '../Controlador/ingrediente.model.php';
require_once '../Modelo/ingrediente.entidad.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();

?>

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
                                <button type="submit"  style="border: 7px; font-family:Georgia, 'Times New Roman', Times, serif;"class="pure-button pure-button-primary" >Guardar</button>
                            </td>
                        <tr>
                   
                          
            <td colspan="2"><a href="Listaringredientes.php" style="color:#000"><p>Tabla</p></a></td>
            </table>
            </body>
</html>