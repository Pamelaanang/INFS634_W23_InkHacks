<?php

include('header.php');
?>


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
    <div id="main">
        <div class='container-fluid' id='cfluid' style='border:1px solid black;'>
            <div class='row'>
                <div class="col-10" style='padding-left:50px;height:20%;padding-top:20px'>
                    <br>
                    <h2><b>Graduate Schools </b></h2>
                    <small>Your future starts now. Graduate school is the beginning of many
                        possibilities.</small>
                    <div class='row'>
                        <div style='padding-top:25px'>
                            <a href="programs.php" style='text-decoration:none; color:black'> Programs</a>

                            <i class="bi bi-arrow-right"></i>

                            <a href="schools.php" style='text-decoration:none; color:black'> Schools</a>

                            <i class="bi bi-arrow-right"></i>

                            <a href="courses.php" style='text-decoration:none; color:black'> Courses</a>


                            <i class="bi bi-arrow-right"></i>

                            <button onclick="window.location.href = '#';" class='btn btn-warning'
                                style='padding-top:2px; height:30px;color:black; background-color:#FEBA33; border-radius:10px'>
                                Type</button>

                        </div>
                    </div>
                </div>

                <div class="col-2" style='text-align:right;padding-right:0px;'>
                    <img id="floatRightClear" src="Assets/img/mgu.webp" alt="Card image cap" height='200px'>
                </div>
            </div>
        </div>
        <br>

        <div class='row'>
            <div style='text-align:center'>
                <h6 style='color:black'>Type</h6>
            </div>
            <div style='padding-left:33%'>
                <button style="background-color:#BFBFBF;width:120px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Assignments</button>

                <button style="background-color:#BFBFBF;width:120px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Notes</button>

                <button style="background-color:#BFBFBF;width:120px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Quizzes</button>

                <button style="background-color:#BFBFBF;width:120px; height:30px;padding-top:2px;"
                    onclick="this.style.backgroundColor='#FEBA33'" class='btn btn-warning' style='color:black;'>
                    Slides</button>

            </div>
        </div>

        <br>

        <div class="wrapper">
            <div class='container'>
                <div class='row'>
                    <div class='col-3'>
                        <div class="card" id='card-im'
                            style=" width: 300px; height: 500px; border:1px solid black;border-radius:0px;">
                            <img height='400px' class="card" src="Assets/img/profile.webp" alt="Card image cap"
                                style='border-bottom:1px solid black;border-radius:0px;'>
                            <div class="card-body">
                                <center>Proposal Guidelines From 2021</center>
                            </div>
                        </div>
                    </div>
                    <div class='col-3'>
                        <div class="card" id='card-im'
                            style=" width: 300px; height: 500px; border:1px solid black;border-radius:0px;">
                            <img height='400px' class="card" src="Assets/img/profile.webp" alt="Card image cap"
                                style='border-bottom:1px solid black;border-radius:0px;'>
                            <div class="card-body">
                                <center>Logo Assignment
                                    Guidelines 2020</center>
                            </div>
                        </div>
                    </div>
                    <div class='col-3'>
                        <div class="card" id='card-im'
                            style=" width: 300px; height: 500px; border:1px solid black;border-radius:0px;">
                            <img height='400px' class="card" src="Assets/img/profile.webp" alt="Card image cap"
                                style='border-bottom:1px solid black;border-radius:0px;'>
                            <div class="card-body">
                                <center>Figma Assignment
                                    Guidelines 2019</center>
                            </div>
                        </div>
                    </div>
                    <div class='col-3'>
                        <div class="card" id='card-im'
                            style=" width: 300px; height: 500px; border:1px solid black;border-radius:0px;">
                            <img height='400px' class="card" src="Assets/img/profile.webp" alt="Card image cap"
                                style='border-bottom:1px solid black;border-radius:0px;'>
                            <div class="card-body">
                                <center>Bootstrap Assignment
                                    Guidelines 2019</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>


</html>