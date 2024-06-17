<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
         body{
         background-color: black;
         color:white;
        }
        .cont{
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
     .pay{
        display:flex;
        gap:30px;
     }
     .pay img{
      
        height:35px;
        width:35px;
        border-radius:5px;
     }
    </style>
</head>
<body>
    
    <center><a href="premium.html"><button style="background-color:rgb(230, 127, 11);">Back to premium</button></a><center>
    <br>
   <center><h1>Premium Subscription</h1> </center>

   <br>
    <div class="container">
    <?php
        if (isset($_POST["login"])) {
            echo "<div class='alert alert-success'>Payment Details sent to email.</div>";
        }
        ?>
       <center><h2 style="color:white;">Payment</h2><center>
        <br>
      <form action="payment.php" method="post">
      <div class="form-group">
            <input type="email" placeholder="Enter the Email:" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="phone" placeholder="Enter Phone:" name="email" class="form-control">
        </div>
        <p>PAYMENT TYPE</p>
        <div class="form-group">
        <select name="payment" style="width:200px; border-radius:5px;">
  <option value="Select">Select</option>
  <option value="Paytm">Paytm</option>
  <option value="PhonePe">PhonePe</option>
  <option value="Gpay">Gpay</option>
</select>
        </div>
        <br>
        <div class="form-btn">
            <input type="submit" value="Proceed" name="login" style="background-color:rgb(230, 127, 11);">
        </div>
      </form>
      <br>

</body>

</html>