<?php
session_start();
include 'Connection.php';
// ini_set('display_errors', 1);
//  ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);

if(isset($_POST['submit']))
{
   $content=$_POST['editor'];
   $content=addslashes($content);

   $sql= "SELECT * FROM blog_tb";
   $msg;
   $result =mysqli_query($conn, $sql);
   if(mysqli_num_rows($result)>0)
   {
      
     $query="UPDATE blog_tb SET  content = '$content' ";
     
     $result =mysqli_query($conn, $query);
     if($result){
      $msg = "updated";
      }else{
        $msg= " not updated";
      }
     
        
   }
   else{
      $sq="INSERT INTO `blog_tb` (`content`,`Date_time`)
       VALUES ('$content',NOW())";
  
      $result =mysqli_query($conn, $sq);
      if($result){
        $msg= "inserted";
      }else{
        $msg= " not inserted";
      }
      

   }
        echo "<script>alert('".$msg."')</script>";
       
   
  }
 






?>