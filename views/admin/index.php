<?php
//memanggil class model database
include_once "../../config.php";
include_once "../../controllers/AdminController.php";
require '../../index.php';

//instansiasi class database
$database=new database;
$db = $database->getKoneksi();

$adminController = new AdminController($db);
$admin= $adminController->getAllAdmin();
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
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Admin</h3>
            <a href="tambahAdmin" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Admin Baru</a>              
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th width="5%">Opsi</th>
                  </tr>
                </thead>

<?php
$no=1;
foreach($admin as $x) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x ['admin_nama'] ?></td>
    <td><?php echo $x ['admin_username'] ?></td>
    <td><?php echo $x ['admin_password'] ?></td>
    <td>
        <a class = "btn btn-warning" href = "editAdmin?id=<?php echo $x ['admin_id'];?>"><i class="fa fa-cog"></i> Edit</a>
        <a class = "btn btn-danger" href = "hapusAdmin?id=<?php echo $x ['admin_id'];?>"
        onclick = "return confirm('Apakah yakin akan menghapus...?')"><i class="fa fa-trash"></i> Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</section>
</div>