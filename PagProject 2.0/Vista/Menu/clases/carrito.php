<?php
include_once('producto.php');
	class Cart extends Product{
	    public $cart = array();

	    public function __construct(){ 
	    	parent::__construct(); 
	    	if(isset($_SESSION['cart'])){
	    		$this->cart = $_SESSION['cart'];
	    	}
	    }

	    public function add_item($code, $amount){
			$search = $this->search_code($code);
			if($search > 0){
				$code = $this->code;
				$product = $this->product; 
				$price = $this->price;
				$item = array(
					'code' => $code, //codigo
					'product' => $product, //Nombre del producto
					'price' => $price, // precio
					'amount' => $amount //cantidad
				);
				if ($amount<1){
                    print "<script>alert(\"NO PUEDE AGREGAR NUMEROS NEGATIVOS.\");window.location='index.php';</script>";
                    $item['amount'] = $key['amount'] ;
				}

                if ($amount>10){
                    print "<script>alert(\"NO PUEDE AGREGAR MAS DE 10 PRODUCTOS.\");window.location='index.php';</script>";
                    $item['amount'] = $key['amount'] ;
                }
			}
			if(!empty($this->cart)){
                foreach ($this->cart as $key){
                    if($key['code'] == $code){
                        $item['amount'] = $key['amount'] + $item['amount'];
                    }
                }
			}
            $item['subtotal'] = $item['price'] * $item['amount'];
            $id = md5($code);
            $_SESSION['cart'][$id] = $item;
	    }

		public function remove_item($code){
			$id = md5($code);
			unset($_SESSION['cart'][$id]);
			
			
		}


	    public function get_items(){
	    	if(!empty($this->cart)){

	    	}
	    	return $this->cart;
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

	    public function get_total_payment(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['subtotal'];
				}
	    	}
	    	return number_format($total, 2);
	    }

	    public function ver (){

	    	header(verproducto);

        }
}
?>