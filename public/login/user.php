<?php session_start(); 

require_once __DIR__ . '/../../helper.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome
        <?php 
        debug_to_console($_SESSION['auth_user']);
        $userName = $_SESSION['auth_user']['user_name'];
        echo "User Name: " . $userName;?>
    </h1>
    <form action="/logout" method="post">
        <input type="submit" name="logout" value="LOG OUT" />
    </form>

</body>

</html>