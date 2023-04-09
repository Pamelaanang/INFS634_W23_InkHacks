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
            <div class='container'>
                <div class="col-8" style='padding-left:15px;height: 20%;'>
                    <br>
                    <h2><b> McGill Schools </b></h2>
                    <small>Greater education</small>
                    <!-- <img class="floatRight" src="Assets/img/under.webp" alt="Card image cap" height='100px' align='right;'> -->
                </div>
            </div>
        </div>

        <br>

        <div class="wrapper">
            <div class='container' style='padding-left:100px'>
                <div class='row'>
                    <div class="card" id='card-im' style="width:20rem;border:1px solid black;border-radius:0px;">
                        <img class="card" src="Assets/img/under.webp" alt="Card image cap" style='border:1px solid black;border-radius:0px;'>
                        <div class="card-body">
                            <center>Undergraduate</center>
                        </div>
                    </div>


                    <div style="width:5rem;"> </div>

                    <div class="card" id='card-im' style="width:20rem;border:1px solid black;border-radius:0px;">
                        <img class="card" height='200px' src="Assets/img/Graduate.webp" alt="Card image cap" style='border:1px solid black;border-radius:0px;'>
                        <div class="card-body">
                            <center>Graduate</center>
                        </div>
                    </div>

                    <div style="width:5rem;"> </div>

                    <div class="card" id='card-im' style="width:20rem;border:1px solid black;border-radius:0px;">
                        <img class="card" src="Assets/img/diploma.webp" alt="Card image cap" style='border:1px solid black;border-radius:0px;'>
                        <div class="card-body">
                            <center>Certifications & Diplomas</center>
                        </div>
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