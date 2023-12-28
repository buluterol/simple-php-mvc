<?php
namespace App\Controller;

class AuthController
{
    public function login()
    {
        $text = array();
        $text['title'] = "Login";
        include_once("../app/view/login.php");
    }

    public function gateway()
    {
        $text = array();
        $text['title'] = "Login";
        include_once("../app/model/UserModel.php");

        $model = new \App\Model\UserModel();
        $check_token = $model->checkToken($_GET['user_token']);

        if($check_token == true) {
            $_SESSION['user_token'] = $_GET['user_token'];
            header("Location: /");
        } else {
            header("Location: /login");
            exit;
        }
        
    }

    public function logout() {
        unset($_SESSION['user_token']);
        session_destroy();
        header("Location: /");
    }

}
