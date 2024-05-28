<?php
require("../controller/admin_update.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="./CSS/admin_input.css">

</head>

<body>
    <div class="div_main">

        <div class="div_input_box" id="div_input_box">
            <div class="button_div">
                <button class="back_btn" onclick="window.location.href='./admin.php'">X</button>
            </div>
            <h2>Register Now</h2>
            <form method="POST">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>

                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>


                <label for="course">Course:</label><br>
                <input type="text" id="course" name="course" value="<?php echo $course; ?>"><br>

                <input type="submit" value="Submit">

            </form>
        </div>
    </div>

</body>

</html>