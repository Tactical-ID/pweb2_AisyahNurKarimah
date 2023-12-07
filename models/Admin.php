<?php

class Admin{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllAdmin(){
        $query="SELECT * FROM admin";
        $result=mysqli_query ($this->koneksi, $query);
        return $result;
    }

    public function createAdmin($admin_nama, $admin_username, $admin_password){
        $query = "INSERT INTO admin (admin_nama, admin_username, admin_password, admin_foto) 
          VALUES ('$admin_nama', '$admin_username', '$admin_password', 'default_value_or_empty')";
        $result=mysqli_query ($this->koneksi, $query);
        IF ($result){
            return true;
        }else{
            return false;
        }
    }

    public function getAdminById($admin_id)
    {
        $query = "SELECT * FROM admin where admin_id=$admin_id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateAdmin($admin_id, $admin_nama, $admin_username, $admin_password){
        $query="UPDATE admin set admin_nama='$admin_nama', admin_username='$admin_username', admin_password='$admin_password' where admin_id='$admin_id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }

    public function deleteAdmin($admin_id)
    {
        $query = "DELETE FROM admin WHERE admin_id=$admin_id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}