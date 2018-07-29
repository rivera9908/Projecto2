<?php
/**
 * Created by PhpStorm.
 * User: fhjua
 * Date: 19/06/2018
 * Time: 4:53 PM
 */
include_once('clases/carrito.php');
class Insert extends Cart {
    protected $nombre;
    protected $id;
    protected $fecha;
    public $code;
    protected $car;
    protected $coding;
    protected $cantidad;



    public function __construct(){
        parent::__construct();
    }

    function muestraTabla($id, $nom, $fecha){
        try {
            $iden = $id;
            $nombre = $nom;
            $fecha = $fecha;
            $tipo = $this->getTipoDoc($nombre, $iden);
            
            $car = $this->get_items();
            foreach ($car as $k) {
                $nombr = $nombre;
                $nomPro = $k["product"];
                $precio = $k["price"];
                $cantid = $k["amount"];
                $total = $k["subtotal"];
                $code = $k["code"];
                $idusu = $iden;
                $tipodoc = $tipo;
                $fecha = $fecha;
                $sql = $this->db->query("INSERT INTO compra (Nom_usu, Nom_pro, Prec_pro, Cant, Total, PRODUCTO_cod_producto, 
                                      Usuario_Id_usu, Usuario_Tipo_doc_Tipo_doc, Fecha)
                                      VALUES 
                                      ('$nombr', '$nomPro', $precio, $cantid, $total, '$code', $idusu, '$tipodoc', '$fecha')");




            } 
             echo "<script>alert('Compra exitosa.'); location='../Usuario/inicio.php';</script>";
            
        }catch (Exception $e){
            die("Error: " . $e->getMessage());
        }
    }

    function getTipoDoc($nombre, $iden){
        $tipo="";
        $sql=$this->db->query("SELECT Tipo_doc_Tipo_doc FROM usuario WHERE Nom_usu = '$nombre' AND Id_usu = $iden");
        while ($fila=$sql->fetch_array(MYSQLI_ASSOC)){
            $tipo=$fila["Tipo_doc_Tipo_doc"];
        }
        return $tipo;
    }

    
}
?>


