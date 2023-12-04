<?php

require_once __DIR__ . '/../db/config.php'; // Database configuration
include_once __DIR__ . '/../controllers/UserLoginController.php';


if(isset($_POST['logout'])) {
    $auth = new UserLoginController();
    $auth->logout();
}
else{
    echo 'atsiloginta';
}

// session_start();
//     if(session_destroy()){
//         header("location:/login");
//     }
?>