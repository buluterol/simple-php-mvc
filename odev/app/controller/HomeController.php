<?php
namespace App\Controller;

class HomeController {
   public function index() {
      if (!isset($_SESSION['user_token'])) {

         header("Location: /login");
         exit;
     }
     
      include_once("../app/model/HomeModel.php");

      $model = new \App\Model\HomeModel();
      $text = array();
      $data = $model->getData();
      $text['title'] = "Dashboard";

      include_once("../app/view/home.php");
   }
}
