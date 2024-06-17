<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rhythmix App</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
   body{
    background-color:black;
    color:white;
  }
  body{
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed;
        }
  div.card{
    color:rgb(230, 127, 11);
    background-color:rgb(18, 17, 17);
  }
  #x:hover{
    color:rgb(230, 127, 11);
  }
  
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid" id="nav">
        <a class="navbar-brand" href="#" style="font-size: 30px; color:rgb(230, 127, 11);">Rhythmix </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="welcome.php" style=" font-size: 20px;" id="x">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="albums.html" style="font-size: 20px;" id="x">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Albums</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;" id="x">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categories
                    </a>
                    <ul class="dropdown-menu" style="background-color:black;">
                        <li><a class="dropdown-item" href="telugu.html" id="x">Telugu</a></li>
                        <li><a class="dropdown-item" href="hindi.html" id="x">Hindi</a></li>
                        <li><a class="dropdown-item" href="melody.html" id="x">Melody</a></li>
                        <li><a class="dropdown-item" href="sid.html" id="x">Sriram</a></li>
                        <li><a class="dropdown-item" href="rehman.html" id="x">Rehaman</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="podcast.html" tabindex="-1" style=" font-size: 20px;" id="x">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Podcasts</a>
                </li>
            </ul>
            <div class="container-fluid" style="width:600px; color:green;">
            <form class="d-flex" role="search">
    <input class="form-control me" style="background-color:black; color:white; opacity: 3;" type="search" placeholder="Search for the songs and albums" aria-label="Search" id="find" onkeyup="search()" name="">
  </form>
</div>
            <span class="navbar-text">
            <a class="btn text-white" href="premium.html" style="background-color:rgb(230, 127, 11); padding: 5px; border-radius: 5px;">Premium</a>
            </span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span class="navbar-text">
                <a class="btn text-white" href="logout.php" style="background-color:rgb(230, 127, 11); padding: 5px; border-radius: 5px;">Logout</a>
            </span>
        </div>
    </div>
</nav>
<br><br><br>
<br>
<h3 style="margin-left:20px;">Popular Songs</h3>
<div class="container-fluid" id="popular">
     <div class="card" class="col-sm-2">
      <img class="card-img-top" id="1" src="https://i.scdn.co/image/ab67616d0000b273074d0a899a0b9bbdeab3ba94" alt="Card image">
      <div class="card-body">
        <h6 class="card-title" id="2" style="color:rgb(230, 127, 11);">Salaar</h6>
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="2" src="https://i.scdn.co/image/ab67616d0000b2737cd7220ff1dd35ce6d35b1a7" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Bheemla Nayak</h6>      
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="3" style="height:150px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7AiNtD-5l1D41IyPuyiTAu6VGvWiGvsyzf4cepEn5LB9E3z8-F-BTs-m3EHbvAhhYoao&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">RRR</h6>      
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL5a4jdJJLCf_0cDe_wCzJvj13gmkuUznx0Nthr47Kz6MYKem3IMibmRlK79fEtuOTHRM&usqp=CAU" alt="Card image" style="height:150px;">
      <div class="card-body">
        <h6 class="card-title">Tiger 3</h6>      
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ465ehZq9k2ngO9Erlm99-TfyUfYbNyk1PoFAFrkFVEuUobXLC-JPI4NfoEHQbfHU3SbY&usqp=CAU" alt="Card image" style="height:150px;">
      <div class="card-body">
        <h6 class="card-title">Guntur Kaaram</h6>      
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2TJnKsPCGlIcZcId01wN0LtmtK1q9yBYFWfQzftx_ErEw0XUZ6aUkCDOBGBeoea-9r0Y&usqp=CAU" alt="Card image" style="height:150px;">
      <div class="card-body">
        <h6 class="card-title">Joe</h6>      
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="7" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhX_RzWpdvwQf1Ih8UZw09T8g6h4-qI9J-sYqxnmmHNQdqSLfsouREx2MoRfU0pBWXqLI&usqp=CAU" alt="Card image" style="height:150px;">
      <div class="card-body">
        <h6 class="card-title">Good Night</h6>      
      </div>
    </div>
    <div class="card" class="col-sm-2">
      <img class="card-img-top" id="8" src="https://c.saavncdn.com/807/Poolamme-Pilla-From-HanuMan-Telugu-Telugu-2024-20240130001233-500x500.jpg" alt="Card image" style="height:150px;">
      <div class="card-body">
        <h6 class="card-title">Hanuman</h6>      
      </div>
    </div>
</div>
<br>


