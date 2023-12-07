<?php

class Customer{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllCustomer(){
        $query="SELECT * FROM customer";
        $result=mysqli_query ($this->koneksi, $query);
        return $result;
    }

    public function createCustomer($customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password){
        $query="INSERT INTO customer (customer_nama ,customer_email, customer_hp, customer_alamat, customer_password) 
        VALUES ('$customer_nama' ,'$customer_email', '$customer_hp',' $customer_alamat', '$customer_password')";
        $result=mysqli_query ($this->koneksi, $query);
        IF ($result){
            return true;
        }else{
        return false;
        }
    }

    public function getCustomerById($customer_id)
    {
        $query = "SELECT * FROM customer where customer_id=$customer_id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateCustomer($customer_id, $customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password){
        $query="UPDATE customer set customer_nama='$customer_nama' ,customer_email='$customer_email', customer_hp='$customer_hp', customer_alamat='$customer_alamat', customer_password='$customer_password' where customer_id='$customer_id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }

    public function deleteCustomer($customer_id)
    {
        $query = "DELETE FROM customer WHERE customer_id=$customer_id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        }else{
            return false;
        }
    }
}