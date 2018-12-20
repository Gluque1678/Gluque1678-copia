<?php
	class Cart extends Product{ 
	    public $cart = array();
	    public function __construct(){ 
	    	parent::__construct(); 
	    	if(isset($_SESSION['cart'])){
	    		$this->cart = $_SESSION['cart'];
	    	}
	    }

	    public function add_item($code, $cantidad){
			$search = $this->search_code($code);
			if($search > 0){
				$code = $this->code;
				$product = $this->product;
				$price = $this->price;
				$image = $this->image;
				$item = array(
					'code' => $code,
					'product' => $product,
					'price' => $price,
					'cantidad' => $cantidad,
					'imagen' => $image
				);
				if(!empty($this->cart)){
					foreach ($this->cart as $key){
						if($key['code'] == $code){
							$item['cantidad'] = $key['cantidad'] + $item['cantidad'];
						}
					}
				}
				$item['subtotal'] = $item['price'] * $item['cantidad'];
				//$id = md5($code);
				$_SESSION['cart'][$code] = $item;
				$this->update_cart();
			}
		}

		public function remove_item($code){
			unset($_SESSION['cart'][$code]);
			$this->update_cart();
			return true;
		}

	    public function get_items(){
	    	$html = '';
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
	    			$html .= 	'<img src="img/material/_ant/'.$key['imagen'].'" /><br/>
									<span>'.$key['product'].'</span><br/>
									<span>Precio: '.number_format($key['price'], 2).'€</span><br/>
									<span>Cantidad: '.$key['cantidad'].'</span><br/>
									<span>Subtotal: '.number_format($key['subtotal'], 2).'€</span><br/><br/>
									<button class="btn btn-danger" onClick="deleteProduct('.$key['code'].');">
			                    		Eliminar
			                    	</button><br/>';
				}
	    	}
	    	return $html;
	    }

	    public function get_total_items(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['cantidad'];
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

		public function update_cart(){
			self::__construct();
		}
	}
?>