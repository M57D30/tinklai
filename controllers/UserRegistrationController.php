<?php

include_once __DIR__ . '/../db/DatabaseConnection.php';

class UserRegistrationController
{
    private $connection;

    public function __construct()
    {
        $db = new DatabaseConnection();
        $this->connection = $db->getConnection();
    }

    public function registerUser($name, $lastname, $email, $password, $confirmPassword, $phone)
    {
        $duplicate = mysqli_query($this->connection, "SELECT * FROM `user` WHERE  `email` = '$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            return "User with this email already exists.";
        } else {
            if ($this->passwordMatch($password, $confirmPassword)) {
                // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `user` (`id`, `name`, `lastname`, `password`, `email`, `phone`) 
                VALUES (NULL, '$name', '$lastname', '$password', '$email', '$phone')";
                if (mysqli_query($this->connection, $query)) {
                    return "Registration successful!";
                } else {
                    return "Error: " . mysqli_error($this->connection);
                }
            } else {
                return "Passwords do not match.";
            }
        }
    }

    private function passwordMatch($password, $confirm_password)
    {
        if($password == $confirm_password) {
            return true;
        }
        return false;
    }
}


?>