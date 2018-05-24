<?php
	include_once('claseConexion.php');
	class Product extends Model{
		public $code;
		public $product;
		public $description;
		public $price;

		public function __construct(){ 
      parent::__construct(); 
    }

 		public function search_code($code){
	    $sql = $this->db->query("SELECT * FROM tbl_material WHERE id_material = '$code'"); 
      $product = $sql->fetch_all(MYSQLI_ASSOC); 
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['id_material'];
    		$this->product = $key['nombre'];
    		$this->price = $key['precio'];
        $this->image = $key['imagen'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>