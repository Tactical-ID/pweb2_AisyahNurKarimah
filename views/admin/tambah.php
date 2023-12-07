<?php
require '../../index.php';
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
            <h3 class="box-title">Tambah Admin</h3>
            <a href="admin" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
          <form action="proses_tambahAdmin" method="post">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="admin_nama" required="required" placeholder="Masukkan Nama ..">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="admin_username" required="required" placeholder="Masukkan Username ..">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="admin_password" required="required" min="5" placeholder="Masukkan Password ..">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Simpan" onclick="showAlert()">
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>