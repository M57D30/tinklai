<?php



// include __DIR__ . '/../helper.php';
require_once __DIR__ . '/../db/config.php'; // Database configuration
include_once __DIR__ . '/../db/DatabaseConnection.php';
session_start();


class AuthController
{
    private $connection; 
    public function __construct()
    {
        $db = new DatabaseConnection();
        $this->connection = $db->getConnection();
        
        $this->IsLoggedIn();
    }

    public function IsLoggedIn()
    {
        if(!isset($_SESSION["authenticated"]))
        {
            header('Location: /login');
            return false;
        }
        return true;
    }

    public function authDetail()
    {
        $checkAuth = $this->IsLoggedIn();
        if($checkAuth)
        {
            $user_id = $_SESSION['auth_user']['user_id'];
            $query = "SELECT * FROM `user` WHERE `id` = '$user_id'";
            $user = $this->connection->query($query);

            if($user->num_rows > 0)
            {
                $data = $user->fetch_assoc();
                return $data;
            } else {
                echo "Error in authentication.";
                header('Location: /login');
            }


        }
        echo "Login failed";
    }

    public function admin()
    {
        $user_id = $_SESSION['auth_user']['user_id'];
        // debug_to_console( $_SESSION['auth_user']['user_name']);

        $query = "SELECT * FROM `user` WHERE `id` = '$user_id' and `role`= 'admin'";
        $admin = $this->connection->query($query);
        // debug_to_console($admin->fetch_array());
        if($admin->num_rows == 1)
        {
            return true;
        }
        else{
            echo '<script type="text/javascript">';
            echo 'alert("Reikia administratoriaus teisių.");';
            echo 'window.location.href = "/";';
            echo '</script>';
        }
    }
}

$authenticated = new AuthController();

?>