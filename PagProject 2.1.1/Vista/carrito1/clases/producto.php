<?php
	include_once('conexion.php');
	class Product extends Model{
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
			
            $sql = $this->db->query("SELECT * FROM producto ");
            $prod=$sql;

            while ($row = $sql->fetch_assoc()) {
}
            return $prod;
   	    }

 		public function search_code($code){
		    $sql = $this->db->query("SELECT * FROM producto WHERE cod_producto = '$code'");
		    $status = 0;
		    $product = $sql;
		    while ($key = $sql->fetch_assoc()) {
                $this->code = $key['cod_producto'];
                $this->product = $key['Nom_pro'];
                $this->picture = $key['img_pro'];
                $this->description = $key['Desc_pro'];
                $this->category = $key['Categoriadelproducto_Nom_cat'];
                $this->price = $key['Prec_pro'];
                $status++;
		    }
		    return $status;
		}
	}
?>