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
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
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
        font-size: 20px;
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
        color:orange;
     }
     .container{
        width:400px;
        background-color:black;
        box-shadow: 0 0 15px -2px rgb(230, 127, 11);
        border-radius:5px;
     }
        </style>
</head>
<body>
 <center>   
<div class="cont">
        <div><a href="index.html">Home</a></div>
        <div><a href="contact.php">Contact Us</a></div>
        <div><a href="login.php">Login</a></div>
    </div>
    </center>
    <br>
    <div class="container">
    <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];

           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM log WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO log (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>        
        <center><h2 style="color:white;">SignUp</h2><center>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Enter the Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter the Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Confirm Password:">
            </div>
            <div class="form-btn">
                <input type="submit" style="background-color:rgb(230, 127, 11);" value="Register" name="submit">
            </div>
        </form>
        <div>
            <br>
        <div><p style="color:white;">Already Registered <a href="login.php" style="color:rgb(230, 127, 11); border-radius:5px;">Login Here</a></p></div>
      </div>
    </div>
</body>
</html>