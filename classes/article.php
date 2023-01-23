<?php
require_once '../config/connection.php'; 
session_start();

    class Article extends Database{
        protected $id;
        protected $image;
        protected $category;
        protected $title;
        protected $description;

        public function __construct ($id=NULL, $img="", $cat="", $tit="", $desc="")
        {
            $this->id          = $id;
            $this->image       = $img;
            $this->category    = $cat;
            $this->title       = $tit;
            $this->description = $desc;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setImage($img){
            $this->image = $img;
        }
        public function setCategory($cat){
            $this->category = $cat;
        }
        public function setTitle($tit){
            $this->title = $tit;
        }
        public function setDescription($desc){
            $this->description = $desc;
        }
        

        public function gettId(){
            return $this->id;
        }
        public function gettImage(){
            return $this->image;
        }
        public function gettCategory(){
            return $this->category;
        }
        public function gettTitle(){
            return $this->title;
        }
        public function gettDescription(){
            return $this->description;
        }
        
        // public function getObject($dbObject)
        // {
        //     $this->id = $dbObject->id;
        //     $this->name = $dbObject->name;
        // }

        /*********  crud category: *********/
        public function addCategory()
        {
            $db = new Database();
            $sql = "INSERT INTO category(name) VALUES(?)";
            $conn= $db->connect()->prepare($sql);
            $conn->execute(array($this->name));
        }

        public function getCategory()
        {
            $db = new Database();
            $sql = "SELECT * FROM `category`";
            $stmt = $db->connect()->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
            return $categories;
        }
        
        public function update($newName)
        {
            $db = new Database();
            $this->name = $newName;
            $req = "UPDATE category SET name = ? WHERE id = ?";
            $stmt = $db->connect()->prepare($req);
            return $stmt->execute([$newName, $this->id]);   
        }
        public function delete($id)
        {
            $db = new Database();
            $req = "DELETE FROM category WHERE id = :id";
            $stmt = $db->connect()->prepare($req);
            $stmt -> bindParam(':id',$id);
            $stmt->execute();
        }
    }