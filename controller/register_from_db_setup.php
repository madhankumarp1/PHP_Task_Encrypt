<?php

session_start();

$db = require("../model/DB.php");
$config = require('../config.php');
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->getConnection();
define('ENCRYPTION_KEY', 'e5f6d7e8c9b10f11e5f6d7e8c9b10f11');
if(isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['course'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $course = $_POST['course'];


    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $encryptedPassword = openssl_encrypt($password, 'AES-128-ECB', ENCRYPTION_KEY);

$sql = "INSERT INTO user_recode (name, email, password, course) VALUES ('$name', '$email', '$encryptedPassword', '$course')";


    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // echo "Registration successful";
        // header("Location: ../view/login.html");
        header("Location: ../view/register.html");

        exit;
    } else {
        echo "Error: Registration failed - " . $conn->error;
    }
} else {
    echo "Invalid input data";
}


$conn->close();

?>
