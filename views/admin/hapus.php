<?php

include_once "../../config.php";
include_once "../../controllers/AdminController.php";

$database = new database();
$db = $database->getKoneksi();

if (isset ($_GET['id'])) {
    $admin_id = $_GET['id'];

    $adminController = new AdminController($db);
    $result = $adminController->deleteAdmin($admin_id);

    if ($result) {
        header("location:admin");
    } else {
        echo "Gagal menghapus data";
    }
}