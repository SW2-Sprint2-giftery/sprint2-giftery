<?php
include 'database.php';

class User {

		private $username;
		private $email;
		private $password;
        private $address;
      
    public function Login($username,$password){
			$this->username=$username;
			$this->password=$password;
           $DB = DaBa::getob();
			$check=$DB->CheckUser($username,$password);
		}
    
    

     public function displayproudect_u(){
			$DB = DaBa::getob();
			$data=$DB->displayproudect();
            return $data;
		}
    
    public function AddToCart_u($username,$pc_id){
			$this->username=$username;
			$this->pc_id=$pc_id;
        $DB = DaBa::getob();
			$check=$DB->AddToCart($username,$pc_id);
		 }
    public function displayproudect_search_u($pname){
			$this->pname=$pname;
            $DB = DaBa::getob();
			$check=$DB->displayproudect_search($pname);
		 }
    
    
    public function ADD_feedback_u($username,$text){
			$this->username=$username;
			$this->text=$text;
            $DB = DaBa::getob();
			$check=$DB->Add_Feedback($username,$text);
		 }
   
    
    
    
  
    
}
//$u =new User();
//$u->Login('admin',123);
//$u->Login("mahmoudelwan",555);

?>