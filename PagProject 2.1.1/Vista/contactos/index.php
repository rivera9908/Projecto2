<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="../../css/main.css" type="text/css"> 

   <style>
    #boton:hover {
background: rgba(0,0,0,0);
color: black;
box-shadow: inset 0 0 0 3px red;
}
    
  </style>
   
</head>
<body>
<br>
<div class="contenedor" style="background-color: rgba(235, 239, 245, 0.55)" >
   
   <h1 class="panel-title" align="center" style="color: black">Contactanos en las siguientes redes sociales</h1>
    </div>
<div class="responsive">
<div class="alert alert-success" align="justify" >
<div class="row" aria-expanded="true" >
<div class="col-md-3" align="center">           

  <form action="validar.php" method="post">
<table class="table" style=" background-color: rgba(235, 239, 245, 0.55)">
                <tr>
            <td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b style="color:black" >Asunto</b></td>
            <td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><textarea name="asunto" rows="3" cols="22" class="form-control" placeholder="ejemplo: no puedo entrar a la pagina" required="required"></textarea></td>
            </tr>
            <tr>
                <td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b style="color:black">Correo</b></td>
                <td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;">
                    <input class="form-control input-sm" type="email" name="correo"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"  placeholder="ejemplo98@gmail.com"  required></td>
            </tr>
            
            <tr>
            <td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b style="color:black" >Mensaje</b></td>
           <td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"> <textarea name="mensaje" rows="5" cols="22" placeholder="Escriba aqui su mensaje o sugerencia " required="required" ></textarea></td>
              </tr>
              
              
                           <tr><td align="center" colspan="2" style=" padding:10px 10px;"><input type="submit" name="enviar" style="width:400px"
value="ENVIAR" id="boton"></td></tr>

  
                          
            <tr><td align="center" colspan="2" ><a href="../../index.php" style="color:black"><b>Volver</b></a></td></tr>
            
                           
           </table>       
           </form>
          
 <center>
  <div class="social" >
    <ul >
    
      <li><a href="https://www.facebook.com/pg/Fruter%C3%ADa-del-Bosque-1869781959748629/posts/?ref=page_internal" target="_blank" class="icon-facebook"></a></li>
      <li><a href="https://twitter.com/DelFruteria" target="_blank" class="icon-twitter"></a></li>
       <li><a href="https://www.instagram.com/bosquefruteria69/?hl=es-la" target="_blank" class="icon-instagram"></a></li>
     
   
    </ul>
   </div>
   </center>
</div>
</div>
</div>
</div>
</body>
</html>
   