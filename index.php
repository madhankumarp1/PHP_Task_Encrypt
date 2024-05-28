<?php session_start(); // Ensure the session is started 
?>
<?php
require("./controller/afterpage.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./view/CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .div_admin_table,
  .logout {
    display: none;
  }

  i.fa-solid.fa-right-from-bracket {
    font-size: xx-large;
  }
</style>

<body>
  <div class="main_div">
    <div class="main_div_0">
      <div class="main_div_0_sub">
        <h1>HOGWARTS UNIVERSITY</h1>
      </div>
      <div class="letft_div">
        <div class="div_admin_table" id="div_admin_table">
          <button onclick="window.location.href='./view/admin.php'">admin</button>
        </div>

        <button onclick="window.location.href='./view/login.html'" class="login" id="login">LOGIN</button>
        <form method="post">
          <button class="logout" id="logout" name="logout"><i class="fa-solid fa-right-from-bracket"></i></button>

        </form>
      </div>
    </div>
  </div>
  <div class="div_main_1">
    <div class="div_main_1_sub">
      <div class="cont">
        <h3>Dear learners summer courses registration are open now. Please enrol if not already.</h3>
      </div>
      <div class="btn">
        <button onclick="window.location.href='./view/register.html'">Register Now</button>
      </div>

    </div>
  </div>
  <script>
    // }
    var sessionName = <?php echo json_encode($_SESSION['name']); ?>;
console.log(sessionName);
    if (sessionName === "admin@gmail.com") {
      document.getElementById("login").style.display = "none";
      document.getElementById("div_admin_table").style.display = "block";
      document.getElementById("logout").style.display = "block";
    } else if (sessionName) {
      document.getElementById("login").style.display = "none";
      document.getElementById("logout").style.display = "block";
    }
  </script>
</body>

</html>