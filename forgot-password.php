<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <style>
          body{
         background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCAz9hBBGaM6XE8Vmg9lIe93qpbTjtWN8XctxUnsOqOgx2e9LOn_w1Vw4qvVNOaiCwuA&usqp=CAU");
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed;
        }
        body{
         background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCAz9hBBGaM6XE8Vmg9lIe93qpbTjtWN8XctxUnsOqOgx2e9LOn_w1Vw4qvVNOaiCwuA&usqp=CAU");
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed;
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
        <div><a href="contact.html">Contact Us</a></div>
        <div><a href="registration.php">SignUp</a></div>
    </div>
    </center>
    <br>
    <br>
        <div class="container">
        <?php
        if (isset($_POST["forgot"])) {
            echo "<div class='alert alert-success'>Reset Link sent to the email</div>";
        }
        ?>
        <center><h2 style="color:white;">Forgot Password</h2><center><br>
      <form method="post" action="forgot-password.php">
      <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <button style="background-color:rgb(230, 127, 11);" name="forgot">Send</button>
    </div>
      </form>
</body>
</html>



<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$conn= require __DIR__ . "/database.php";

$sql = "UPDATE users
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $conn->prepare($sql);

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}


$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

if ($conn->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost/reset-password.php?token=$token">here</a> 
    to reset your password.

    END;

    try {

        $mail->send();

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";

    }

}

}
