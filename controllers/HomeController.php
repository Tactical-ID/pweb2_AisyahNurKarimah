<?php
class HomeController {
    public function home(){
        header("location:http://localhost/pweb2/studikasus2/home/index.php");
    }

    public function admin(){
        header("location:http://localhost/pweb2/studikasus2/admin/index.php");
    }

    public function customer(){
        header("location:http://localhost/pweb2/studikasus2/customer/index.php");
    }

}