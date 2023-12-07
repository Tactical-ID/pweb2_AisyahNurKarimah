<?php

include_once "../../config.php";
include_once "../../controllers/CustomerController.php";
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];

    $customerController = new CustomerController($db);
    $customerData = $customerController->getCustomerById($customer_id);

    if ($customerData) {
        if (isset($_POST['submit'])) {
            $customer_nama = $_POST['customer_nama'];
            $customer_email = $_POST['customer_email'];
            $customer_hp = $_POST['customer_hp'];
            $customer_alamat = $_POST['customer_alamat'];
            $customer_password = $_POST['customer_password'];

            $result = $customerController->updateCustomer($customer_id, $customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password);

            if($result) {
                header("location:customer");
            }else {
                header("location:edit.php");
            }
        }
    } else {
        echo "Customer tidak ditemukan";
    }
}
?>

<div class="content-wrapper">
<section class="content-header">
    <h1>
      Customer
      <small>Data Customer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="indexx.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Customer</li>
    </ol>
</section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Edit Customer</h3>
            <a href="customer" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <div class="box-body">
          <form action="" method="post">
              <?php 
              $customer_id = $_GET['id'];              
              $customerData = mysqli_query($db, "select * from customer where customer_id='$customer_id'");
              while($d = mysqli_fetch_array($customerData)){
                ?>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="customer_nama" value="<?php echo $d['customer_nama'] ?>" required="required">
                  
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="customer_email" value="<?php echo $d['customer_email'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>NO HP</label>
                  <input type="text" class="form-control" name="customer_hp" value="<?php echo $d['customer_hp'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="customer_alamat" value="<?php echo $d['customer_alamat'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="customer_password" value="<?php echo $d['customer_password'] ?>" required="required">
                  
                </div>

                <tr>
                    <td></td>
                     <td>
                        <input type="submit" name="submit" value="Simpan">
                    </td>
                 </tr>
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