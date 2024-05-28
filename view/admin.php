<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../view/CSS/admin_view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="main">
        <div class="back_btn_div">
            <div class="btn_2">
            <button class="back_btn" onclick="window.location.href='../index.php'"><i class="fa-solid fa-backward"></i></button>

            </div>
        </div>
        <div class="div_table" id="div_table">
            <h2>Details</h2>
            <div class="dib">

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th class="head_option">Course</th>
                    <th class="head_option">Option</th>
                </tr>
                <?php
                require("../controller/table_view.php");
                ?>
            </table>
            </div>

        </div>
    </div>
</body>

</html>
