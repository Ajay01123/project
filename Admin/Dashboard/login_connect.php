<?php
session_start();
include 'Connection.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
   
    $sql = "SELECT * FROM login_tb WHERE `Email` ='$email'  AND  `Password` ='$password' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
         $_SESSION['status'] = "Login Successfully";
          $_SESSION['status_code']="success";
       
        header('location:AdminPanel.php');
      
    } else {
        $_SESSION['status'] = "Invalid Password and Email";
        $_SESSION['status_code']="error";
        header('location:login.php');
       
    }
}
?>