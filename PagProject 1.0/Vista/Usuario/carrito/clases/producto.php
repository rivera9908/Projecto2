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
      $sql = $this->db->query("SELECT * FROM carrito_compras");  
	  
      $html = '';
      
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $code = "'".$key['codigo']."'";
		
	
		
		echo  "<tr>";
		
                echo "<td>"; echo $key['codigo']; echo "</td>";
                echo "<td>";  echo $key['nombre']; echo "</td>";
                echo "<td>"; echo "<img src='".$key ['imagen']."' width='100'>"; echo "</td>";
                echo "<td>"; echo $key['descripcion']; echo "</td>";
				echo "<td>"; echo $key['categoria']; echo "</td>";
                echo "<td>"; echo $key['precio']; echo "</td>";
				

		
   
        
   echo  '<td align="right">';
       echo ' <input type="number"  id="'.$key['codigo'].'" value="1" min="1">';
               echo     '</td>';
					
               echo    ' <td>';
                 echo  '   <button onClick="addProduct('.$code.');">';
                     echo  ' Agregar';
                     echo '</button>';
                  echo ' </td>';
				   
                  
				  
				  
                
      }
      return $html;
   	} 

 		public function search_code($code){
 			$sql = $this->db->query("SELECT * FROM carrito_compras WHERE codigo = '$code'"); 
      $product = $sql->fetch_all(MYSQLI_ASSOC); 
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['codigo'];
    		$this->product = $key['nombre'];
            $this->picture = $key['imagen'];
    		$this->description = $key['descripcion'];
			$this->category = $key['categoria'];
    		$this->price = $key['precio'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>