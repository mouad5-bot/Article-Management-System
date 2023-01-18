<?php
    include_once 'admin.php';

    class Login extends Admin
    {
        public function isExistAdmin($email){
            $database = new Database();
            $sql = "SELECT * FROM `admin` WHERE email =?";

            $stmt = $database->connect()->prepare($sql);
            $stmt->execute([$email]);

            return $stmt->rowCount();
            
        }
    }