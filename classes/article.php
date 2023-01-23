<?php
require_once '../config/connection.php'; 

    class Article extends Database{
        protected $id;
        protected $image;
        protected $category;
        protected $title;
        protected $description;

        public function __construct ($id=NULL, $img="", $cat="", $title="", $desc="")
        {
            $this->id          = $id;
            $this->image       = $img;
            $this->category    = $cat;
            $this->title       = $title;
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

        /*********  crud Post: *********/
        public function addPost()
        {
            $db = new Database();

            $sql = "INSERT INTO post(image , category, title, description) VALUES(?,?,?,?)";
            $conn= $db->connect()->prepare($sql);
            $conn->execute([$this->image, $this->category, $this->title, $this->description ]);
        }

        function showPosts()
        {
            $db = new Database();
            $sql = "SELECT * FROM `post`";
            $stmt = $db->connect()->prepare($sql);
            $stmt->execute();
            $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $posts;
        }

        
        
        // public function update($img, $cat, $title, $des)
        // {
        //     $db = new Database();
        //     $this->image = $img;
        //     $this->category = $cat;
        //     $this->title = $title;
        //     $this->description = $desc;
        //     $req = "UPDATE category SET name = ? WHERE id = ?";
        //     $stmt = $db->connect()->prepare($req);
        //     return $stmt->execute([$newName, $this->id]);   
        // }

        // public function delete($id)
        // {
        //     $db = new Database();
        //     $req = "DELETE FROM category WHERE id = :id";
        //     $stmt = $db->connect()->prepare($req);
        //     $stmt -> bindParam(':id',$id);
        //     $stmt->execute();
        // }
    }

    // function image()
        // {
        //     $img_name = $_FILES['image']['name'];
        //     $img_size = $_FILES['image']['size'];
        //     $tmp_name = $_FILES['image']['tmp_name'];
        //     $error    = $_FILES['image']['error'];
        //     $new_img_name = "";

        //     if ($error === 0)
        //     {
        //         if ($img_size > 170000) 
        //         {
        //             $_SESSION['error'] = "Sorry, your file is too large.";
        //             header('location: ../index.php');
        //         }
        //         else
        //         {
        //             // ex = extension  | lc = lowerCase 
        //             $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); 
        //             $img_ex_lc = strtolower($img_ex);

        //             $allowed_exs = array("jpg", "jpeg", "png"); 

        //             if (in_array($img_ex_lc, $allowed_exs)) 
        //             {
        //                 $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        //                 $img_upload_path = '../Assets/upload_image/'.$new_img_name;
        //                 move_uploaded_file($tmp_name, $img_upload_path);
        //             }
        //             else {
        //                 $_SESSION['error'] = "You can't upload files of this type";
        //                 header('location: ../index.php'); 
        //             }
        //         }
        //     }
        //     else
        //     {
        //         $_SESSION['error'] = 'unknown error occurred!';
        //         header('location: ../index.php'); 
                
        //     }
        //     return $new_img_name;
        // }