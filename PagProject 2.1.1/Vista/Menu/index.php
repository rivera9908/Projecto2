<?php 

require "../../Modelo/conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carrito de compras</title>
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
<td bgcolor="#E5DD37"><a href="index2.php" style="color: white">Bebidas</a></td>
<td bgcolor="#357BF7"><a href="" style="color: white">Ensaladas</td></a>
<td bgcolor="red"><a href="index3.php" style="color: white">Postres</td></a>
</table><br>
<a href='../../index.php'><input type="button" value="Volver" class="btn"></a>
 <form action="buscador.php" method="POST">
                <input type="text" name="buscador" placeholder="Buscar Productos...">
                <input type="submit" name="buscar" value="Buscar">

              </form>

<section>
    <div class="responsive">
        <div  class="gallery" >
            <?php $sql="SELECT  * FROM producto WHERE Categoriadelproducto_Nom_cat='Ensaladas'";
            $resultado=mysqli_query($con, $sql);
            while ($key = mysqli_fetch_array($resultado)) { ?>

                    <table  class="table">
                        
                        <tr>
                            <td colspan="2"><a><img src="img/<?php echo $key['img_pro']; ?>" width="40px" height="40px"><a></td>
                        </tr>
                       
                        <tr >
                           <td colspan="2"><center><label style="color: black"><?php echo $key["Nom_pro"] ?></label></center></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><center><label style="color: black"><?php echo '$'; echo $key["Prec_pro"] ?></label></center></td>
                        </tr>
                       
                         <tr>
                  <form action="verproducto.php" method="POST">            
             <td style="display: none"><center><input type="text" name="code" value="<?php echo $key["cod_producto"]; ?>"></center></td>
        	<td><center><input type="submit" name="action" value="Ver" class="btn btn-outline-secondary" id="boton" ></center></td>
        	 	
                        </form>
                        </tr>
                        
                    </table>
                    
                
            <?php } ?>
        </div>
        
    </div>
    </center>

</section>

<table border="1">
	
</body>
</html>