<h3 style="margin-left:20px;">Languages</h3>
<div class="container-fluid-wrap" id="popular">
 
 <div class="card" >
      <a href="hindi.html">  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScDA8Gl3FGyP8MjMzShkFSueTUcBvhCuoedA&usqp=CAU" alt="Card image"></a>
      <div class="card-body">
        <h6 class="card-title">Hindi</h6>      
      </div>
    </div>
 <div class="card">
  <img class="card-img-top" id="6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN8S1531GDPZEr3kvW0LCmLJkPwxb39x6Spw&usqp=CAU" alt="Card image">
   <div class="card-body">
     <h6 class="card-title">Malayalam</h6>      
   </div>
 </div>
 <div class="card">
  <a href="telugu.html"> <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5eF913ypVENbB94jjJct9zRTmBuKMaUI_MA&usqp=CAU" alt="Card image"></a>
   <div class="card-body">
     <h6 class="card-title">Telugu</h6>      
   </div>
 </div>
 <div class="card" >
    <img class="card-img-top" id="42" style="height:150px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfRN9jDtpH3Wrejg2UZtvdGe8Z1littC51Sg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h6 class="card-title">Kannada</h6>      
  </div>
</div>
 <div class="card" >
    <a href="melody.html"><img class="card-img-top" src="https://i.scdn.co/image/ab67706c0000da84ff7c23656a589774020de9ea" alt="Card image"></a>
  <div class="card-body">
    <h6 class="card-title">English</h6>      
  </div>
</div>
<div class="card">
    <img class="card-img-top" id="40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk2o-zmRT_EPNGowYh06957qVPMErqOt00iG7G1dFadoBA2WlUA8KqLIVSHVqCkCPG_4M&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h6 class="card-title">Maraati</h6>      
  </div>
</div>

<div class="card" >
    <img class="card-img-top" id="41" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUFRBJt91Fvv-3sDoBrBqpmwnx9u7CHnQ1aQ&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h6 class="card-title">Punjabi</h6>      
  </div>
</div>
</div>
<br><br>
<h3 style="margin-left:20px;">Artists</h3>
<div class="container-fluid" id="popular">
     <div class="card">
      <a href="sid.html">  <img class="card-img-top" src="https://i.scdn.co/image/ab67616d0000b2733bfc2617fdd1ff939930ce0e" alt="Card image"></a>
      <div class="card-body">
        <h6 class="card-title">Sid SriRam</h6>
      </div>
    </div>
    <div class="card" >
       <img class="card-img-top" id="26" src="https://i.scdn.co/image/ab67616d0000b2737842884286c2e45e5c059c57" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Shreya Ghosal</h6>      
      </div>
    </div>
    <div class="card" >
      <a href="anirudh.html">  <img class="card-img-top" src="https://i.scdn.co/image/ab67616d0000b2731edf696a64afb583b45e0f93" alt="Card image"></a>
      <div class="card-body">
        <h6 class="card-title">Anirudh</h6>      
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" id="27" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_3o7cImZnU2rSHxQK1gKmKjSZ54d2sJqdZw&s" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">KS Chitra</h6>      
      </div>
    </div>
    <div class="card" >
      <a href="rehman.html"> <img class="card-img-top" src="https://images.hungama.com/c/1/282/35f/33600784/33600784_300x300.jpg" alt="Card image"></a>
      <div class="card-body">
        <h6 class="card-title">AR Rehman</h6>      
      </div>
    </div>
    <div class="card" >
      <img class="card-img-top" id="28" src="https://cdns-images.dzcdn.net/images/cover/ad57b2691473a25cb7675e1d0911468f/500x500.jpg" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">SPB Hits</h6>      
      </div>
    </div>
    
</div>
<br>
<br>
<h3 style="margin-left:10px;">Categories</h3>
<div class="container-fluid" id="popular">
     <div class="card">
     <a href="melody.html"> <img class="card-img-top" src="https://i.scdn.co/image/ab67616d0000b27301649797af71d97b8f53ebf3" alt="Card image"></a>
      <div class="card-body">
        <h6 class="card-title">Melody</h6>
      </div>
    </div>
    <div class="card" >
   <img class="card-img-top" id="33" src="https://i.scdn.co/image/ab67706c0000da84bfaf10f6a6ff8941e0f7548e" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Hip-Hop</h6>      
      </div>
    </div>
    <div class="card">
   <img class="card-img-top" id="32" src="https://i.scdn.co/image/ab67616d0000b273ccdb8e452a061106c4ad3dd9" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Folk</h6>      
      </div>
    </div>
    <div class="card" >
   <img class="card-img-top" id="49" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW_epPxGi3kMi-4AgEdHqjQ2TPJktvWZlMig5qEpThFwaMcmKltnLEw0CS2gOyQarj3DM&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Pop</h6>      
      </div>
    </div>
    <div class="card">
   <img class="card-img-top" id="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQpbWzGRsYFP1zZ5yZpRJQaKUr1g_p_63kJA&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Rock</h6>      
      </div>
    </div>
