<?php
session_start();
include '../Admin/Dashboard/Connection.php';
?>





<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../Css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>

    <div class="container-fluid ">
        <div class="row ">

            <!-- <div class="col-sm-12 "> -->
            <!-- <div class="col-sm-2 " style="min-height:90px;background:black;">
            <img src="../Image/image 2.png" class="img">
          </div>-->
            <div class="col-sm-12 inner1">
                <h1 style="text-align:center;color:white; font-weight: bold;font-size: 50px;" class="mt-3">William Felton Russell</h1>
                <span> <img src="../Image/image 2.png" class="img"></span>
                <span> <img src="../Image/image.png" class="img1"></sanp>
            </div>
            <!-- <div class="col-sm-2 inner2" style="min-height:90px;background:black">
            <img src="../Image/image.png" class="img1">
          </div> -->

        </div>
        <div class="row">
            <div class="col-sm-2 " style="min-height: 600px; background:green;">

                <h5 class="mt-2">NBA RECRODS<h5>
                        <hr class="line">
                        <p class="out">11 Times NBA <br>
                            Champaion: <br>1957,1959-1966 <br>1968 <br> 1969
                        </p>

                        <hr class="line">
                        <p class="out">5*NBA Most <br>
                            Valuable Player <br>1958,1961-1963,<br>1965
                        </p>

                        <hr class="line">
                        <p class="out">12*NBA All-Star
                            <br> (1958-1969)
                        </p>

                        <hr class="line">
                        <p class="out">NBA All-star Game<br>
                            MVP(1963)
                        </p>
                        <hr class="line">

            </div>
            <div class="col-sm-8  inner">
                <?php
                $query = "SELECT * FROM blog_tb";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        //echo $row["id"];
                        echo $row["content"];
                    }
                }
                ?>
            </div>
            <div class="col-sm-2" style="min-height: 500px; background:green; ">
                <h5 class="mt-2">NBA RECRODS<h5>
                        <hr class="line">
                        <p class="out">11 Times NBA <br>
                            Champaion: <br>1957,1959-1966 <br>1968 <br> 1969
                        </p>
                        <hr class="line">
                        <p class="out">5*NBA Most <br>
                            Valuable Player <br>1958,1961-1963,<br>1965
                        </p>
                        <hr class="line">
                        <p class="out">12*NBA All-Star
                            <br> (1958-1969)

                        </p>
                        <hr class="line">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 " style="min-height:70px; background:black;">
                <h6 class="text-center mt-4">Copyright @ 2022 public privacy policy <h6>
            </div>
        </div>
    </div>




</body>

</html>