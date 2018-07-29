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
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>




	<div class="content">
	
		
			<thead class="productsHeader">
				
				
			</thead>
			<tbody class="productsBody">
				<?=$product->get_products();?>
				<tr>
<th colspan="12"><a href="carritocompras.php">ver factura</a></th>
</tr>
				
			</tbody>
		
		</table>
	</div>
</body>
</html>