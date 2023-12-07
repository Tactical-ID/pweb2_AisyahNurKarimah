<?php

include_once "../../config.php";
include_once "../../controllers/AdminController.php";
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $admin_id = $_GET['id'];

    $adminController = new AdminController($db);
    $adminData = $adminController->getAdminById($admin_id);

    if ($adminData) {
        if (isset($_POST['submit'])) {
            $admin_nama = $_POST['admin_nama'];
            $admin_username = $_POST['admin_username'];
            $admin_password = $_POST['admin_password'];

            $result = $adminController->updateAdmin($admin_id, $admin_nama, $admin_username, $admin_password);

            if($result) {
                header("location:admin");
            }else {
                header("location:editAdmin");
            }
        }
    } else {
        echo "Admin tidak ditemukan";
    }
}
?>

<div class="content-wrapper">
<section class="content-header">
    <h1>
      Admin
      <small>Data Admin</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="indexx.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Admin</li>
    </ol>
</section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Edit Admin</h3>
            <a href="admin" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <div class="box-body">
          <form action="" method="post">
              <?php 
              $admin_id = $_GET['id'];              
              $adminData = mysqli_query($db, "select * from admin where admin_id='$admin_id'");
              while($d = mysqli_fetch_array($adminData)){
                ?>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="admin_nama" value="<?php echo $d['admin_nama'] ?>" required="required">
                  
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="admin_username" value="<?php echo $d['admin_username'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="admin_password" value="<?php echo $d['admin_password'] ?>" required="required">
                  
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Simpan">
                </div>
                <?php
              }

              ?>
              
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>