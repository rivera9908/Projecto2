<?php
if(isset($_POST["envianame"])){
    $nombre=$_POST["nom"];
    $codprod=$_POST["code"];
}else if(isset($_POST["enviaId"])){
    include "com.php";
    $nom=$_POST["nombre"];
    $id=$_POST["id"];
    $fecha=$_POST["fecha"];
    $obj=new Insert();
    $obj->muestraTabla($id, $nom, $fecha);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body{
            background-image: url("img/freasas.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .table{
            width: 400px !important;
            margin: auto !important;
            padding: 10px !important;
            font-size: 25px !important;
            background-color: rgba(207, 205, 201, 0.7);
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        #text, #boton{
            text-align: center;
            font-size: 25px;
            border-radius: 7px 7px;
            margin: auto;
            position: center;
            border-style: none;
            background-color: white;
            font-family: Verdana;
        }

        #boton{
            background-color: rgba(0, 15, 255, 0.5);
            padding: 5px;
            font-size: 20px !important;
        }

        #div{
            margin: auto;
            margin-top: 80px;
        }

        #tDos{
            padding-top: 0px !important;
            margin-top: 0px !important;
        }
    </style>
</head>
<body>
<div id="div">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table class="table">
        <tr>
            <td colspan="2"><label>Digita tu número de identificación para completar la compra!</label></td>
        </tr>
        <tr style="display: none">
            <td colspan="2"><input type="text" name="nombre" value="<?php if(isset($_POST["envianame"])){echo $nombre;} ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" name="id" id="text" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="date" name="fecha" id="text" required></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td><input type="submit" name="enviaId" value="Terminar Compra" id="boton"></td></tr>
    </table>
</form>
<form action="carritocompras.php" method="post">
    <table class="table" id="tDos">
        <tr>
            <td colspan="2"><input type="text" name="nom" value="<?php if(isset($_POST["envianame"])){echo $nombre;} ?>" style="display: none"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" name="code" value="<?php if(isset($_POST["envianame"])){echo $nombre;} ?>" style="display: none"></td>
        </tr>
        <tr>

            <td colspan="2"><input type="submit" name="envianame" value="Volver" id="boton"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>