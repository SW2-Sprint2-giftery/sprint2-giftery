<?php
include 'user.php';

class Admin extends User{
      private static $ob ;
    
    
   private function __construct(){
       
   }
    public static function getob(){
        if(!self::$ob)
            self::$ob = new static();
        return  self::$ob ; 
    }
    
    public function set($key ,$value)
    {
        $this->$key=$value;
    }
    public function get($key)
    {
       return $this->$key;
    }
    
    public function addproduct_A($pname,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
            $this->pimg=$pimg;
            $DB = new  DaBa();
			$check=$DB->Insertproduct($pname,$price,$pdesc,$pimg);
    }
    
           public function Updateproduct_A($pname,$p_new_name,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
          
            $this->pimg=$pimg;
            $DB = new  DaBa();
			$check=$DB->UpdateProduct($pname,$p_new_name,$price,$pdesc,$pimg);
    }
    public function Deleteproduct_A($pname)
    {
            $this->pname=$pname;
            $DB = new  DaBa();
			$check=$DB->Deleteproduct($pname);
    }

      public function Display_feedback_A(){
			$DB = new  DaBa();
			$data=$DB->display_feedback();
            return $data;
		}
    
    
    
}

//$A =  Admin::getob();
//$A->set('one' , 'apple');
//$A->set('two' , 'mango');
//var_dump($A);
//$A2 =  Admin::getob();
//$A2->set('3' , 'apple33');
//$A2->set('4' , 'mango44');
//var_dump($A2);





?>