<?php
include 'user.php';

class Admin extends User{
    
   
    public function addproduct_A($pname,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
            $this->pimg=$pimg;
            $DB = DaBa::getob();
			$check=$DB->Insertproduct($pname,$price,$pdesc,$pimg);
    }
    
           public function Updateproduct_A($pname,$p_new_name,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
          
            $this->pimg=$pimg;
              $DB = DaBa::getob();
			$check=$DB->UpdateProduct($pname,$p_new_name,$price,$pdesc,$pimg);
    }
    public function Deleteproduct_A($pname)
    {
            $this->pname=$pname;
              $DB = DaBa::getob();
			$check=$DB->Deleteproduct($pname);
    }

      public function Display_feedback_A(){
			  $DB = DaBa::getob();
			$data=$DB->display_feedback();
            return $data;
		}
    
    
    
}







?>