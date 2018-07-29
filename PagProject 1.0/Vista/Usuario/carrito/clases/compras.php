

<?php

include "conexion.php";
		class Cart extends Product{ 
	    public $cart = array();
	    public function __construct(){ 
	    	parent::__construct(); 
	    	if(isset($_SESSION['cart'])){
	    		$this->cart = $_SESSION['cart'];
			}
		}
		/*
		$numeroventa=0;

		$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysql_query("insert into compras (numeroventa, imagen,nombre,precio,cantidad,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['Imagen']."',
				'".$arreglo[$i]['Nombre']."',	
				'".$arreglo[$i]['Precio']."',
				'".$arreglo[$i]['Cantidad']."',
				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
				)")or die(mysql_error());
		}*/
		
		
		 public function get_items(){
			 
			
				
	    	$html = '';
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
	    			$code = "'".$key['code']."'";
					$html .= '<tr>
								<td>'.$key['code'].'</td>
								<td>'.$key['product'].'</td>
								<td align="right">'.number_format($key['price'], 2).'</td>
								<td align="right">'.$key['amount'].'</td>
								<td align="right">'.number_format($key['subtotal'], 2).'</td>
								<td>
									<button onClick="deleteProduct('.$code.');">
				                    	Eliminar
				                    </button>
								</td>	
							  </tr>';
				}
	    	}
	    	return $html;

		 }
		  public function get_total_items(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['amount'];
				}
	    	}
	    	return $total;
	    }
		}

?>