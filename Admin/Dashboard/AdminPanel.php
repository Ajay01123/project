<?php
session_start();
include 'connect.php';
//include 'login_connect.php';

if (!isset($_SESSION['email'])) {
  header('location:login.php');
}
?>

<?php
  if (isset($_SESSION['user'])) {
  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> <?php echo $_SESSION['user'];?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php
    unset($_SESSION['user']);
  }
  ?>
  <?php
  if (isset($_SESSION['name'])) {
  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> <?php echo $_SESSION['name'];?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php
    unset($_SESSION['name']);
  }
  ?>
  <?php
  if (isset($_SESSION['name_code'])) {
  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> <?php echo $_SESSION['status'];?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php
    unset($_SESSION['name_code']);
  }
  ?>
  <?php
  if (isset($_SESSION['insert'])) {
  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> <?php echo $_SESSION['insert'];?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php
    unset($_SESSION['insert']);
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
  <style>
    .cke_contents {
      height: 300px !important;
    }
  </style>

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2" style="min-height:100px;background:black;"></div>
      <div class="col-sm-8" style="min-height:100px;background:black;">
        <h1 class="text-center mt-4 " style="color:aliceblue">Welcome To Dashboard </h1>
      </div>
      <div class="col-sm-2" style="min-height:100px;background:black;">
        <a href="logout.php" class="btn btn-primary mt-4">Logout</a>
      </div>


    </div>
    <div class="row mt-5">
      <div class="col-sm-5"></div>
      <form method="POST">

        <textarea id="editor" name="editor">

        <?php
        $query = "SELECT * FROM blog_tb";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo $row['content'];
          }
        }
        ?>
       </textarea>


        <br>
        <button type="submit" name="submit" class="btn btn-success ">Submit</button>

      </form>
    </div>
  </div>


  <script src="../ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../ckfinder/ckfinder.js"></script>
  <script>
    var ckeditordata = CKEDITOR.replace('editor');
    CKFinder.setupCKEditor(ckeditordata);
    CKEDITOR.config.extraPlugins = 'colorbutton';
    // CKEDITOR.config.Plugins = 'exportpdf';
    //  ckeditordata.config.extraPlugins = 'youtube';
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    <?php
    if (isset($_SESSION['status']) && ($_SESSION['status'] != "")) {
    ?>
      swal({
        title: "<?php echo $_SESSION['status']; ?>",

        icon: "success",
      });
    <?php
      unset($_SESSION['status']);
    }
    ?>
  </script>



  




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>