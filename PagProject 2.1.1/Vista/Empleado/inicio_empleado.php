<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../index.php?Noseccion");
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fruteria del bosque</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" >
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js" ></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/estrellas.css">
    <link rel="stylesheet" href="css/hover.css">
     <script type="text/javascript">
  function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>
  </head>
  <body onload="deshabilitaRetroceso()">

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-sm bg-blue navbar-dark fixed-top">
      <div class="container">
        <a href="" class="navbar-brand" style="color: white">
         <b> Fruteria</b>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse"  >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="" class="nav-link" style="color: white" ><b>Inicio</b></a>
            </li>
            <li class="nav-item">
              <a href="#info-section" class="nav-link" style="color: white"><b>Informes</b></a>
            </li>
            <li class="nav-item">
              <a href="#info-section" class="nav-link" style="color: white"><b>Inventario</b></a>
            </li>
            <li class="nav-item">
              <a href="ver_categ.php" class="nav-link" style="color: white"><b>Categoria Productos</b></a>
            </li>
            <li class="nav-item">
              <a href="#cont-section" class="nav-link"></a>
            </li>
         
            
          </ul>
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
                <h1 class="display-4"> <strong>Bienvenido Empleados</strong> </h1>

                <!-- check -->
                <div class="d-flex flex-row">
                 
                  <div class="p-4  align-self-auto">
                  
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                    !Apreciado empleado aqui podras gestionar el inventario¡
                  </div>
                </div>
                <!-- check -->
                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                   !No olvides entrar a "Estado Inventario" para revisar los dias que se gastarron ingredientes¡
                  </div>
                </div>
                <!-- check -->
                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                  
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                  !Recuerda generar reportes del inventario¡
                   </div>
                </div>

              </div>
              <!-- SECOND COLUMN -->
                <!-- SECOND COLUMN -->
              
              <div class="col-lg-4">
                <div class="card text-center" style="background-color: rgba(51, 205, 250, 0.5 )">
                  <div class="card-body">
                    <h3>
                    <?php 
                    
                    echo "Bienvenido Empleado";
                    echo "<br>";
					
                    echo $_SESSION['Nom_usu']; ?>
                    </h3>
                    
                    <p></p>
                    <div class="form-group">
                    <table class="" style="" align="center" width="250">
                     <form action="../../Modelo/cerrar_sesion.php" method="POST">
                    
                    <input type="submit" name="cerrar_sesion" value="Cerrar Sesion">







</table>
                    
                  </div>
                </div>
              </div>
    </header>
   
                             

    <!-- INFO HEAD -->
    <section class="info-head-section" style="background-color: #1373AB">
      <div class="container" style="background-color: #1373AB">
        <div class="row" >
          <div class="col text-center" >
            <div class="p-5" >
              <h1 class="display-4" >REVISAR INVENTARIO</h1>
              <p class="lead">Aqui cualquier empleado podra revisar el inventario</p>
              <a href="ver_Inventario.php" class="btn btn-outline-secondary" style="background-color: white">Revisar</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info-section bg-light text-muted py-5" id="info-section" >
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <h2 class="h2"><span ><a href ="ingredientesres.php" class="btn btn-outline-secondary"><b>INGREDIENTES</b></span></h2></a><hr>
          <table align="center" class="table1">
          <tr>
          	
<div class="slider">
      <ul>
      <li><img src="img/slider2.2.jpg" width="550" height="450" alt="" ></li>
      <li><img src="img/slider2.2.1.jpg" width="550" height="450" alt=""></li>
      <li><img src="img/slider2.2.2.jpg" width="550" height="450" alt=""></li>
      <li><img src="img/slider2.2.3.jpg" width="550" height="450" alt=""></li>
      </ul>
      </div>
          

          </table>
           </div>
          <div class="col-md-6">
            <h1><b>Informacion</b></h1></a>
            <p>Aqui los empleados podran gestionar todo acerca lo que tiene que ver con inventario e incluso generar reportes de los ingredientes modificados segun los dias que él desea.</p>
            <!-- check -->
        
                  <div class="zoomout">
    <img src="img/leche.jpg" width="250" height="150" VSPACE="10" >
    <img src="img/mora.jpg" width="250" height="150" VSPACE="10" >

          <img src="img/guayaba.jpg" width="250" height="150" VSPACE="10" >
          <img src="img/banano.jpg" width="250" height="150" VSPACE="10">
            </div>
    

            <!-- check -->
            
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- HEAD SECTION -->
    <section class="" style="background-color: #1373AB">
      <div class="container" style="background-color: #1373AB">
        <div class="row">
          <div class="col text-center">
            <div class="p-5">
              <h1 class="display-4">ESTADO DEL INVENTARIO</h1>
              <p class="lead">En esta zona los empleados podran ver los ingredientes utilizados e ingresados actualmente.</p>
              <a href="estado_inventario.php" class="btn btn-outline-secondary text-white" style="background-color: rgba(93, 173, 226  )   ">Informes</a>
            </div>
          </div>
        </div>
      </div>
    </section>

      

    <!--FOOTER -->
   <!-- <footer>
      <div class="container">
        <div class="row">
        <div class="sociales">
          <div class="col-md-12 p-5">
          
            <Footer Bottom
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
    </footer>-->

    <script src="jquery/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>         
