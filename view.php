<?php
include('header.php');

include(dirname(__FILE__) . "/Settings/db.php");




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
                            <a href="" style='text-decoration:none; color:black'> Programs</a>

                            <i class="bi bi-arrow-right"></i>

                            <a href="" style='text-decoration:none; color:black'> Schools</a>

                            <i class="bi bi-arrow-right"></i>

                            <a href="" style='text-decoration:none; color:black'> Courses</a>

                            <i class="bi bi-arrow-right"></i>

                            <a href="" style='text-decoration:none; color:black'> Type </a>

                            <i class="bi bi-arrow-right"></i>

                            <button onclick="window.location.href = '#';" class='btn btn-warning'
                                style='padding-top:2px; height:30px;color:black; background-color:#FEBA33; border-radius:10px'>
                                Display</button>
                        </div>
                    </div>
                </div>

                <div class="col-2" style='text-align:right;padding-right:0px;'>
                    <img id="floatRightClear" src="Assets/img/mgu.webp" alt="Card image cap" height='200px'>
                </div>
            </div>
        </div>
        <br>

        <br>

        <div class="wrapper">
            <div class='container'>
                <?php

                $did = $_GET['did'];

                // echo $lid;
                
                $query = "SELECT * FROM document JOIN courses ON document.doc_id = courses.course_id 
                JOIN lecturers ON courses.course_id = lecturers.l_id WHERE document.doc_id =  $did"; //creating query
                $query_exc = $conn->query($query);
                while ($results = $query_exc->fetch(PDO::FETCH_ASSOC)) {

                    ?>

                    <p style='color:black'>
                        <?php echo $results['doc_name'] ?>
                    </p>
                    <object data="<?php echo $results['pdf_data']; ?>" type="application/pdf" width="100%" height="600px">
                        <p>Your browser doesn't support PDF viewing. You can
                            <a href="data:application/pdf;base64,<?php echo $pdf_base64; ?>" download>download the PDF
                                file</a> instead.
                        </p>
                    </object>

                    <br>

                    <div style='padding-top:5%;'>
                        <p style='color:black'>
                            <?php echo $results['doc_desc'] ?> :  <?php echo $results['doc_type'] ?>
                        </p>
                        <p style='color:black'>
                           Taught By: <?php echo $results['l_fname'] ?> on  <?php echo $results['doc_date'] ?>
                        </p>
                       

                    </div>

                    <?php
                }

                ?>


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