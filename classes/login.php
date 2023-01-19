<?php
    include_once 'admin.php';

    class Login extends Admin
    {
        public function isExistAdmin($email){
            
            $sql = "SELECT * FROM `admin` WHERE email =(?)";

            $stmt = Database::connect()->prepare($sql);
            $stmt->execute([$email]);

            return $stmt->rowCount();
            
        }
        
        public function loginAdmin() { 
            $conn = new Database();

            $sql = "SELECT * FROM `admin` WHERE email = ? AND password = ?;";
            $stmt =  $conn->connect()->prepare($sql);
            $stmt->execute([$this->email, $this->password]);
            $admin = $stmt -> fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                
                $_SESSION['name'] = $admin['first_name'];
                $_SESSION['last-name'] = $admin['last_name'];
                $_SESSION['id'] = $admin['id'];

                echo"<script>alert('successfully');document.location='pages/dashboard.php'</script>";
            } else {
                echo"<script>alert('incorrect inputs');document.location='../login.php'</script>";
            }
        }
    }