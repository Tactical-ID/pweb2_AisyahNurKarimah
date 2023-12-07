<?php
require '../../index.php';
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
            <h3 class="box-title">Tambah Customer</h3>
            <a href="customer" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
          <form action="proses_tambahCustomer" method="post">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="customer_nama" required="required" placeholder="Masukkan Nama ..">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="customer_email" required="required" placeholder="Masukkan Email ..">
              </div>
              <div class="form-group">
                <label>NO HP</label>
                <input type="text" class="form-control" name="customer_hp" required="required" placeholder="Masukkan NO HP ..">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="customer_alamat" required="required" placeholder="Masukkan Alamat ..">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="customer_password" required="required" min="5" placeholder="Masukkan Password ..">
              </div>
              <table>
                  <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Simpan" onclick="showAlert()"></td>
                  </tr>
             </table>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>