<?php
require_once '../config/connection.php'; 
session_start();

    class Admin extends Database{
        protected $id = NULL;
        protected $firstName;
        protected $lastName;
        protected $password;
        protected $email;

        public function __construct ($id=NULL, $fn="" , $ln="" , $pas ="", $emi="" )
        {
            $this->id        = NULL;
            $this->firstName = $fn;
            $this->lasttName = $ln;
            $this->password  = $pas;
            $this->email     = $emi;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setFirstName($fn){
            $this->firstName = $fn;
        }
        public function setLastName($ln){
            $this->lastName = $ln;
        }
        public function setPassword($pas){
            $this->password = $pas;
        }
        public function setEmail($emi){
            $this->email = $emi;
        }
        

        public function getId(){
            return $this->id;
        }
        public function getFirstName(){
            return $this->firstName ;
        }
        public function getLastName(){
            return $this->lastName  ;
        }
        public function getPassword(){
            return $this->password  ;
        }
        public function getEmail(){
            return $this->email  ;
        }
        
        public function getObject($dbObject)
        {
            $this->id = $dbObject->id;
            $this->firstName = $dbObject->first_name;
            $this->lasttName = $dbObject->last_name;
            $this->password = $dbObject->password;
            $this->email = $dbObject->email;
        }

        public function login($email, $password)
        {
            $sql = "SELECT * FROM `admin` WHERE password = ? AND email = ?";
            
            $conn = Database::connect();
            $stmt = $conn->prepare($sql); 
            $stmt->execute([$email, $password]);   
            $arr = $stmt->fetch(PDO::FETCH_ASSOC);
            
            header("Location: ../pages/dashboard.php");
            
        }

        
        public function addAdmin($admin){

            // echo "<pre>";
            // print_r($admin);
            // echo "</pre>";
            // die();
                
            $conn = new Database();
            $sql1 = "INSERT INTO admin(first_name, last_name, email, password) values(?,?,?,?)";
            $res = $conn->connect()->prepare($sql1);
            $res->execute([$admin->firstName, $this->lastName, $this->email, $this->password]);

            //echo"<script>alert('successfully');document.location='../index.php'</script>";
        
        }

        public function addSession(){
          session_start();
          $_SESSION['name'] = $this->name;
          $_SESSION['id'] = $this->id;
        }
    }
?>