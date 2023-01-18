
<?php require_once '../config/connection.php'; 
      require_once '../classes/admin.php';

    if (isset($_POST['login'])) login();

    function login(){
        $admin = new Admin();

        $admin->login($_POST['email'], $_POST['password'] );


    }
?>