</div>
<br><br>
<h3 style="margin-left:20px;">OLD 90's</h3>
<div class="container-fluid" id="popular">
     <div class="card">
      <img class="card-img-top" id="43" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNgMzri4uuM_EZUAuCnaonYSTez8eHNhhfjwBL-SKvsoc0-LlMbNuwcNQ4rnX5KeToaag&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title"> Annamayya</h6>
      </div>
    </div>
    <div class="card" >
       <img class="card-img-top" id="44" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGO2tZuNpukCAB4SRyICNGw4X-R0ytRoxxpXwXlpmuPc4MssnnBAnmzsi7K3T_3eSi2lE&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Shiva</h6>      
      </div>
    </div>
    <div class="card" >
    <img class="card-img-top" id="45" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSf8ATLiakvgqxUQL_0gdyTXcX77kQHm05yv-isHrFAS45xVv9J0s3hnCpSb7-iAK4NA0&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Hanumaa</h6>      
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" id="46" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUlCq91iRK-_ROn7fIBmtjLcDtnE4XgoTgBPeN0ur7PsCBWO4WV0vG8foEIlT5s6FO0QA&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Ganeshaa</h6>      
      </div>
    </div>
    <div class="card" >
     <img class="card-img-top" id="47" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk7Cl1eX8txIXW-fEXNwBFzGctN2SQtKlFg34fmW9RgOOx2cvNl1JybifwAX2GQaRguHE&usqp=CAU" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Ramadasu</h6>      
      </div>
    </div>
    <div class="card">
      <img style="height:350px;" class="card-img-top" id="48" src="https://i.pinimg.com/736x/79/3b/b0/793bb0d8845f9a44f922b1903fb94c58.jpg" alt="Card image">
      <div class="card-body">
        <h6 class="card-title">Krishnaa</h6>      
      </div>
    </div>
    
</div>
<br>
<br>

<div class="container my-5">

  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #0b0a0a";
          >
  
    <section
             class="d-flex justify-content-between p-4"
             style="background-color:#1d1d1d";
             >

      <div class="me-5">
        <span >Social Media networks:</span>
      </div>
      <div>
        <a href="" class="text-white me-4">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-instagram"></i>
        </a>
    
      </div>

    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
  
        <div class="row mt-3">
  
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold" style="color:rgb(230, 127, 11);">Spotify</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:#1d1d1d; height: 2px"
                />
            <p>
              Rythmix App provides you the various categories of the songs
                in many languages which makes you feel peaceful and feel good.
            </p>
          </div>
    


          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold" style="color:rgb(230, 127, 11);">Company</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:#1d1d1d; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">About</a>
            </p>
            <p>
              <a href="#!" class="text-white">Ads</a>
            </p>
            <p>
              <a href="#!" class="text-white">Jobs</a>
            </p> 
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold" style="color:rgb(230, 127, 11);">Communities</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color:#1d1d1d; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Artists</a>
            </p>
            <p>
              <a href="#!" class="text-white">Developer</a>
            </p>
            <p>
              <a href="#!" class="text-white">Vendors</a>
            </p>
            <p>
              <a href="#!" class="text-white">Investors</a>
            </p>
          </div>
      

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold" style="color:rgb(230, 127, 11);">Useful Links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fa fa-home"></i>Support</p>
            <p><i class="fa fa-envelope"></i>Rythmix@gmail.com</p>
            <p><i class="fa fa-phone"></i> + 01 234 567 88</p>
          </div>         
        </div>
       
      </div>
    </section>
    <div
         class="text-center p-3"
         style="background-color: #232323";
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
  </footer>

</div>

<div class="bottom" style="background-color:rgb(18, 17, 17);">
    <center style="font-size: 20px;">
      <i id="back" class="fa fa-backward"></i>
    <i style="background-color: black; color:white; border-radius: 10px;" id="play" class="fa fa-play-circle"></i>
    <i id="front" class="fa fa-forward"></i>
     </center>
  <center class="gif">
    <img src=" https://static.wixstatic.com/media/36f503_26548a0cee6a45f4b33ba4c7e2cb5b84~mv2.gif" style="width:50px; height: 40px;" id="gifi"><span id="demo"></span>
    </center>
  <center style="margin-bottom: 10px;"><input type="range" id="bar" min="0" value="0" max="100"></center>
  </div>
  <script>
