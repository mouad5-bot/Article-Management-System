<?php 
    include_once '../classes/article.php';

    //Routing :
    if (isset($_POST['save_articl'])) saveArticle();
    if (isset($_POST['edit_articl'])) updateArt(); 
    // if (isset($_POST['delet_articl'])) deleteArt($_POST['dcategory']);

    // ************** save Post ****************//


    function saveArticle()
    {
        $cat = new Article();
        $image =$cat->uploadimage();
        $cat->setTitle($_POST['add_title_post']);
        $cat->setCategory($_POST['category']);
        $cat->setDescription($_POST['description']);
        $cat->addPost($image);

        header('location: ../pages/dashboard.php');
    }

    //affichage d'article
    $post = new Article();
    $postData = array();
    $postData = $post->showPosts();

    // function uploadimage(){
        // if (isset($_FILES['image']))  image();
    // }
    
    // ************ update | delate : post ***********//
    function updateArt()
    {
        var_dump($_POST);
        $art = new Article();
        $art->setId($_POST['id']);
        $res= $art->update($_FILES['image'],  $_POST['title'], $_POST['category'], $_POST['description']);

        if($res) 
            header("Location: ../pages/dashboard.php");
    }

    // function deletePost($id)
    // {
        // $art = new Article();
        // $art->delete($id);
    // }
?>

