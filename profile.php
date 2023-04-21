<?php
include(dirname(__FILE__) . "/Settings/db.php");

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
                    <h2><b>Faculty </b></h2>
                    <small>Greater education</small>
                </div>

                <div class="col-2" style='text-align:right;padding-right:0px;'>
                    <img id="floatRightClear" src="Assets/img/mgu.webp" alt="Card image cap" height='200px'>
                </div>
            </div>

        </div>

        <br>

        <div class="wrapper">
            <div class='container'>
                <div class='row'>
                    <?php

                    $lid = $_GET['lid'];

                    // echo $lid;
                    
                    $query = "SELECT * FROM `lecturers` WHERE l_id = $lid"; //creating query
                    $query_exc = $conn->query($query);
                    while ($results = $query_exc->fetch(PDO::FETCH_ASSOC)) {

                        ?>

                        <div class='col-6' style='text-align:left;background-color:#E6E6E6'>
                            <div style='color:black; padding-top:50px; padding-left:20px;'>
                                <?php echo $results['l_description'];
                                ?>
                            </div>

                        </div>



                        <div class='col-6' style='text-align:center;'>
                            <div>
                                <img height='300px' width='380px' src=" <?php echo $results['l_photo'];
                                ?>" alt="Card image cap" style='border:1px solid black;border-radius:50%'>
                            </div>̱̱
                            <div>
                                <p style='color:black;font-weight:bold;font-size:30px;'>
                                    <?php echo $results['l_fname'];
                                    ?>
                                </p>
                            </div>
                        </div>



                        <?php
                    }

                    ?>
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