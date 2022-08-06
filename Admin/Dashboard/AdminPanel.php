<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['email'])) {
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="../ckeditor/ckeditor.js"></script>
  <script src="../ckfinder/ckfinder.js"></script>
  <script src="../ckeditor/plugin.js"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2" style="min-height:100px;background:black;"></div>
      <div class="col-sm-8" style="min-height:100px;background:black;"></div>
      <div class="col-sm-2" style="min-height:100px;background:black;">
        <a href="logout.php" class="btn btn-primary mt-4">Logout</a>
      </div>


    </div>
    <div class="row mt-5">

      <form method="POST" action="#">
        <textarea id="editor" name="editor"  rows="10" cols="80">


</textarea><br>
        <button type="submit" name="submit" class="btn btn-success ">Submit</button>

      </form>
    </div>
  </div>

  <script>
    var ckeditordata = CKEDITOR.replace('editor');
    CKFinder.setupCKEditor(ckeditordata);
     CKEDITOR. config.extraPlugins = 'colorbutton';
  </script>

</body>

</html>