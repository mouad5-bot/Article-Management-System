
<?php require_once '../config/connection.php'; 
      require_once '../classes/login.php';

    if (isset($_POST['login'])) loginCheck();

    function loginCheck(){
        $admin = new Admin();

        $admin->login($_POST['email'], $_POST['password'] );


    } 

    
?>