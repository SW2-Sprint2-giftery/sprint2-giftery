<?php
class DaBa{
		public $Servername;
		public $Username;
		public $Password;
		public $DBname;

		protected function connect(){
			$this->Servername="localhost";
			$this->Username="root";
			$this->Password="";
			$this->DBname="sw2_giftery";
			$conn =new mysqli($this->Servername,$this->Username,$this->Password,$this->DBname);
			return $conn;
		}

    
  
    
    public function Insertuser($username,$email,$password,$address){
                $sql ="INSERT INTO  user(username,email,password,address) 
                VALUES ('$username','$email','$password','$address') ";
                $result=$this->connect()->query($sql);
                return $result;
             }    
     
    
    
    public function getAllUsers(){
                $sql="SELECT * FROM  user";
                $result=$this->connect()->query($sql);
                $numRows=$result->num_rows;
                if($numRows > 0){
                    while ($row=$result->fetch_assoc()) {
                        $data[]=$row;
                    }
                    return $data;
                }
            }    
    
    
    public function CheckUser($username,$password){
				$datas=$this->getAllUsers();
               foreach ( (array)$datas as $data) {
                if($username==$data['username']&&$password==$data['password'])
                {
                    	$_SESSION['username']=$username;
		                	header('location:product.php');
                }	
						
                   
			}
        
                 
					
    }
    
    
    
    
    public function Insertproduct($pname,$price,$pdesc,$pimg){
			$sql =  " INSERT INTO  product
            (name,price,product_desc,img) 
			                   VALUES
                     ('$pname','$price','$pdesc','$pimg') ";
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }
    
     public function UpdateProduct($pname,$p_new_name,$price,$pdesc,$pimg)
     {
			$sql =  " Update  product set   name='$p_new_name' , price='$price' , product_desc='$pdesc' , img='$pimg'  where  name= '$pname' ";
           
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }
    
       
 
    
     public function displayproudect()  
    {
            $sql ="SELECT * FROM product ";
            $result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
			
           
                	return $data;
			}
      

    }
    
    public function Deleteproduct($pname)
    {
        $sql = "DELETE  FROM product WHERE name='$pname'";
            
        	$result=$this->connect()->query($sql);
		   	return $result;
    }
     
    
    public function Add_Feedback($username,$text){
			$sql =  " INSERT INTO  sw2_Feedback
            (username,text) VALUES('$username','$text') ";
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }

}
?>