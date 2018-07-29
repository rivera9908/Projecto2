<?php
  include_once('conexion.php');
  class Product2 extends Model{
    public $code;
    public $product;
    public $picture;
    public $description;
    public $category;
    public $price;
    
    
    public function __construct(){ 
        parent::__construct();
    }

    public function get_products(){
            $sql = $this->db->query("SELECT * FROM carritodecompras WHERE CATEGORIADELPRODUCTO_Nom_cat='Bebidas'");
            $prod=$sql->fetch_all(MYSQLI_ASSOC);
            return $prod;
        }

    public function search_code($code){
        $sql = $this->db->query("SELECT * FROM carritodecompras WHERE Codigo = '$code'");
        $product = $sql->fetch_all(MYSQLI_ASSOC);
        $status = 0;
        foreach ($product as $key){
                $this->code = $key['Codigo'];
                $this->product = $key['Nombre'];
                $this->picture = $key['imagen'];
                $this->description = $key['Descripcion'];
                $this->category = $key['CATEGORIADELPRODUCTO_Nom_cat'];
                $this->price = $key['Precio'];
                $status++;
        }
        return $status;
    }
  }

?>