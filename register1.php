<?php
session_start();
session_unset();
 	include 'client.php';

if(isset($_POST['signin']))
{
	$data=new client();
   	$uname =$_POST['uname'];
   	$email =$_POST['email'];
    $pass =$_POST['pass'];
    $address =$_POST['address'];
   
	$data->Register($uname,$email,$pass,$address);
	if(!isset($_SESSION['loggedin']))
		{
			$_SESSION['redirectURL']=$_SESSION['REQUEST_URI'];
			header('location:login1.php');
		}

}
 
?>


<html> 
  <head>
      <title>Registration</title>
      
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/all.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/register1.css" />
  </head>
    <body>
    
        
        <section class="top">
            <div class="container d-flex justify-content-center text-center py-4">
           <div><a href="register1.php"><h2>TheGiftery</h2></a></div>
            </div>
        </section>
        
        <section class="myform ">
           <div class="container d-flex justify-content-center">
            <form method="post">
                
               <div class=" div-inpt position-relative"> <input id="userName"  class="form-control myinpt" type="text" name="uname" required placeholder="Username" />
                 <i class=" myicone3 fa fa-user"></i>
                </div> 
                
                <div class=" div-inpt position-relative"> <input id="email"          class="form-control myinpt" type="email" name="email" required placeholder="Email" />
                 <i class=" myicone3 fa fa-envelope"></i>
                </div> 
                 <div class=" div-inpt position-relative"> <input id="address"          class="form-control myinpt" type="text" name="address" required placeholder="Address" />
                 <i class=" myicone3 fa fa-address-book"></i>
                </div> 
                
                <div class=" div_inpt position-relative">  
                <input id="input" class="form-control myinpt" type="password" name="pass" required placeholder="password" />
                 <i  class=" myicone fa fa-eye "></i>
                <i  id="myicone"   class=" icone myicone  fa fa-eye-slash"></i>
              
                </div>
                
                <div class="div_inpt div_inpt position-relative">  
                <input id="input2" class="form-control myinpt" type="password" name="C-UserPassword" required placeholder="Confirme password" />
                <i  class=" myicone2 fa fa-eye "></i>
                <i id="myicone2"  class=" icone myicone2 fa fa-eye-slash"></i>
                </div>
                
               <div class="py-2 text-center"> 
                   <input required type="checkbox" class="checkbox"  />
                   <span  class="check-info">I agree to TheGiftery Privacy Police</span></div>
               <div class="text-center py-3"> <button id="myBtn" name="signin" class="mybtn btn btn-primary form
                   " type="submit"> Sign Up</button></div>
                
                <div class="text-center py-2">
                    <a class="forgot-a" href="login1.php">
                  <span class="frogot">Already Have an Account  ?  <span class="create"> Log in  </span></span></a>
                
                </div>
              </form>
            </div>
        </section>
        
        <section class="mb-3 px-5">
            <span class="Copyright">Copyright © 2020 UIGRID | All Rights Reserved | 
                <span class="Copyright-link"><a href="register1.php">www.thegiftery.com</a> </span>
            </span>
        </section>
        
    
    
    
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/register.js"></script>
     </body>
</html>
