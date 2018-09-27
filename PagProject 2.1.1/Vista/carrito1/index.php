<?php

	include_once('clases/producto.php');
	include_once('clases/carrito.php');
	$nombre="";
	if(isset($_POST["envianame"])){
        $nombre=$_POST["nom"];
    }
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		switch ($_GET['action']){
			case 'add' || 'Comprar':
			    $nombre=$_GET["nombre"];
				$cart->add_item($_GET['code'], $_GET['cantidad']);
			    break;
			case 'remove':
				$cart->remove_item($_GET['code']);
				break;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carrito de compras</title>
	<script type="text/javascript" src="js/functions.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">

    <style>
        #table{
            width: 22%;
            margin: 15px;
            border: 1px solid aqua;
            float: left !important;
            list-style: none;
        
        
    
        }
         #boton{
            width: 10%;
            height: 10%;
            float:none;
    text-align:center;
        }


        .btn{
            display: inline-block !important;
            width: 100px !important;
            float: right !important;
        }



        
    </style>

</head>
<body >
<center>

<h2>Productos</h2>


<form action="carritocompras.php" method="post">
    <table class="btn" align="center">
        <tr style="display: none">
            <td><input type="text" name="nom" value="<?php if(isset($_POST["envianame"]) || isset($_GET["action"])){echo $nombre;} ?>" class="btn" ></td>
        </tr>
        <tr>
            <td><input type="submit" name="envianame" value="Compras" class="btn"></td>
        
        
            <td><a href='../Usuario/inicio.php'><input type="button" value="Volver" class="btn"></a></td>
        </tr>
    </table>
</form>

    <br>
    


<section>
    <div class="responsive">
        <div  class="gallery" >
            <?php $car=$product->get_products();
            foreach ($car as $key):?>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
                   
 
                    <table  id="table">
                        
                        <tr>
                            <td colspan="2"><a><img src="img/<?php echo $key['img_pro']; ?>" width="40px" height="40px"><a></td>
                        </tr>
                        <tr >
                            <td colspan="2"><center><label style="color: black"><?php echo $key["Categoriadelproducto_Nom_cat"]; ?></label></center></td>
                        </tr>
                        <tr >
                           <td colspan="2"><center><label style="color: black"><?php echo $key["Nom_pro"] ?></label></center></td>
                        </tr>
                        <tr style="display: none; ">
                            <td colspan="2" style="color: black"><center><input type="text" name="code" value="<?php echo $key["cod_producto"]; ?>"></center></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><label style="color: black">$<?php echo $key["Prec_pro"] ?></label></center></td>
                        </tr>
                        <tr style="display: none;">
                            <td colspan="2" style="color: black"><center><input type="text" name="nombre" value="<?php echo $nombre; ?>"></center></td>
                        </tr>
                        <tr>
                            <td><input type="number" name="cantidad" value="1" min="1" max="10" style="width: 130px">
                            <input type="submit" name="action" value="Comprar"></td>
                        </tr>
                    </table>
                    
                </form>
            <?php endforeach; ?>
        </div>
    </div>
    </center>
</section>
	
</body>
</html>

<?php
/*CONCAT (' ¡Se modifico la cantidad existente de un ingrediente!', ' el codigo del ingrediente es ', ' " ', OLD.cod_ingrediente, '",' , 
' su nombre es', ' " ', OLD.Nom_ing, ' ", ',
        ' y la cantidad existente anterior de este ingrediente era  ', ' " ', OLD.cant_existente, '  " ', 'pero ahora la cantidad existente actual de ingrediente es ', ' "', NEW.cant_existente, ' " '), NOW())*/?>