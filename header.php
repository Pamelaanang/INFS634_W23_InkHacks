<?php
require('Settings/core.php');

$lec_id = get_lecturer_id();
$l_ip = get_lec_IP();

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary" style="padding-y: 0rem !important">
  <div class="container-fluid" id="navbar">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand mx-auto mb-2 mb-lg-0" href="index.php"><img src="Assets/img/Logo_tp.png"
          style='padding-left: 60px;' width="180" height="40" class="logo" alt="">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" style='color:white;font-family:Source Serif Pro; padding-right: 100px'
            aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style='color:white;font-family:Source Serif Pro; padding-right: 100px'
            href="programs.php">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style='color:white;font-family:Source Serif Pro; padding-right: 50px'
            href="faculty.php">Faculty</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style='color:white;font-family:Source Serif Pro; padding-left: 50px'
            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Login
          </a>
          <ul class="dropdown-menu" style='background-color;#FEBA33'>
            <li>
              <?php
              echo (isset($_SESSION["l_email"])) ?
                "<a class='dropdown-item' href='logout.php' style='color:black;font-family:Source Serif Pro;'>Logout</a>\n" :
                "<a class='dropdown-item' href='login.php' style='color:black;font-family:Source Serif Pro;'>Sign In</a>\n";

              ?>
            </li>
            <li><?php
              echo (isset($_SESSION["l_email"])) ?
                "\n" :
                "<a class='dropdown-item' style='color:black;font-family:Source Serif Pro;' href='signup.php'>Sign Up</a>\n";

              ?>
            </li>
          </ul>
        </li>

        <li class="nav-item" style='padding-left:15%;padding-top:1.5%'>
          <a href='#' data-bs-toggle="modal" data-bs-target="#exampleModal"><span style='color:#FEBA33'
              class="bi bi-search"></span></a>
        </li>

      </ul>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style='background-color:#017CDA'>
              <span style='color:#FEBA33' class="bi bi-search"></span>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method='POST' enctype="multipart/form-data" action="">
                <div class='row'>
                  <div class='col-md-8'>
                    <div class="form-group">
                      <input type="text" class="form-control" id="sterm" name="sterm"
                        placeholder="Search course name only" style='width:100%'>
                    </div>
                  </div>
                  <div class='col-md-4' style='text-align:center'>
                    <input type="button" class="btn btn-dark" style='color:#FEBA33; width:100px; margin-left:10px'
                      data-bs-dismiss="modal" value="Search" type="submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>


  <div>
    <?php
    if (isset($_SESSION["l_email"])) {
      ?>

      <a class='nav-link' style='color:white;font-family:Source Serif Pro;' href='pro_view.php'><img height='40px'
          width='40px' src="<?php echo $_SESSION['l_photo'] ?>" style='border:1px solid black;border-radius:50%;float:right;'>

      </a>

      <?php

    }
    ?>
  </div>
  </div>
</nav>