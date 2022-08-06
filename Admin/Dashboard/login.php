

 
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link href="../../Css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <style>
        
     </style>
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
                 <form action="login_connect.php" method="POST" onsubmit="return validation()">
                     <label for="email">Email ID</label>&nbsp &nbsp
                     <input type="text" id="email" name="email" class="mx-5 " onchange="return validation()" outochange="off">
                     <span class="text-danger" id="semail"></span><br><br><br>
                     <label for="password">Password</label>
                     <input type="text" id="password" class="mx-5" name="password" onchange="return validation()">
                     <span class="text-danger" id="pass"></span><br><br>
                     <div class=" text-center">
                         <button type="submit" class="btn btn-success  btn-lg  text-center" id="login" name="login">Login </button>
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