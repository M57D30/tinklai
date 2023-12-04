<?php


require_once __DIR__ . '/../db/DatabaseConnection.php';
require_once __DIR__ . '/../helper.php';


class UserLoginController
{
    private $connection;
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->connection = $db->getConnection();
    }

    public function userLogin($email, $password)
    {
        $query = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
        // $result = mysqli_query($this->connection, $query);
        $result = $this->connection->query($query);
        
        if($result && mysqli_num_rows($result) > 0)
        {
            if(mysqli_num_rows($result) > 1 )
            {
                return "There are too many users with the same identity";
            }
            $user = mysqli_fetch_assoc($result);
            $this->userAuthentication($user);
            
         

            if($password == $user['password'])
            {
                return "Login successful";
            }
        }
    }

    private function userAuthentication($user)
    {
        session_start();
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $user['id'],
            'user_name' => $user['name'],
            'user_lastname' => $user['lastname'],
        ];
    }

    public function logout()
    {
        // Unset specific session variables
        unset($_SESSION['authenticated']);
        unset($_SESSION['auth_user']);
        // Destroy the session cookie
        if (ini_get("session.use_cookies")) 
        {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        // Redirect to the login page
        header('Location: /login');
        exit(); // Make sure to call exit() after header() to stop further script execution
    }
    
}

?>