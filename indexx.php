<?php
//memanggil class model database
include_once "config.php";
require 'index.php';

// Instantiate the database class
$database = new database;
$db = $database->getKoneksi();

?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <?php 
            $query = "SELECT * FROM customer";
            $result = mysqli_query($db, $query);
            ?>
            <h3><?php echo mysqli_num_rows($result); ?></h3>
            <p>Jumlah Customer</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php 
            $query = "SELECT * FROM admin";
            $result = mysqli_query($db, $query);
            ?>
            <h3><?php echo mysqli_num_rows($result); ?></h3>
            <p>Jumlah Pengguna</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
</div>
