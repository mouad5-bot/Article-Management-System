<?php
include_once 'database.class.php';
session_start();

    abstract class Admin extends Database{
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

        public static function viewLandingPage(){
            echo "test landing page";
        }

        public function addSession(){
          session_start();
          $_SESSION['name'] = $this->name;
          $_SESSION['id'] = $this->id;
        }
    }
?>