<?php
include("Assets/css/Mystyle.css");

include('header.php');


?>




<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ink Hacks</title>
  <link rel="stylesheet" href="Assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="Assests/css/main.css" />
  <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <noscript>
    <link rel="stylesheet" href="css/noscript.css" />
  </noscript>
</head>
<style>
  #card-im {
    background-color: #FEBA33;
    color: black;
    font-family: 'Source Serif Pro';

  }
</style>

<body>
  <div id="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide "></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" height="400" width="150" src="Assets/img/H2.webp" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400" width="150" src="Assets/img/carosel1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400" width="150" src="Assets/img/caro4.jpeg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400" width="150" src="Assets/img/kar.webp" alt="Fourth slide">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>

    <div class="wrapper">
      <div class='container'>
        <div class='row'>
          <div class="card" id='card-im' style="width:18rem;height:15rem">
            <img class="card-img-top" style='padding: 20px' src="Assets/img/lms.png" alt="Card image cap">
            <div class="card-body">
              <center>What?</center>
            </div>
          </div>

          <div style="width:2rem;"> </div>

          <div class="card" id='card-im' style="width:18rem;height:15rem;">
            <img class="card-img-top" style='padding: 22px' src="Assets/img/learn.jpeg" alt="Card image cap">
            <div class="card-body">
              <center>When?</center>
            </div>
          </div>
        </div>

        <br>

        <div class='row'>
          <div class="card" id='card-im' style="width:18rem;height:15rem">
            <img class="card-img-top" style='padding: 20px' height='180' width='45' src="Assets/img/2023.png"
              alt="Card image cap">
            <div class="card-body">
              <center>When?</center>
            </div>
          </div>

          <div style="width:2rem;">

          </div>

          <div class="card" id='card-im' height='50px' style="width:18rem;height:15rem">
            <img class="card-img-top" style='padding: 20px' src="Assets/img/des.jpeg" alt="Card image cap">
            <div class="card-body">
              <center>Who?</center>
            </div>
          </div>
        </div>
      </div>

      <br>


    </div>
  </div>


</body>
<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>