<?php

include_once '../../config.php';
include_once '../../controllers/CustomerController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $customer_nama = $_POST['customer_nama'];
    $customer_email = $_POST['customer_email'];
    $customer_hp = $_POST['customer_hp'];
    $customer_alamat = $_POST['customer_alamat'];
    $customer_password = $_POST['customer_password'];

    $customerController=new CustomerController($db);
    $result=$customerController->createCustomer($customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password);

    if ($result){
        header("location:customer");
    }else{
        header("location:tambah.php");
    }
}