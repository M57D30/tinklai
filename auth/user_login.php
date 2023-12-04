<?php

require_once __DIR__ . '/../db/config.php'; // Database configuration
include_once __DIR__ . '/../controllers/UserLoginController.php';


if(isset($_POST['login']))
{
    $email =  $_POST['email'];
    $password = $_POST['password'];

    $auth = new UserLoginController;
    $checkLogin = $auth->userLogin($email, $password);
    if($checkLogin)
    {
        echo 'Login successful';
        header("Location: /dashboard");
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid email or password");';
        echo 'window.location.href = "/login";';
        echo '</script>';
    }
}

?>