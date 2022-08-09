<?php
session_start();
include 'Connection.php';
// ini_set('display_errors', 1);
//  ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);

if (isset($_POST['submit'])) {
   $content = $_POST['editor'];
   $content = addslashes($content);

   $sql = "SELECT * FROM blog_tb  ";
   //$msg;
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      $query = "UPDATE blog_tb SET  content = '$content' ";

      $result = mysqli_query($conn, $query);
      if ($result) {
         $_SESSION['user'] = "Data updated";
         // $_SESSION['name_code'] = "success";
      } else {
         $_SESSION['name'] = "Data not updated";
         
      }
   } else {
      $sq = "INSERT INTO `blog_tb` (`content`,`Date_time`)
       VALUES ('$content',NOW())";

      $result = mysqli_query($conn, $sq);
      if ($result) {
         $_SESSION['name_code'] = "Data Inserted";
         
      } else {
         $_SESSION['insert'] = "Data not Inserted";
         
      }
   }
?>
  
<?php

}







?>