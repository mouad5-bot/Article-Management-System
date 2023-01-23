<?php 
    include_once '../classes/article.php';

    //Routing :
    if (isset($_POST['save_article'])) article();
    if (isset($_POST['edit_article'])) updateArt(); 
    if (isset($_POST['delet_article'])) deleteArt($_POST['dcategory']);

    
    // ************** save category ****************//
    function article()
    {
        $cat = new Article();
        $cat->setId($_POST['id']);   
        $cat->setCatName($_POST['name']);
        $cat->addCategory();

        header('location: ../pages/dashboard.php');
    }

    // ************** get category ****************//
    $art = new Article();
    $artData = array();
    $artData = $art->getArticle();
    
    // ************ update | delate : category ***********//
    function updateArt()
    {
        //var_dump($_POST);
        $art = new Article();
        $art->setId((int)$_POST['id']);
        $res= $art->update($_POST['name']);
        if($res) 
            header("Location: ../pages/dashboard.php");
    }

    function deleteArt($id)
    {
        $art = new Article();
        $art->delete($id);
    }
?>

