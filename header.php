<?php
require('settings/core.php');

$lec_id = get_lecturer_id();
$l_ip = get_lec_IP();


?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

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
    <!-- <a class="navbar-brand" href="#"><img class="logo" align="left" alt="InkHacks" height="38" width="100"
          src="Assets/img/Logo_tp.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mx-auto"></span>
      </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" style='color:white;font-family:Source Serif Pro; padding-right: 100px'
            aria-current="page" href="#">About</a>
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
            <li><a class="dropdown-item" style='color:black;font-family:Source Serif Pro;' href="signup.php">Sign Up</a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" style='color:#FEBA33;padding-left:220%;padding-top:12px;' href="#popup1"><i
              class="bi bi-search"></i></a>
        </li>

        <?php
        if (isset($_SESSION["l_email"])) {
          echo "<a class='nav-link' style='color:white;font-family:Source Serif Pro;'
                        href='profile.php'><img height='20px' width='20px' src='Assets/img/fac3.jpeg'
                                          style='border:1px solid black;border-radius:50%'></a>\n";
        }
        ?>
      </ul>

      <!-- <div id="popup1" class="overlay">
        <div class="popup">
          <div style='background-color:#017cda'>
          <a class="close" href="#">&times;</a></div>
          <div class="content">
           <p> Thank to pop me out of </p>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</nav>