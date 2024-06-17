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
     .f{
        display:flex;
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
        <div><a href="registration.php">SignUp</a></div>
        <div><a href="login.php">Login</a></div>
    </div>
    </center>
    <br>
    <div class="f">
    <div class="container">
        <?php
     require_once "database.php";
        if (isset($_POST["submit"])) {
           $name = $_POST["name"];
           $email = $_POST["email"];
           $add = $_POST["add"];
            $sql = "INSERT INTO contact (name, email, address) VALUES ('$name','$email','$add' )";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Query sent successfully</div>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
           }
          

        ?>
        
        <center><h2 style="color:white;">Contact</h2><center>
        <form action="contact.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Enter the Email:">
            </div>
            <div class="form-group">
                <textarea rows="3" cols="37" style="border-radius:5px;" name="add">Type your query here</textarea>
            </div>
            <div class="form-btn">
                <input type="submit" style="background-color:rgb(230, 127, 11);" value="Send" name="submit">
            </div>
        </form>
        <div>
    
      </div>
    </div>

    <div class="container">
   
        <h4>Email Us</h4>
        <p style="color:white; font-size:20px;">rythmixapp@gmail.com</p>
<br>
        <h4>Phone</h4>
        <p style="color:white; font-size:20px;">+1 0123 4567 8924</p>
        <br>

        <h4>Address</h4>
        <p style="color:white; font-size:20px;">#123 Street, Mumbai<br>India</p>
        <div>
    
      </div>
    </div>
    </div>
</body>
</html>