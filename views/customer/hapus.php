<?php

include_once "../../config.php";
include_once "../../controllers/CustomerController.php";

$database = new database();
$db = $database->getKoneksi();

if (isset ($_GET['id'])) {
    $customer_id = $_GET['id'];

    $customerController = new CustomerController($db);
    $result = $customerController->deleteCustomer($customer_id);

    if ($result) {
        header("location:customer");
    } else {
        echo "Gagal menghapus data";
    }
}