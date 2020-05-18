<?php

//error_reporting(0);
 session_start();
$userprofile=	$_SESSION['username'];
if($userprofile == true)
{
    
}
else
{
    	header('location:login1.php');
}
include 'Admin.php';
$A = new Admin();
if(isset($_POST['addproduct']))
{
    
   	$pname=$_POST['pname'];
   	$pdesc=$_POST['pdesc'];
    $price=$_POST['pprice'];
   	$pimg=$_POST['pimg'];
    $A->addproduct_A($pname,$price,$pdesc,$pimg);
}
if(isset($_POST['UpdateProduct']))
{
    
   	$pname=$_POST['pname'];
    $p_new_name=$_POST['p_new_name'];
   	$pdesc=$_POST['pdesc'];
    $price=$_POST['pprice'];
   	$pimg=$_POST['pimg'];
  
    $A->Updateproduct_A($pname,$p_new_name,$price,$pdesc,$pimg);
}
if(isset($_POST['deleteproduct']))
{
  
   	$dpname=$_POST['upname'];
  
    $A->Deleteproduct_A($dpname);
}



?>
<html> 
  <head>
      <title>admin</title>
      <link rel="stylesheet" href="css/all.css" />
      <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/admiindb.css" />
  </head>
    <body>
   
            <section class="top">
            <div class="container d-flex justify-content-center text-center pt-2 ">
              
             <div><a href="Admindb.php"><h2>TheGiftery</h2></a></div>
                     <div>  <a class="btn btn-primary text-light " href="login1.php">logout</a></div>
            </div>
             
        </section>

             <section class="AdminDB mb-5 py-5">
            <div class="container ">
                <div class="row d-flex justify-content-around">
                   <div class="col-md-4 ">
             
                <form method="post" class="py-2 add">
                    <h3 class=" py-3 text-center text-primary">
                    Add product
                    </h3>
                   <div class="position-relative ">
                    <input class="form-control myinpt_log" type="text"
                           name="pname" required placeholder="Product name" />
                   </div> 
                     <div class="position-relative ">
                    <input class="form-control myinpt_log" type="number"
                           name="pprice" required placeholder="Product price" />
                   </div> 
                     <div class="position-relative">
                         <textarea class="form-control myinpt_log" type="text"
                                   name="pdesc" 
                          required placeholder="Product description" >
                         </textarea> 
                    </div> 
                   
                    <h6 class="text-center pt-4 px-2 text-primary">
                    product photo
                    </h6>
                  <input required class="py-2 px-4 text-center" type="file" id="Place Photo"
                         name="pimg">
                

                   <div class="text-center py-3"> 
               <button id="myBtn_log" class="mybtn_log btn btn-primary form
                       " type="submit" name="addproduct"> Add </button></div>


                  </form>
                </div>
                  <div class="col-md-4 ">
             
                <form method="post" class="py-2 update">
                    <h3 class=" py-3 text-center text-primary">
                    Update product
                    </h3>
                   <div class="position-relative ">
                    <input class="form-control myinpt_log" type="text"
                           name="pname" required placeholder="Product name" />
                   </div> 
                    <div class="position-relative ">
                    <input class="form-control myinpt_log" type="text"
                           name="p_new_name" required placeholder="new Product name" />
                   </div>
                     <div class="position-relative ">
                    <input class="form-control myinpt_log" type="number"
                           name="pprice" required placeholder="New Product price" />
                   </div> 
                     <div class="position-relative">
                         <textarea class="form-control myinpt_log" type="text"
                                   name="pdesc" 
                          required placeholder=" New Product description" >
                         </textarea> 
                    </div> 
                   
                    <h6 class="text-center pt-4 px-2 text-primary">
                    product photo
                    </h6>
                  <input required class="py-2 px-4 text-center" type="file" id="Place Photo"
                         name="pimg">
                

                   <div class="text-center py-3"> 
               <button id="myBtn_log" class="mybtn_log btn btn-primary form
                       " type="submit" name="UpdateProduct"> Update </button></div>


                  </form>
                </div>
                  <div class="col-md-4 pt-5  ">
             
                <form method="post" class="mt-5 py-3 delete">
                    <h3 class="m-auto py-3 px-2 text-center text-primary">
                    Delete product
                    </h3>
                   <div class="position-relative "> <input class="form-control myinpt_log" type="text" name="upname" required placeholder="product name" />
                   </div> 

                   <div class="text-center py-4"> 
                       <button id="myBtn_log" class="mybtn_log btn btn-primary form
                       " type="submit" name="deleteproduct"> Delete product </button></div>


                  </form>
                        
                </div>
                    
                </div>
                 
                 </div>
</section>
        
        

         <section class="py-2  px-5 border-top border-primary footeer ">
            <span class="Copyright">Copyright © 2020 UIGRID | All Rights Reserved | 
                <span class="Copyright-link"><a href="Admindb.php">www.thegiftery.com</a> </span>
            </span>
       
        </section>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="dist/bundle.js"></script>
     
     </body>
</html>

