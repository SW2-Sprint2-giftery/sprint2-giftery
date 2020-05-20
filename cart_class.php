<?php
include 'database.php';

class cart {
        private $username;
		private $pc_id;
public function DisplayCartProduct_u($username) {
			$DB = new  DaBa();
			$data=$DB->DisplayCartProduct($username);
         return $data;
		}
    public function DeleteCartproduct_cart($pc_id) {
			$DB = new  DaBa();
			$data=$DB->DeleteCartproduct($pc_id);
         return $data;
		}

}
?>