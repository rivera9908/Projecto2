<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../index.php?Noseccion");
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
  </head>
  <body>

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
                    Conozca nuestro menu de ensaladas de frutas y promociones
                    que tendras al comprar nuestros productos
                  </div>
                </div>
                <!-- check -->
                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                   Apoyanos con tu opinion y calificacion acerca de nuestros productos 
                  </div>
                </div>
                <!-- check -->
                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                  
                    <i class="fas fa-certificate"></i>
                  </div>
                  <div class="p-4 align-self-end">
                  Registrate y disfruta los privilegios que te ofrece nuestro negocio
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
            </div>
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
          <h2 class="h2"><span >INGREDIENTES</span></h2>
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
            <a href ="ingredientesres.php" ><h1><b>Ver ingredientes registrados</b></h1></a>
            <p>Aqui podras encontrar nuestros productos con los cuales podras conocer su precio, descripcion
            e incluso podras darnos tu apoyo con tu opinion y calificacion siempre y cuando hayas iniciado sesion</p>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
               <article>
               <div class="zoomout">
  

    <tr> <img src="img/menu3.jpg" width="250" height="150" VSPACE="10"></tr><br>
    <tr><img src="img/menu4.jpg" width="250" height="150" VSPACE="10"></tr>
    </div>
    </article>


            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
               <article>
<div class="zoomout">
          <img src="img/menu.jpg" width="250" height="150" VSPACE="10">
          <img src="img/menu2.jpg" width="250" height="150" VSPACE="10">
            </div>
</article>
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
              <h1 class="display-4">GENERAR REPORTES</h1>
              <p class="lead">En esta zona los empleados podran generar informes o reportes para el administrador</p>
              <a href="informes.php" class="btn btn-outline-secondary text-white" style="background-color: rgba(93, 173, 226  )   ">Informes</a>
            </div>
          </div>
        </div>
      </div>
    </section>

      

    <!-- FOOTER 
    <footer>
      <div class="container">
        <div class="row">
        <div class="sociales">
          <div class="col-md-12 p-5">
          
            <!--Footer Bottom
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  --></body>
</html>         
