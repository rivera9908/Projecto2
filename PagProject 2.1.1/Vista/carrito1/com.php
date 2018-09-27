<?php
/**
 * Created by PhpStorm.
 * User: fhjua
 * Date: 19/06/2018
 * Time: 4:53 PM
 */
include_once('clases/carrito.php');
class Insert extends Cart {
    /*
    protected $nombre;
    protected $ide;
    protected $fecha;
    public $code;
    protected $car;
    protected $coding;
    protected $cantidad;
    */


    public function __construct(){
        parent::__construct();
    }

    //------------------------------------------------------------------

    function muestraTabla($id, $nom, $fech){
        try {
            $ide = $id;
            $nombre = $nom;
            $fechaa = $fech;
            $tipo = $this->getTipoDoc($nombre, $ide);

            //Traemos todos los registros del carrito de compras
            $car = $this->get_items();
            foreach ($car as $k) {

                /**
                 * Por cada vuelta del bucle foreach, insertamos los datos del carrito y del usuario en la
                 * tabla compra
                 */

                //Guardamos el nombre de usuario
                $nombr = $nombre;
                //Traemos el nombre del producto del carrito
                $nomPro = $k["product"];
                //Traemos el precio del producto del carrito
                $precio = $k["price"];
                //Traemos la cantidad del producto del carrito
                $cantid = $k["amount"];
                //Traemos el total del producto del carrito
                $total = $k["subtotal"];
                //Traemos el codigo del producto del carrito
                $code = $k["code"];
                //Guardamos el id del usuario
                $idusu = $ide;
                //Guardamos el tipo de documento del usuario
                $tipodoc = $tipo;
                //Guardamos la fecha
                $fecha = $fechaa;
                
                 $cont=0;
                $stmt1 = $this->db->query("SELECT Id_usu FROM usuario WHERE Nom_usu = '$nombre'");
        
                 while ($linea = $stmt1->fetch_array()){

                     $identificacion=stripslashes($linea["Id_usu"]);
                     $cont=$cont+1;

                 }
        
                if ($ide!=$identificacion){
                   
                    print "<script>alert(\"Tu numero de indentificacion ingresado no coincide con el que te registraste\");window.location='../Usuario/inicio.php';</script>";
    
                    }
                    else{

                        $stmt44 = $this->db->query("SELECT * FROM producto_has_ingrediente WHERE Producto_cod_producto = $code");
                
                while ($linea = $stmt44->fetch_array()) {
                        $codprod = $linea["Producto_cod_producto"];
                        $Nom_pro= $linea["Nom_pro"];
                        $codingrediente1 = $linea["Ingrediente_cod_ingrediente"];
                        $cantidad = $linea["cantidad"];
                        break;
                    }

                $stmtUno = $this->db->query("SELECT cant_existente FROM ingrediente WHERE cod_ingrediente = '$codingrediente1'");
                    while ($linea = $stmtUno->fetch_array()) {
                        $cant_existente = $linea["cant_existente"];
                    }

                      if ($cant_existente<=20){

                        print "<script>alert(\"Proceso exitoso.NOTA: Sin embargo alguno o ninguno de los productos que escogiste no cuenta con suficientes ingredientes, de tal manera que no se pudo comprar. Te recomendamos que entres a 'Mis compras' para confirmar si tu compra quedo registrada. Comunicate con el administrador para mas informacion\");window.location='../Usuario/inicio.php';</script>";

                        
                      }

                          

/*                      elseif ($cant_existente >20){

                        $sql = $this->db->query("INSERT INTO compra (Nom_usu, Nom_pro, Prec_pro, Cant, Total, 
                                                PRODUCTO_cod_producto, Usuario_Id_usu, Usuario_Tipo_doc_Tipo_doc, Fecha)
                                                VALUES 
                                                ('$nombr', '$nomPro', $precio, $cantid, $total, '$code', $idusu,
                                                 '$tipodoc', '$fecha')");
                      
                      }  */
                      else{
                //Inserta los datos en la tabla compra
                $sql = $this->db->query("INSERT INTO compra (Nom_usu, Nom_pro, Prec_pro, Cant, Total, 
                                                PRODUCTO_cod_producto, Usuario_Id_usu, Usuario_Tipo_doc_Tipo_doc, Fecha)
                                                VALUES 
                                                ('$nombr', '$nomPro', $precio, $cantid, $total, '$code', $idusu,
                                                 '$tipodoc', '$fecha')");

                $stmt = $this->db->query("SELECT * FROM producto_has_ingrediente WHERE Producto_cod_producto = $code");

                //Rescato el numero de registros de la consulta
                $registros = $stmt->num_rows;

                for ($i=0; $i<$registros; $i++){
                    //salto a un determinado registro de la consulta
                    $stmt->data_seek($i);
                    //Rescato el registro
                    while ($linea = $stmt->fetch_array()) {
                        $codprod = $linea["Producto_cod_producto"];
                        $codingrediente = $linea["Ingrediente_cod_ingrediente"];
                        $cantidad = $linea["cantidad"];
                        break;
                    }
                    $stmtUno = $this->db->query("SELECT cant_existente FROM ingrediente WHERE cod_ingrediente = $codingrediente");
                    while ($linea = $stmtUno->fetch_array()) {
                        $cantidadexistente = $linea["cant_existente"];
                    }
                    //Restamos a la cantidad existente la cantidad que viene como parametro
                    $descuento= $cantidad * $cantid;
                    $descuento2 = $cantidadexistente - $descuento;

                    //Actualizamos el valor de cantidad existente de la tabla ingredientes
                    $stmtdos = $this->db->query("UPDATE ingrediente SET cant_existente = $descuento2 WHERE cod_ingrediente = $codingrediente");
                }
                    }
                
                 

                 
            }
        }
            echo "<script>alert('Proceso exitoso. NOTA: Revisa en (Mis compras) para rectificar que se haya hecho la compra.'); location='../Usuario/inicio.php';</script>";
             
        }catch (Exception $e){
            die("Error: " . $e->getMessage());
        }
    }

    //------------------------------------------------------------------

    function getTipoDoc($nombre, $ide){
        $tipo="";
        $sql=$this->db->query("SELECT Tipo_doc_Tipo_doc FROM usuario WHERE Nom_usu = '$nombre' AND Id_usu = $ide");
        while ($fila=$sql->fetch_array(MYSQLI_ASSOC)){
            $tipo=$fila["Tipo_doc_Tipo_doc"];
        }
        return $tipo;
    }

    
}
?>


