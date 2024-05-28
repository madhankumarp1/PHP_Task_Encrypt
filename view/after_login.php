<?php
require("../controller/afterpage.php");
?>
<link rel="stylesheet" href="./CSS/After_login.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="main_div">
            <div class="main_sub_1">
                <h3>
                    Welcome <?php echo htmlspecialchars($_SESSION['name']); ?>
                </h3>
                <p>We are truly delighted to have you here with us. Your presence adds a special touch to our gathering, and we hope you feel comfortable and at ease. Everyone here is excited to get to know you better and share in this experience together. Please, don't hesitate to ask if you need anything or have any questions.</p>
            </div>
            <form method="post">
                <button class="button" type="submit" name="logout">
                    <span class="button_lg">
                        <span class="button_sl"></span>
                        <span class="button_text">LOGOUT</span>
                    </span>
                </button>
            </form>
        </div>
    </div>
</body>

</html>