function navigateToPage(page) {
    window.location.href = page;
}
let image=Array.from(document.getElementsByClassName('card-img-top'));
let lik=Array.from(document.getElementsByClassName('card-title'));
let play=document.getElementById("play");
let bar=document.getElementById("bar");
let front=document.getElementById("front");
let back=document.getElementById("back");
let gifi=document.getElementById("gifi");
let demo=document.getElementById("demo");
let dis=document.getElementById("dis");

let ind=1;
const audio=new Audio("public/1.mp3");

const arr= {
    1:"Salaar",
    2:"Bheemlanayak",
    3:"RRR",
    4:"Tiger 3",
    5:"Guntur Kaaram",
    6:"Joe",
    7:"Good Night",
    8:"Hanuman",
    9:"Papa Meri jaan",
    10:"Lutt Putt Gaya",
    11:"Tere Raasta",
    12:"Mumbai Ke Hero",
    13:"Ratan Lambiyan",
    14:"Nijamene Chebutunna",
    15:"Apudo Ipudo",
    16:"Ee Rathale",
    17:"You're My MLA",
    18:"Ye Mera Jaha",
    19:"English",
    20:"Vachindamma",
    21:"Kumkumala",
    22:"Oke Oka Lokam",
    23:"Tiger ka Hukum",
    24:"Kodaka Koteswarao",
    25:"Mastaru Mastaruu",
    26:"Shreya Ghosal",
    27:"KS Chitra",
    28:"SPB Hits",
    29:"Vandemataram",
    30:" Agiri Nandini",
    31:"Ranjhanaa",
    32:"Dandelions",
    33:"Whenever Wherever",
    34:"Music",
    35:"joyful",
    36:"Rotten",
    37:"Twisted",
    38:"criminal",
    39:"horror",
    40:"Gulabi Sadi",
    41:"Punjabi",
    42:"Varaha Roopam",
    43:"Annamayya",
    44:"Shiva",
    45:"Hanumaa",
    46:"Ganeshaa",
    47:"Ramaaa",
    48:"Krishnaa",
    49:"Pop",
    50:"Rock"
    };


//clicking image
image.forEach((value)=>{
value.addEventListener('click',(v)=>{
ind=parseInt(v.target.id);
play.classList.add('fa-pause-circle');
gifi.style.opacity=1;
audio.src=`public/${ind}.mp3`;
audio.currentTime=0;
demo.innerHTML=arr[ind];
audio.play();
})
})

let x=0;
lik.forEach((value)=>{
    value.addEventListener('click',(v)=>{
    x=parseInt(v.target.id);
    console.log(x);
    dis.innerHTML=x;
    })
    })



//play and pause
play.addEventListener('click', ()=>{            
if(audio.paused || audio.currentTime<=0 ){
audio.play();                               
play.classList.remove('fa-play-circle'); 
play.classList.add('fa-pause-circle');  
gifi.style.opacity=1;
}
else{
audio.pause();
play.classList.remove('fa-pause-circle');
play.classList.add('fa-play-circle');
gifi.style.opacity=0;
}
})

//progress bar
audio.addEventListener('timeupdate', ()=>{
bar.value=parseInt((audio.currentTime/audio.duration)*100);
})

bar.addEventListener('change', ()=>{
audio.currentTime=bar.value*audio.duration/100;
})

//forward and backward button
back.addEventListener('click', ()=>{
if(ind<=0){
ind=0;
}
else{
ind=ind-1;
}
audio.src=`public/${ind}.mp3`;
demo.innerHTML=arr[ind];
audio.currentTime = 0;
play.classList.remove('fa-play-circle'); 
play.classList.add('fa-pause-circle'); 
audio.play();
})
front.addEventListener('click', ()=>{
if(ind>=9){
ind=0;
}
else{
ind=ind+1;
}
audio.src=`public/${ind}.mp3`;
demo.innerHTML=arr[ind];
audio.currentTime = 0;
audio.play();
})

//Search Functionality
function search() {
    let find = document.getElementById('find').value.toUpperCase();
    let song = document.querySelectorAll('.card');
    let l = document.getElementsByTagName('h6');
    for(var i = 0;i<=l.length;i++){
    let a=song[i].getElementsByTagName('h6')[0];
    let val=a.innerHTML || a.innerText || a.textContent;
    if(val.toUpperCase().indexOf(find) > -1) {
    song[i].style.display="";
    }
    else
    {
    song[i].style.display="none";
    }
    }
    }
  </script>
  </body>
</html>


