<?php
// include(dirname(__FILE__) . "/Controllers/pro_controller.php");

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

                    $query = "SELECT * FROM `lecturers`"; //creating query
                    $query_exc = $conn->query($query);
                    while ($results = $query_exc->fetch(PDO::FETCH_ASSOC)) {
                        $lid = $results['l_id'];


                        ?>

                        <div class='col-4'>
                            <div class="card" id='card-im' style="border:1px solid black;border-radius:0px;">
                                <img class="card" src="<?php echo $results['l_photo'] ?>" alt="Card image cap"
                                    style='border-bottom:1px solid black;border-radius:0px;overflow:hidden;max-height:251px'>
                                <div class="card-body">
                                    <a href="profile.php?lid=<?php echo $lid ?>" style='text-decoration: none;color:black'>
                                        <center>
                                            <?php
                                            echo $results['l_fname'];
                                            ?>
                                        </center>
                                    </a>
                                </div>

                            </div>
                            <br>
                        </div>

                        <?php
                    }

                    ?>

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