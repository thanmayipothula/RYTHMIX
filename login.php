<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
  min-height: 100vh;
  background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCAz9hBBGaM6XE8Vmg9lIe93qpbTjtWN8XctxUnsOqOgx2e9LOn_w1Vw4qvVNOaiCwuA&usqp=CAU")no-repeat;
  background-size: cover;
  background-position: center;
}

@media screen and (max-width: 500px) {
  body {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCAz9hBBGaM6XE8Vmg9lIe93qpbTjtWN8XctxUnsOqOgx2e9LOn_w1Vw4qvVNOaiCwuA&usqp=CAU")no-repeat;
    background-size: cover;
    background-position: center;
}
}
        .cont{
        display:flex;
        gap:50px;
        background-color:black;
        color: white;
        justify-content: center;
        font-size:20px;
        padding:10px;
        border-radius: 10px;
        opacity:0.7;
        width:420px;
        box-shadow: 0 0 15px -2px #444444;
     }
     .cont a{
        text-decoration:none;
        color:white;
     }
     .cont a:hover{
        text-decoration:underline;
        color:rgb(230, 127, 11);

     }
     .container{
        width:400px;
        background-color:black;
        border-radius:5px;
        box-shadow: 0 0 15px -2px rgb(230, 127, 11);
     }
    </style>
</head>
<body>
<center>   
<div class="cont">
        <div><a href="index.html">Home</a></div>
        <div><a href="contact.php">Contact Us</a></div>
        <div><a href="registration.php">SignUp</a></div>
    </div>
    </center>
    <br>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM log WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: welcome.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }
            else{
                echo "<div class='alert alert-danger'>Email does not exists</div>";
            }

        }
        ?>
       <center><h2 style="color:white;">Login</h2><center>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" style="background-color:rgb(230, 127, 11);">
        </div>
      </form>
      <br>
     <div><p style="color:white;">Forgot Password<a href="forgot-password.php" style="color:rgb(230, 127, 11);">Click Here</a></p></div>

    </div>
</body>
</html>