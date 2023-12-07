<?php

include_once "../../models/Customer.php";

class CustomerController{
    private $model;

    public function __construct($db)
    {
        $this->model = new Customer($db);
    }

    public function getAllCustomer()
    {
    return $this->model->getAllCustomer();
    }

    public function createCustomer($customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password)
    {
        return $this->model->createCustomer($customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password);
    }

    public function getCustomerById($customer_id)
    {
        return $this->model->getCustomerById($customer_id);
    }

    public function updateCustomer ($customer_id, $customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password)
    {
        return $this->model->updateCustomer($customer_id, $customer_nama ,$customer_email, $customer_hp, $customer_alamat, $customer_password);
    }

    public function deleteCustomer ($customer_id)
    {
        return $this->model->deleteCustomer($customer_id);
    }
 
}