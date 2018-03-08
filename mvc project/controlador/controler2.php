<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php
require_once '/ingredientes.entidad.php';
include_once 'Modelo/ingredientes.model.php';

// Logica
$alm = new Ingredientes();
$model = new IngredientesModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('Codigo_ing',              $_REQUEST['Codigo_ing']);
            $alm->__SET('Nom_ing',          $_REQUEST['Nom_ing']);
            $alm->__SET('Desc_ing',        $_REQUEST['Desc_ing']);
            $alm->__SET('Valor_unit',            $_REQUEST['Valor_unit']);
            $alm->__SET('Cant', $_REQUEST['Cant']);

            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('Nom_ing',          $_REQUEST['Nom_ing']);
            $alm->__SET('Desc_ing',        $_REQUEST['Desc_ing']);
            $alm->__SET('Valor_unit',            $_REQUEST['Valor_unit']);
            $alm->__SET('Cant', $_REQUEST['Cant']);

            $model->Registrar($alm);
            header('Location: mensaje1.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['Codigo_ing']);
            header('Location: mensaje3.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['Codigo_ing']);
            break;
    }
}

?>




</body>
</html>
