<?php 

require_once __DIR__ . '/../db/config.php'; // Database configuration
require_once __DIR__ . '/../db/DatabaseConnection.php';
require_once __DIR__ . '/../controllers/UserRegistrationController.php';


$userRegistration = new UserRegistrationController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $phone = $_POST["number"];

    $registrationResult = $userRegistration->registerUser($name, $lastname, $email, $password, $confirmPassword, $phone);
    echo "<script>alert('$registrationResult');</script>";
}

?>