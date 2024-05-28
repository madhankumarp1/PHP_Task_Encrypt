
<?php



$db = require("../model/DB.php");
$config = require('../config.php');
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->getConnection();


define('ENCRYPTION_KEY', 'e5f6d7e8c9b10f11e5f6d7e8c9b10f11');

        $sql = "SELECT id, name, email, password, course FROM user_recode";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $decryptedPassword = openssl_decrypt($row["password"], 'AES-128-ECB', ENCRYPTION_KEY);


                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                // echo "<td>" .$row["password"]. "</td>";
                echo "<td>" . $decryptedPassword . "</td>";

                echo "<td>" . $row["course"] . "</td>";
                echo "<td class='btn'> <button onclick=\"window.location.href='./admin_input.php?id=" . $row["id"] ."'  \">EDIT</button>    <button onclick=\"window.location.href='?delete_id=" . $row["id"] . "'\">Delete</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No records found</td></tr>";
        }
  
        //   Delete.php
        if (isset($_GET['delete_id']) && !empty($_GET['delete_id'])) {
            $id_user = $_GET['delete_id'];

            $sql = "DELETE FROM user_recode WHERE id = $id_user";

            if ($conn->query($sql) === TRUE) {
                header("Location: admin.php");
                // exit();
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }

        $conn->close();
        ?>