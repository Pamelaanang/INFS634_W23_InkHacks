<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ink Hacks</title>
  <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

  <link rel="stylesheet" href="Assets/css/Mystyle.css" />
</head>

<body>
  <?php

  include('header.php');


  ?>
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
          <div class='col-6'>

            <div class='row'>
              <div class="card" id='card-in' style="width:18rem;height:15rem;border:1px solid black;border-radius:0px;">
                <img class="card-img-top" style='padding:20px;' src="Assets/img/lms.png" alt="Card image cap">
                <div class="card-body">
                  <center>What?</center>
                </div>
              </div>

              <div class="card" id='card-in' style="width:18rem;height:15rem;border:1px solid black;border-radius:0px;margin-left:5%">
                <img class="card-img-top" style='padding:22px;' src="Assets/img/learn.jpeg" alt="Card image cap">
                <div class="card-body">
                  <center>When?</center>
                </div>
              </div>

            </div>

            <br>

            <div class='row'>
              <div class="card" id='card-in' style="width:18rem;height:15rem;border:1px solid black;border-radius:0px;">
                <img class="card-img-top" style='padding:20px;' height='180' width='45' src="Assets/img/2023.png"
                  alt="Card image cap">
                <div class="card-body">
                  <center>When?</center>
                </div>
              </div>


              <div class="card" id='card-in' height='50px'
                style="width:18rem;height:15rem;border:1px solid black;border-radius:0px;margin-left:5%">
                <img class="card-img-top" style='padding:20px;' src="Assets/img/des.jpeg" alt="Card image cap">
                <div class="card-body">
                  <center>Who?</center>
                </div>
              </div>
            </div>
          </div>

          <div class='col-6'>
            <img class="card-img-top" style='padding:0px;' height='100%' width='45' src="Assets/img/H4.webp"
              alt="Card image cap">
          </div>
        </div>
      </div>
    </div>


    <br>


  </div>
  </div>
  <?php include('footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>


</html>