<?php
session_start();
include '../modelo/conexion.php';
if(isset($_SESSION['user'])){
	
	echo '<script>window.location="c:/wamp64/www/PagProject/panel.php"</script>';
	

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fruteria del bosque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/estrellas.css">
    <link rel="stylesheet" href="css/hover.css">
  </head>
  <body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          Fruteria
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home-section" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="#info-section" class="nav-link">Menu</a>
            </li>
            <li class="nav-item">
              <a href="#tienda-section" class="nav-link">Tienda</a>
            </li>
            <li class="nav-item">
              <a href="#contact-section" class="nav-link">contactos</a>
            </li>
         
            <li>
            <a href="Usuario/registrousu.php" class="nav-link">registrarse</a>
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
                <h1 class="display-4"> <strong>Bienvenido</strong> </h1>

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
              <div class="col-lg-4">
                <div class="card text-center" style="background-color: #c0392b;">
                  <div class="card-body" style="border:double;">
                    <h3>INGRESAR</h3>
                    <p>Digite sus datos</p>
                    <div class="form-group">
                    <table class="" style="" align="center" width="250">
                     <form method="post" action="Usuario/iniciar_sesion.php">
                
    <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> Identificacion</td><td>
<input class="form-control input-sm" type="text" name="idusu" class="form-control" placeholder="Identificacion Usuario" required></td></tr>
                    
                   
                   
    <tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> Nombre</td><td>
<input class="form-control input-sm" type="text" name="Nom_usu" class="form-control" placeholder="Nombre Usuario" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Password</td><td>
<input class="form-control input-sm" type="password" name="Pass_usu" class="form-control"
placeholder="ingrese contrasena" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Perfil </td><td>
<select name="Rol_nom_rol">
   <option value="Cliente">Cliente</option> 
   <option value="Empleado">Empleado</option> 
   <option value="Administrador">Administrador</option> 

<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="iniciar_sesion"  style="width:200px"
value="INICIAR SESION"></td></tr>
</form>


<tr><?PHP 


if(isset($_REQUEST['Noseccion']))
{ echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."<br>DATOS INVALIDOS<br>INTENTELO DE NUEVO"."</div> </td></tr>";

if(isset($_REQUEST['Conerror']))
{ 
echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."<br>ROL INVALIDO"."</div> </td></tr>";
}
if(isset($_REQUEST['conerror']))
{ 
echo "<td colspan='2' align='center'><div class='alert alert-warning'>"."<br>CONTRASEÑA INVALIDO"."</div> </td></tr>";
}




}?></td></tr>




<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2">

<a href="Usuario/registrousu.php" style="
color:#FFF;
position:center;;
border:double;

	"> ¿REGISTRARSE?</a>

</td>
</td>
</td>
</tr></tr></tr>
</tr>



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
    <section class="info-head-section">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="p-5">
              <h1 class="display-4">REGISTRATE AQUI SI NO LO HAS HECHO</h1>
              <p class="lead">registrate y vuelvete parte de nuestro negocio</p>
              <a href="Usuario/registrousu.php" class="btn btn-outline-secondary">Registrarse</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info-section bg-light text-muted py-5" id="info-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <h2 class="h2"><span >MENU</span></h2>
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
            <h3>PRODUCTOS</h3>
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
    <section class="tienda-head-section bg-danger">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="p-5">
              <h1 class="display-4">CONOCE NUESTRA UBICACION!</h1>
              <p class="lead"></p>
              <a href="ubicacion.php" class="btn btn-outline-secondary text-white">ubicacion</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info-section bg-light text-muted py-5" id="tienda-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Tienda</h3>
            <p>Si quieres comprar los productos que nuestra fruteria ofrece aqui podras hacerlo sin embargo ten en cuenta
            las siguientes condiciones:</p>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end">
                Debes iniciar sesion para poder hacer las compras de lo contrario no podras hacerlo
              </div>
            </div>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end">
                Si no estas registrado te invitamos a que lo hagas por el enlace que esta arriba en el menu
              </div>
            </div>
            <!-- check -->
            <div class="d-flex flex-row">
              <div class="p-4 align-self-start">
                <i class="fas fa-certificate"></i>
              </div>
              <div class="p-4 align-self-end">
                Ten en cuenta los precios y descuentos que te podemos ofrecer al comprar cierta cantidad de ensaladas
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
      <div class="container" id="contact-section">
        <div class="row">
        <div class="sociales">
          <div class="col-md-12 p-5">
            <!--Footer Bottom-->
            <p class="text-center">&copy; Copyright 2018 - City of Colombia.  All rights reserved.</p>
            
                  <a class="icon-facebook" href="#"></a>
                  <a class="icon-twitter" href="#"></a>
                  <a class="icon-instagram" href="#"></a>
                  <a class="icon-gplus" href="#"></a>
              </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>         