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

}
