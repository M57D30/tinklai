<?php

include './helper.php';
require_once __DIR__ . '/../db/config.php'; // Database configuration
include_once __DIR__ . '/../controllers/UserLoginController.php';


if(isset($_POST['login']))
{
    $email =  $_POST['email'];
    $password = $_POST['password'];
    
    debug_to_console($email. "    " . $password);

    $auth = new UserLoginController;
    $checkLogin = $auth->userLogin($email, $password);
    if($checkLogin)
    {
        echo 'Login successful';
       
        switch($_SESSION['role'])
        {
            case 'admin':
                header("Location: /admin");
                break;
            case 'patient':
                header("Location: /patient");
                break;
            case "doctor":
                header("Location: /doctor");
                break;
            case 'lab_worker':
                header("Location: /labWorker");
                break;
            // case 'guest':
            //     header("Location: /login");
            //     break;
        }
        
        // header("Location: /myProfile");
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid email or password");';
        echo 'window.location.href = "/login";';
        echo '</script>';
    }
}

debug_to_console("TAIP");

?>