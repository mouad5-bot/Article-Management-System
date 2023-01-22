<?php
require_once '../config/connection.php'; 
session_start();

    class Category extends Database{
        protected $id = NULL;
        protected $name;

        public function __construct ($id=NULL, $name="")
        {
            $this->id   = NULL;
            $this->name = $name;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setCatName($name){
            $this->name = $name;
        }
        

        public function getId(){
            return $this->id;
        }
        public function getCatName(){
            return $this->firstName ;
        }
        
        public function getObject($dbObject)
        {
            $this->id = $dbObject->id;
            $this->name = $dbObject->name;
        }

        /*********  crud category: *********/
        public function addCategory()
        {
            $db = new Database();
            $sql = "INSERT INTO category(name) VALUES(?)";
            $conn= $db->connect()->prepare($sql);
            $conn->execute(array($this->name));
        }
    }