<?php 
	include_once('clases/producto2.php');
	include_once('clases/carrito.php');
	$product2 = new Product2();
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
	<link rel="stylesheet" type="text/css" href="css/reset.css">

<style>
        .table{
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
<!--index de Ensaladas-->
<h2>Productos</h2>
<table border="1">
<td bgcolor="#E5DD37"><a href="" style="color: white">Bebidas</a></td>
<td bgcolor="#357BF7"><a href="index.php" style="color: white">Ensaladas</td></a>
<td bgcolor="red"><a href="index3.php" style="color: white">Postres</td></a>
</table><br>
<a href='../index.php'><input type="button" value="Volver" class="btn"></a>
 <form action="buscador.php" method="POST">
                <input type="text" name="buscador" placeholder="Buscar Productos...">
                <input type="submit" name="buscar" value="Buscar">
              </form><br>

<section>
    <div class="responsive">
        <div  class="gallery" >
            <?php $car=$product2->get_products();
            foreach ($car as $key):?>
                
                   
 
                    <table  class="table">
                        
                        <tr>
                            <td colspan="2"><a><img src="<?php echo $key["imagen"]; ?>" width="40px" height="40px"><a></td>
                        </tr>
                        
                        <tr >
                           <td colspan="2"><center><label style="color: black"><?php echo $key["Nombre"] ?></label></center></td>
                        </tr>
                        <tr style="display: none; ">
                            <td colspan="2" style="color: black"><center><input type="text" name="code" value="<?php echo $key["Codigo"]; ?>"></center></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><label style="color: black"><?php echo '$'; echo $key["Precio"] ?></label></center></td>
                        </tr>

                         <tr>
                  <form action="verproducto.php" method="POST">            
             <td style="display: none"><center><input type="text" name="code" value="<?php echo $key["Codigo"]; ?>"></center></td>
        	<td><center><input type="submit" name="action" value="Ver" class="btn btn-outline-secondary" id="boton" ></center></td>
        	 	
                        </form>
                        </tr>
                        
                    </table>
                    
                
            <?php endforeach; ?>
        </div>
    </div>
    </center>
</section>
<table border="1">
	
</body>
</html>