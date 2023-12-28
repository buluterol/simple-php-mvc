<?php
namespace App\Model;

class UserModel {
   public function checkToken($token) {
      return file_get_contents("http://192.168.1.101:8080/api/auth/check-token.php");
   }
}
