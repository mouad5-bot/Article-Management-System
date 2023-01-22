<?php 
    include_once '../classes/category.php';

    //Routing :
    if (isset($_POST['save_cat'])) category();
    if (isset($_GET['id_edit'])) updateCat();
    if (isset($_POST['dcategory'])) deleteCat($_POST['dcategory']);
 var_dump(@$_POST['dcategory']);
    // ************** save category ****************//
    function category()
    {
        $cat = new Category();
        $cat->setId($_POST['id']);   
        $cat->setCatName($_POST['name']);
        $cat->addCategory();

        header('location: ../pages/dashboard.php');
    }

    // ************** get category ****************//
    $cat = new Category();
    $catData = array();
    $catData = $cat->getCategory();
    
    // ************ update | dalate : category ***********//
    function updateCat()
    {
        $categoryId = $_GET['id'];
        $category = new Category($categoryId, '');
        $category->update($newName);
    }

    function deleteCat($id)
    {
        $category = new Category();
        $category->delete($id);
    }
?>

