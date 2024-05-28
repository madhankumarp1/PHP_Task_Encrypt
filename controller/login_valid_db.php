<?php
session_start();

$db = require("../model/DB.php");
$config = require('../config.php');
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->getConnection();
define('ENCRYPTION_KEY', 'e5f6d7e8c9b10f11e5f6d7e8c9b10f11');
if(isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM user_recode WHERE email = '$email'";

    $result = $conn->query($sql);

    if($result === false) {

        $error = 'Error executing SQL query: ' . $conn->error;

    } elseif($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];
      
      $decryptedPassword = openssl_decrypt($storedPassword, 'AES-128-ECB', ENCRYPTION_KEY);

      if ($password === $decryptedPassword) {
        $_SESSION['name'] = $email;

            // header("Location:../view/after_login.php");
            header("Location:../index.php");

            exit;
        } else {
            $error = 'Invalid password';
        }
    } else {
        $error = 'No user found with the provided email';
    }
} else {
    $error = 'Invalid input data'; 
}

$conn->close();


if(isset($error)) {
    echo "<script>alert('Error: " .($error) . "'); window.location.href = '../view/login.html';</script>";
}
?>
