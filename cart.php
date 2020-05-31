<?php

 session_start();
error_reporting(0);
$userprofile=	$_SESSION['username'];
if($userprofile == true)
{
    
}
else
{
    	header('location:login1.php');
}

mysql_connect("localhost","root","") or die("could not find ");
mysql_select_db("giftry_sprint2_sw2") or die("could not find ");

if(isset($_POST['search']))
{
    $search=$_POST['searchp'];
    
$query =mysql_query(" SELECT   * FROM product INNER JOIN cart ON product.id=cart.pc_id WHERE cart.username='$userprofile' and product.name='$search'") or die("not found");
    $out='';
    $count = mysql_num_rows($query);
    if($count>0)
    {
        
        while($data =mysql_fetch_array($query))
        {
                $id=$data['id'];
                $pname= $data['name'];
                $pdesc= $data['product_desc'];
                $pimg= $data['img'];
                $price= $data['price'];
            $out .=
                '    
                
                <div class="text-center mx-auto py-4 mt-3 search_containt" style="border-bottom: 2px solid black ; ">
                
            <i class="fa fa-times Exit" aria-hidden="true"></i>
                <div class="col-md-4 my-2  m-auto"> 
              <div class="card  mx-auto  " style="width: 20rem;">
          <form method="post" >
<input style="display:none;" class="hidden" type="text" name="c_id" value="'.$id.'"/>
                    <img name="c_img" src="images/'.$pimg.'" class="card-img-top img-fluid img" alt="'.$pimg.'">
            <div class="card-body text-center">
                        <h5 class="card-title cname " name="c_name" >'.$pname.'</h5>
                        <p class="card-text cdesc" name="c_desc">'.$pdesc.'</p>
                        <p class="card-text fa-2x cprice" name="c_price">'.$price.'.00EGP </p>
               <button name="ADD_To_Cart" type="submit"  class="btn btn-primary cart"> ADD To Cart</button>
            </div>
             
       </form>
       
            </div>
            </div>
            </div>
            <br>
            <br>' ;
        }
        
    }
    else
    {
        $out ="Not Found or invalid data";
    }
      
}


 

 include "cart_class.php";

 $c=new cart();
 
  if(isset($_POST['DElete']))
{
      
    $Dpc_id=$_POST['pc_id'];
   
   
    $c->DeleteCartproduct_cart($Dpc_id);

}
?>






