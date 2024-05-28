
<?php
session_start();

$db = require("../model/DB.php");
$config = require('../config.php');
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->getConnection();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_user = $_GET['id'];

    $sql = "SELECT * FROM user_recode WHERE id = $id_user";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $course = $row['course'];
        // echo " ".$name." <br>".$email." <br>".$password."<br>".$course;
        // echo "<br>";

    
    } else {
        echo "User not found";
    }
} 

if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['course'])) {
    $id_user = $_POST['id']; 

    $name = $_POST['name'];
    $email = $_POST['email'];
    // $password = $_POST['password'];
    $course = $_POST['course'];

    // $sql = "UPDATE user_recode SET name = '$name', email = '$email', password = '$password', course = '$course' WHERE id = $id_user";

    $sql = "UPDATE user_recode SET name = '$name', email = '$email', course = '$course' WHERE id = $id_user";


    if ($conn->query($sql) === TRUE) {
        header("Location:./admin.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}



?>