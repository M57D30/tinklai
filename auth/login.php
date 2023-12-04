<?php
        require_once __DIR__ . '/../db/connection.php' ;
        
        if(isset($_POST['login'])){
            $email =  $_POST['email'];
            $password = $_POST['password'];

            $select = mysqli_query($connection, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
            $row = mysqli_fetch_array($select);

            if(is_array($row)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Invalid email or password");';
                echo 'window.location.href = "/login";';
                echo '</script>';
            }
        }
        if(isset($_SESSION['email'])){
            header("Location: /dashboard");
        }
        ?>