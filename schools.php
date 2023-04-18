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

                            <button onclick="window.location.href = '#';" class='btn btn-warning'
                                style='padding-top:2px; height:30px;color:black; background-color:#FEBA33; border-radius:10px'>
                                Schools</button>
                        </div>
                    </div>
                </div>

                <div class="col-2" style='text-align:right;padding-right:0px;'>
                    <img id="floatRightClear" src="Assets/img/mgu.webp" alt="Card image cap" height='200px'>
                </div>
            </div>

        </div>

        <br>

        <div class="wrapper">
            <div class='container'>
                <div class='row' style="border:1px solid black;border-radius:10px; background-color:#FEBA33">

                    <div class='col-2'>
                        <img height='200px' width='200px' src="Assets/img/under.webp"
                            style='padding-left:20px; padding-top:20px; padding-bottom:20px;'>
                    </div>
                    <div class='col-8' style='color:black; text-align:center;padding-top:5%'>
                        <h2><b>School of Information Studies </b></h2>
                        <small>Your center for Library & Archival Studies, Knowledge Management UX/UI, Data
                            Analysis</small>
                    </div>
                    <div class='col-2'>
                        <div class='button position-absolute bottom-50 start-10'
                            style='padding-top:100px;padding-left:20px'>
                            <button onclick="window.location.href = 'courses.php';" class='btn btn-warning'
                                style='width: 100px; height: 45px; color:#FEBA33; background-color:black; border-radius:5px'>
                                View</button>
                        </div>
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