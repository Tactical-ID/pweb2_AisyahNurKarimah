<?php

include_once '../../config.php';
include_once '../../controllers/AdminController.php';
require '../../index.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $admin_nama = $_POST['admin_nama'];
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];

    $adminController=new AdminController($db);
    $result=$adminController->createAdmin($admin_nama, $admin_username,$admin_password);

    if ($result){
        header("location:admin");
    }else{
        header("location:tambah.php");
    }
}