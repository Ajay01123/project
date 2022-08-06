<?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    //  error_reporting(E_ALL);
    session_start();
    include 'Connection.php';
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $_SESSION['email']=$email;
        $sql = "SELECT * FROM login_tb WHERE `Email` ='$email'  AND  `Password` ='$password' ";
       
        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result) > 0) {
            
            echo "<script> window.location.href ='AdminPanel.php';alert('Login Successfully')</script>";
          


        } else {
            echo "<script> window.location.href ='login.php';alert('Invalid Password and Email')</script>";
           

        }
    }
    ?>