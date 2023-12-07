<?php
//memanggil class model database
include_once "../../config.php";
include_once "../../controllers/CustomerController.php";
require '../../index.php';

//instansiasi class database
$database=new database;
$db = $database->getKoneksi();

$customerController = new CustomerController($db);
$customer= $customerController->getAllCustomer();
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
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Customer</h3>
            <a href="tambahCustomer" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Customer Baru</a>              
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NO HP</th>
                  <th>Alamat</th>
                  <th>Password</th>
                  <th width="10%">Opsi</th>
                </tr>
                </thead>

<?php
$no=1;
foreach($customer as $x) {
?>
<tr>
<td><?php echo $no++ ?></td>
    <td><?php echo $x ['customer_nama'] ?></td>
    <td><?php echo $x ['customer_email'] ?></td>
    <td><?php echo $x ['customer_hp'] ?></td>
    <td><?php echo $x ['customer_alamat'] ?></td>
    <td><?php echo $x ['customer_password'] ?></td>
    <td>
        <a class = "btn btn-warning" href = "editCustomer?id=<?php echo $x ['customer_id'];?>"><i class="fa fa-cog"></i> Edit</a>
        <a class = "btn btn-danger" href = "hapusCustomer?id=<?php echo $x ['customer_id'];?>"
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