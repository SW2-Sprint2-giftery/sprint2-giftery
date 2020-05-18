<?php
include 'user.php';

class Admin extends User{
       
   
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
    
}

//$A = new Admin();

//$A ->addproduct_A('dubai','hytr',"jff","h");
//$A ->updateeplace(15,'dubai','kkkkkkkk',"jff","h");
//$A ->Deleteeplace(15);
//$A ->searchplacess('dubai');
//$A ->displayplaces("h");
// $A ->showalluser();




?>