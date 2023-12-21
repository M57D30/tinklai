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
    if ($registrationResult === "Registration successful!") {
        
        echo '<script type="text/javascript">';
        echo 'alert("Registracija pavyko!");';
        echo 'window.location.href = "/login";';
        echo '</script>';
    }
    // } else  ($registrationResult === "Passwords do not match.") {
        else{
        echo '<script type="text/javascript">';
        echo 'alert("Nesutapo slaptažodžiai.");';
        echo 'window.location.href = "/registration";';
        echo '</script>';
    }

    echo "<script>alert('$registrationResult');</script>";
}

?>