<?php
include 'dbcon.php';
$result = $con->query("SELECT img FROM wish");
$result1 = $con->query("SELECT img FROM notice");
$result2 = $con->query("SELECT img FROM video");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <?php 
  include 'UpcomingNews.php'; 
  ?>

  <style>
    .head{
      font-size: 87px;
      background-color: yellow;
      text-align: center;
      /* position:fixed; */
      width: 100%;

    }
    .container-fluid {
      background-color: black;
      width: 100%;
      height: 100%;

      display: flex;
      flex-direction: row;
      background-color: black;

      margin-left: 0px;
      margin-right: 0px;
      padding: 5px;



    }

    .justify-content-left {
      background-color: black;
      width: 650px;
      height: 750px;
      background-size: 100% 100%;




    }


    /* div for 3ta jaka */
    .carousel-inner {

      border: 5px solid grey;
      /* width: 650px;
      height: 700px;  */

    }

    /* center */
    .justify-content-center {
      background-color: black;
      width: 650px;
      height: 750px;
      box-sizing: border-box;
      background-size: 100% 100%;
      grid-template-rows: 120px 250px;
      display: grid;



    }

    .justify-content-right {
      background-color: black;
      width: 650px;
      height: 750px;
      margin-right: 0px;
      background-size: 100% 100%;
      float: right;
      grid-template-rows: 80px 200px;
      display: grid;
      justify-content: start;



    }
    
   
  </style>
</head>

<body>
  <div class="head">
  <img class="image" src="image/LOGO FINAL.png" alt="" align="left" width="150" lenght="200">
    <b>DIGITAL NOTICE BOARD</b>
  </div>

  <!-- main div container-fluid -->
  <div class="container-fluid">
    <div class="row justify-content-left">
      <div class="col">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="10000">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <?PHP
            $i = 0;
            foreach ($result as $key => $row) {
              # code...
              $actives = '';
              if ($i == 0) {
                $actives = 'active';
              }
            ?>
              <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

            <?php $i++;
            } ?>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <?PHP
            $i = 0;
            foreach ($result as $key => $row) {
              # code...
              $actives = '';
              if ($i == 0) {
                $actives = 'active';
              }
            ?>
              <div class="carousel-item <?= $actives; ?>">
                <img src="<?= $row['img'] ?>" width="650px" height="750px">
              </div>
            <?php $i++;
            } ?>

          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
      </div>
    </div>



    <!-- //for notice...... -->




    <div class="row justify-content-center">
      <div class="col">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="10000">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <?PHP
            $i = 0;
            foreach ($result1 as $key => $row) {
              # code...
              $actives = '';
              if ($i == 0) {
                $actives = 'active';
              }
            ?>
              <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

            <?php $i++;
            } ?>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <?PHP
            $i = 0;
            foreach ($result1 as $key => $row) {
              # code...
              $actives = '';
              if ($i == 0) {
                $actives = 'active';
              }
            ?>
              <div class="carousel-item <?= $actives; ?>">
                <img src="<?= $row['img'] ?>" width="650px" height="750px">
              </div>
            <?php $i++;
            } ?>

          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
      </div>
    </div>






    <!-- //for videdo -->

    <div class="row justify-content-right">
      <div class="col">
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="10000">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <?PHP
            $i = 0;
            foreach ($result2 as $key => $row) {
              # code...
              $actives = '';
              if ($i == 0) {
                $actives = 'active';
              }
            ?>
              <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>

            <?php $i++;
            } ?>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <?PHP
            $i = 0;
            foreach ($result2 as $key => $row) {
              # code...
              $actives = '';
              if ($i == 0) {
                $actives = 'active';
              }
            ?>
              <div class="carousel-item <?= $actives; ?>">
                <img src="<?= $row['img'] ?>" width="650px" height="750px">
              </div>
            <?php $i++;
            } ?>

          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
      </div>

      <!-- upcoming news -->
      

    </div>




    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>