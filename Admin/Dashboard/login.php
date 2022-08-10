<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);

//session_start();

include 'login_connect.php';
?>
  
  <?php
    if (isset($_SESSION['status'])) {
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> <?php echo $_SESSION['status'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  
    <?php
      unset($_SESSION['status']);
    }
    ?>


 
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link href="../../Css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
 </head>

 <body>

     <div class="container-fluid">
    
         <div class="row">
             <div class="col-sm-12" style="min-height:100px;background:black">
                 <h1 class="text-center mt-3" style="color:white ">William Felton Russell </h1>
             </div>
        
           
         </div>
         <div class="row mt-4">
             <div class="col-sm-1"></div>
             <div class="col-sm-4 mt-5">

                 <img src="../../Image/3.png" class="rounded" width="100% " height="390">
             </div>
             <div class="col-sm-1 mt-5 ">
                 <div class="vl mx-5"></div>
                
             </div>

           


                
             <div class="col-sm-5 mt-5" style="border:2px solid white;background:whitesmoke">
            
                 
                 <h1 class="text-center mt-5" style="font-size:25px;">Admin Login</h1>
                 <form action="login_connect.php" method="POST"id="form" onsubmit="return validation()">
                     <label for="email">Email ID</label>&nbsp &nbsp
                     <input type="email" id="email"  name="email" class="mx-5 "  value="<?php echo $_SESSION['email']; unset($_SESSION['email']);?>" >
                     <span class="text-danger" id="semail" ></span><br><br><br>
                     <label for="password">Password</label>
                     <input type="password" id="password" class="mx-5" name="password" value="" >
                     <span class="text-danger" id="pass"></span><br><br>
                     <div class=" text-center">
                         <button type="submit" class="btn btn-success  btn-lg  text-center"  name="login" value="submit" id="login">Login </button>
                     </div>
                 </form>
             </div>
         </div>
         <h2 style="text-align:center;font-family: Arial, Helvetica, sans-serif;" class="mt-5">"You Can do anything you want to do if you want it bad enough" -William Russell.</h2>
     </div>
   

    <script src="../../js/javascript.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   


      

 </body>

 </html>