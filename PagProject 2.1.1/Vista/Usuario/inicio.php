<?php


session_start();

require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../index.php?Noseccion");
	}else{
   
  }

  $nombre=$_SESSION["Nom_usu"];
?>
<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="UTF-8">

    <title>Fruteria del bosque</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="../css/hover.css">
<style>

          
          #boton{
              font-size: 15px !important;
              color: white !important;
          }

          #boton2{

            font-size: 17px !important;
            font-family: arial;
            color: black !important;
            width: 100%;
            height: 35px;

          }
        </style>
        <script type="text/javascript">
         

  function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no puede volver atras";}
}
</script>
  </head>

  <body onload="deshabilitaRetroceso()">
    <center>


    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
      <div class="container">
        <a href="" class="navbar-brand" style="color:white">

         <b> Fruteria</b>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="" class="nav-link" style="color:white"><b>Inicio</b></a>
            </li>
            <li class="nav-item">
              <a href="#info-section" class="nav-link" style="color:white"><b>Menu</b></a>
            </li>
            <li class="nav-item">
              <a href="#tienda-section" class="nav-link" style="color:white"><b>Tienda</b></a>
            </li>
            <li class="nav-item">
              <a href="contactos/index.php" class="nav-link" style="color:white"><b>Contactos</b></a>
        </div>
      </div>
    </nav>
 
    <!-- HOME -->
    <header id="home-section">
      <div class="dark-overlay">
        <div class="home-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 d-none d-sm-block">
                <h1 class="display-4" align="left"> <strong>Bienvenido</strong> </h1>

                <!-- check -->
                <div class="d-flex flex-row">
                 
                  <div class="p-4  align-self-auto">
                  
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                    ¡Conozca nuestro menu de ensaladas de frutas!
                  </div>
                </div>
                <!-- check -->
                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                   ¡Apoyanos dejandonos un comentario de que opinas de la fruteria!
                  </div>
                </div>
                <!-- check -->
                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                  
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                  ¡Registrate y disfruta los privilegios que te ofrece nuestro negocio!
                   </div>
                </div>

              </div>
              <!-- SECOND COLUMN -->
                <div class="col-lg-4">
                <div class="card text-center" style="background-color: #c73443" >
                  <div class="card-body">
                    <h3>
                    <?php 
                    
                    echo "Bienvenido Cliente";
                    echo "<br>";
                    echo $_SESSION['Nom_usu']; ?>
                    </h3>
                    
                    <p></p>
                    <div class="form-group">
                    <table class="" style="" align="center" width="250">
                     <form action="../../Modelo/cerrar_sesion.php" method="POST">
                    
                    <input type="submit" name="cerrar_sesion" value="Cerrar Sesion">
</form>
</table>
                    
                  </div>
                </div>
              </div>
    </header>
   
                             

    <!-- INFO HEAD -->
    <section class="info-head-section bg-danger">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="p-5">
              <h1 class="display-4">INFORMACION</h1>
              <p class="lead" >Ahora que ya eres parte de nuestro negocio dejanos saber tu opinion por medio de este
              enlace que te dejamos aqui abajo</p>
              <a href="opinion.php" class="btn btn-outline-secondary" style="color:white">Dejar opinion </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info-section bg-light text-muted py-5" id="info-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <a href ="Menu/index.php"><h3 ><button class=" btn btn-outline-secondary" style="color:black; width: 100%; height: 50%"><b>PRODUCTOS</b></button></h3></a>
          <table align="center" class="table1">
          <tr>
          	
<div class="slider">
      <ul>
      <li><img src="img/slider.jpg" width="550" height="450" alt="" ></li>
      <li><img src="img/slider2.jpg" width="550" height="450" alt=""></li>
      <li><img src="img/slider3.jpg" width="550" height="450" alt=""></li>
      <li><img src="img/slider4.jpg" width="550" height="450" alt=""></li>
      </ul>
      </div>
          

          </table>
           </div>
          <div class="col-md-6">
            <form class="botonf" action="mostrarcom.php" method="post" >
                    <input type="text" name="nom" value="<?php echo $nombre; ?>" style="display: none; text-align: auto; color: black" >
                    <input type="submit" name="envianame" value="MIS COMPRAS" class="btn btn-outline-secondary" style="font-weight: bold;" id="boton2">
                    </form>
            <p style="color: black">Aqui podras encontrar nuestros productos con los cuales podras conocer su precio, descripcion
            e incluso podras darnos tu apoyo con tu opinion siempre y cuando hayas iniciado sesion</p>
            <!-- check -->
             <div class="zoomout">
  

   <img src="../Administrador/img/ensaladas/especial.png" width="250" height="150" VSPACE="10" >
    <img src="../Administrador/img/postres/bananasplit.png" width="250" height="150" VSPACE="10" >
            <!-- check -->
          <img src="../Administrador/img/postres/brownie-con-helado.png" width="250" height="150" VSPACE="10" >
          <img src="../Administrador/img/postres/fresas-con-helado.png" width="250" height="150" VSPACE="10">
            </div>
    
            <!-- check -->
            
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- HEAD SECTION -->
    <section class="tienda-head-section bg-danger">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="p-5">
              <h1 class="display-4">¿DESEAS COMPRAR PRODUCTOS?</h1>
              <p class="lead">Aqui te dejamos en enlace para que hagas tus compras </p>
                <div class="boton">
                <form class="botonf" action="../carrito1/index.php" method="post">
                   
                    <input type="text" name="nom" value="<?php echo $nombre; ?>" style="display: none; " >
                    <input type="submit" name="envianame" value="Carrito de compras" class="btn btn-outline-secondary" id="boton" align="center">
                    
            </div>
          </div>
        </div>
      </div>
    </div>
      
      </form>
    </section>

    <section class="info-section bg-light text-muted py-5" id="tienda-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 style="color: black">Tienda</h3>
            <p style="color: black">Al comprar algunos productos ten en cuenta
            las siguientes condiciones:</p>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end" style="color: black">
                Podras ver las compras que has hecho temporalmente 
              </div>
            </div>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end" style="color: black">
                Apenas hagas una compra tu informacion quedara almacenada y visible para el administrador 
              </div>
            </div>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end" style="color: black">
                Despues de hacer la compra tendras que esperar para recibir tus compras
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="slider">
      <ul>
      <li><img src="img/mensaje-ensalada.jpg" width="550" height="450" alt="" ></li>
      <li><img src="img/copa-chocolate.jpg" width="550" height="450" alt=""></li>
      <li><img src="img/ensalada-helado.jpg" width="550" height="450" alt=""></li>
      <li><img src="img/helado-yogurt.jpg" width="550" height="450" alt=""></li>
      </ul>
      </div>

          </div>
        </div>
      </div>
    </section>
   <div class="col-md-3" align="center"> <span>
   
</form>

</tr></tr></tr>
</div>
    

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
        <div class="sociales">
          <div class="col-md-12 p-5">
          
            <!--Footer Bottom-->
            <p class="text-center">&copy; Copyright 2018 - City of Colombia.  All rights reserved.</p>
<a class="icon-facebook" href="#"></a>
                  <a class="icon-twitter" href="#"></a>
                  <a class="icon-instagram" href="#"></a>
                  <a class="icon-gplus" href="#"></a>
                  </center>
                  
                  
              </div>
              <center>
              
          </div>
        </div>
      </div>
    </footer>

    <script src="jquery/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     </center>
  </body>
</html>         
<?php

?>