<?php 
    include_once '../classes/category.php';

    if (isset($_POST['save_cat'])) category();

    function category()
    {
        $cat = new Category();

        $cat->setId($_POST['id']);   
        $cat->setCatName($_POST['name']);
        $cat->addCategory();

        header('location: ../pages/dashboard.php');
    }

?>

