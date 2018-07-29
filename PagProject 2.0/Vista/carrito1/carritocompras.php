<?php

	include_once('clases/producto.php');
	include_once('clases/carrito.php');
    if(isset($_POST["envianame"])){
        $nombre=$_POST["nom"];
    }
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		//header ("carritocompras.php");
		switch ($_GET['action']){
			case 'remove' || 'Eliminar':
			    $nombre=$_GET["nombre"];
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
		
		
	</head>

	<body>
 		

				<div class="content">
					<table border="1px" cellpadding="5px" width="100%">
						<thead class="cartHeader" display="off">
						
							<tr>
								<th colspan="9">MI CARRITO DE COMPRAS</th>
							</tr>
							<tr>
								<th colspan="4">Total pagar: <?=$cart->get_total_payment();?></th>
								<th colspan="4">Total items: <?=$cart->get_total_items();?></th>
							</tr>
						</thead>
							<tbody class="cartBody">
							<div>
								<tr>
									<th>Codigo</th>
									<th>Producto</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Subtotal</th>
									<th colspan="4">Opcion</th>
								</tr>
                                <?php $car=$cart->get_items();
                                foreach ($car as $k):?>
                                <tr>
                                    <td><?php echo $k["code"]; ?></td>
                                    <td><?php echo $k["product"]; ?></td>
                                    <td><?php echo $k["price"]; ?></td>
                                    <td><?php echo $k["amount"]; ?></td>
                                    <td><?php echo $k["subtotal"]; ?></td>
                                    <td>
                                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
                                            <input type="text" name="code" value="<?php echo $k["code"]; ?>" style="display: none">
                                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" style="display: none">
                                            <input type="submit" name="action" value="Borrar">
                                        </form></td>
                                </tr>
                                <?php endforeach; ?>
				
				<tr>
					
                    <td colspan="12">
                        <form action="pideid.php" method="post">
                            <input type="text" name="nom" value="<?php if(isset($_POST["envianame"]) || isset($_GET["action"])){echo $nombre;} ?>" style="display: none">
                             <input type="text" name="code" value="<?php if(isset($_POST["envianame"]) || isset($_GET["action"])){echo $nombre;} ?>" style="display: none">
                           <center> <input type="submit" name="envianame" value="Comprar"></center>
                        </form>
                     
                    </td>
                </tr>
				<tr>
                    <td colspan="12">
                        <form action="index.php" method="post">
                            <input type="text" name="nom" value="<?php if(isset($_POST["envianame"]) || isset($_GET["action"])){echo $nombre;} ?>" style="display: none">
                            <center><input type="submit" name="envianame" value="Volver"></center>
                        </form>
                    </td>
                </tr>

							</div>
							</tbody>
					</table>
		<br><br>

	</body>
</html>