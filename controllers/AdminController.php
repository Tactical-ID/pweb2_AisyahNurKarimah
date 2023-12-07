<?php

include_once "../../models/Admin.php";

class AdminController{
    private $model;

    public function __construct($db)
    {
        $this->model = new Admin($db);
    }

    public function getAllAdmin()
    {
    return $this->model->getAllAdmin();
    }

    public function createAdmin($admin_nama, $admin_username, $admin_password)
    {
        return $this->model->createAdmin($admin_nama, $admin_username, $admin_password);
    }

    public function getAdminById($admin_id)
    {
        return $this->model->getAdminById($admin_id);
    }

    public function updateAdmin ($admin_id, $admin_nama, $admin_username, $admin_password)
    {
        return $this->model->updateAdmin($admin_id, $admin_nama, $admin_username, $admin_password);
    }

    public function deleteAdmin($admin_id)
    {
        return $this->model->deleteAdmin($admin_id);
    }
 
}