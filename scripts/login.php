
<?php require_once 'config/connection.php'; 
      require_once '../classes/admin.php';

    if (isset($_POST['login'])) login();


    function login(){
        $admin = new Admin();

        $admin->setEmail($_POST['email']);

    if( $admin->isExistAdmin($admin->getEmail())){

        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['password']);

        $admin->loginAdmin();
    }else{

        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['password']);

        $admin->loginSpectator();
    }

    }
?>