<html> 
  <head>
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/index_style1.css">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Pacifico&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/cart.css">
  </head>
    
    <body>
        
        <div class="hiddenList "> 
         <ul>
           <li class="py-3 px-2">
                         <a class="myhome" href="product.php"> Home</a>

           </li>
           <li class="py-3 px-2">
              <a class="account" href="cart.php">My Account</a>
            </li>
             
            
           <li class="py-3 px-2">
              <a class="account" href="register1.php">Sign In</a>
            </li>
           <li class="py-3 px-2">
              <a class="account" href="register1.php">Create new account Now</a>
            </li>
              <li class="py-3 px-2">
              <a class="account" href="cart.php">My Cart</a>
            </li>
          
              <li class="py-3 px-2">
              <a class="logout" href="login1.php">logout</a>
            </li>                

        
                           
                           
         </ul>
         

       </div>
       <div class="clearfix"></div>
       <div class="webSite"> 
           
         <div class="back">
            <a class="section_scroll scroll  ptup" href="#"><i class="fa fa-angle-up fa-4x fa-"></i></a>
         </div>
           
        <nav class="navbar navO navbar-expand-lg navbar-light bg-light py-0  "> 
           <span class="navbar-toggler-icon firstTog mx-3"></span> 
           
              <a class="navbar-brand mr-0 ml-3" href="product.php">The Giftery</a><img class="logo" src="images/images.png"> 
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 <form method="post" class="position-relative mx-5 from">
                <input name="searchp" class="form-control inp" id="searchInp" type="search">
                <input name="search" value="GO"  type="submit" class="fa fa-search position-absolute bg-primary text-white ">
                 </form >
                  <a href="#"><i class="fab fa-opencart fa-2x ml-5 ico"></i></a> 
             <a class="nav-link cartLink ml-2 mr-5" href="cart.php">MyCart</a>
             <a class="nav-link ico" href="#"> <i class="far fa-user ml-4 ico"></i></a>
             <a href="login1.php" class="signLink mr-1 pr-3 py-1 border-right sign">SignIn</a>
             <a class="nav-link ml-2 mr-5 join" href="register1.php"> JoinUs</a> 
             <a class="nav-link" href="#"> <i class="fa fa-cog fa-2x ml-5 pl-3 ico"></i></a>
             </div>
            </nav>
        
           
          <section class="home" id="home">
    
       <div class="container text-center">
            <?php print("$out") ; ?> 
          <div class="row my-5  justify-content-center align-items-center  ">
                <?php
              
                 $result=$c->DisplayCartProduct_u($userprofile) ;
           foreach ((array) $result as $data) {
               $id=$data['id'];
                $pname= $data['name'];
                $pdesc= $data['product_desc'];
                $pimg= $data['img'];
                $price= $data['price'];

        
              echo '<div class="col-md-4 my-2 "> 
              <div class="card  mx-auto  " style="width: 18rem;">
       
                    <img name="c_img" src="images/'.$pimg.'" class="card-img-top img-fluid img" alt="'.$pimg.'">
            <div class="card-body text-center">
                        <h5 class="card-title cname " name="c_name" >'.$pname.'</h5>
                        <p class="card-text cdesc" name="c_desc">'.$pdesc.'</p>
                        <p class="card-text fa-2x cprice" name="c_price">'.$price.'.00EGP </p>
               <button name="buy" type="submit"  class="btn btn-primary cart">Buy now</button>
               <form class=" mt-2" method="post" style="background-color:transparent !important ; display;inline;" >
<input style="display:none;" class="hidden" type="text" name="pc_id" value="'.$id.'"/>
                 <button name="DElete" type="submit"  class="btn btn-primary cart">Delete</button>
                 </form>
            </div>
             

       
            </div>
            </div>' ;
             }?>
            

                </div>
                  </div>
              
              
         </section>
           
           
                    <section class="final"   >
            <div class="container-fluid">
                <div class="row  justify-content-start">
                <!-- <div class="col-md-3 pt-3">
                      <h5>
                          POPULAR SEARCHES
                      </h5>
                      <ul>
                        <li><a href="#">
                            Fashion</a>
                        </li>
                        <li><a href="#">
                            Accessories</a>
                        </li>
                        <li><a href="#">
                            Mugs</a>
                        </li>
                        <li><a href="#">
                            Love</a>
                        </li>
                        <li><a href="#">
                           Valentine</a>
                        </li>
                        <li><a href="#">
                            Birthday</a>
                        </li>
                        <li><a href="#">
                            Games</a>
                        </li>
                        <li><a href="#">
                           Perfume</a>
                        </li>
                        <li><a href="#">
                            Box</a>
                        </li>

                      </ul>
              </div>-->
              <div class="col-md-4 pt-3">
                  <h5>
                      MY ACCOUNT
                  </h5>
                  <ul>
                    <li><a href="register1.php">
                        Log In / Register</a>

                    </li>
                    <li><a href="cart.php">
                        My Shopping Cart</a>

                    </li>

                  </ul>

                      
                </div>
                <div class="col-md-4 pt-3">

                    <h5>
                        SELLING ON THEGIFTERY.COM
                    </h5>
                    <ul>
                      <li><a href="product.php">
                          Sell on thegiftery.com</a>
                      </li>
                   
                    </ul>
  
  
                        
                  </div>
                  <div class="col-md-4  pt-3 text-center">
                      <h5 class="text-left pb-3 ">
                          FOLLOW US
                      </h5>

                      <div class="social m-auto">
                          <ul class="social_ico mr-auto d-flex justify-content-start ">
                            <li><a href="#"><i class="fab fa-fw fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-twitter fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-google-plus-g  fa-2x  "></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-instagram fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-youtube fa-2x "></i></a></li>
                            
                          </ul>
                        </div>
                    </div>
            </div>
          </div>
          </section>
        
                  <section class="footer">
            <div class="container d-flex justify-content-start">
                <p class="text-secondary pt-2 ">Copyright © 2020 UIGRID | All Rights Reserved | 
                  <a href="product.php" class="text-primary text-decoration-none">www.thegiftery.com</a></p>
           
            </div>
        </section>
        </div>
    <script src="js/jquery-3.3.1.min.js"></script>   
            <script src="js/popper.min.js"></script>    
            <script src="js/bootstrap.min.js"></script>
            <script src="js/owl.carousel.min.js"></script> 
            <script src="js/wow.js"></script> 
         <script src="js/pro1.js"></script> 
    </body>
</html>
