<?php

$conexion = new mysqli("localhost","root","","c_el_olivo");

if($conexion){
    echo "conexion exitosa";

}else{
    echo "conexion no exitosa";
}
?>