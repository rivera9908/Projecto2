<?php 
	include_once('clases/producto.php');
	include_once('clases/carrito.php');
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		switch ($_GET['action']){
			case 'add':
				$cart->add_item($_GET['code'], $_GET['amount']);
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
	<link rel="stylesheet" type="text/css" href="css/stiloingrediente.css">
</head>
<body>
<form action="compras.php" method="post" enctype="multipart/form-data">
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
				<tr>
					<th>Codigo</th>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Opcion</th>
				</tr>
				<?=$cart->get_items();
				?>
				
<tr>
<th colspan="12"><input type="submit" name="carrito" value="COMPRAR"><br>
</tr>
</tbody>
		</table>
		<br><br>
		
<?php

$destino="uchijasasuke20@gmail.com";
$cart->get_total_payment();
$cart->get_total_items();
mail($destino,"contacto",$cart);
$comentario='<h1>Muchas gracias por comprar en mi carrito de compras</h1>'

?>










