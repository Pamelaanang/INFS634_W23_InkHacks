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
                            <!-- <div class='row'>
                                <div class='button' id='pro_btn' style='padding-top:100px;padding-left:20px;'>
                                    <button type="button" class="btn btn-dark" style='width:20%;height:15%;color:#FEBA33'
                                        data-bs-toggle="modal" data-bs-target="#EditProModal">
                                        Edit Profile
                                    </button>
                                </div>
                                <div class='button' style='padding-top:100px;padding-left:20px'>
                                    <button type="button" class="btn btn-dark" style='width:20%;height:15%;color:#FEBA33'
                                        data-bs-toggle="modal" data-bs-target="#UploadModal">
                                        Upload File
                                    </button>
                                </div>
                            </div> -->
                        </div>



                        <div class='col-6' style='text-align:center;'>
                            <div>
                                <img height='300px' width='380px' src=" <?php echo $results['l_photo'];
                                    ?>" alt="Card image cap"
                                    style='border:1px solid black;border-radius:50%'>
                            </div>̱̱
                            <div>
                                <p style='color:black;font-weight:bold;font-size:30px;'>
                                    <?php echo $results['l_fname'];
                                    ?>
                                </p>
                            </div>
                        </div>


                        <!-- <div class='col-3 position-relative' style='text-align:left; background-color:#E6E6E6'>
                            <div style='color:black; padding-top:50px; padding-left:20px;'>
                           
                            </div>
                          
                        </div> -->
                        <?php
                    }

                    ?>
                </div>
            </div>
        </div>
        <br>

        <!-- <div class="modal fade" id="EditProModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header" style='background-color:#017CDA'>
                        <h5 style='color:white;padding-top:10px'> Edit Profile </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' enctype="multipart/form-data" action="Functions/editpro.php">
                            <div class='row'>
                                <p style='color:black; text-align:center; font-size:20px;'> Edit Your Information Here
                                </p>
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-5' style='padding-left:50px;'>
                                    <div style='padding-left:20px;'>
                                        <img height='300px' width='300px' src="Assets/img/fac3.jpeg"
                                            alt="Card image cap" style='border:1px solid black; border-radius:50%;'>
                                    </div>
                                    <br>
                                    <div>
                                        <p style='color:black;text-align:center;padding-left:50px; font-size:20px'><b>
                                                Prof. Cherry
                                                Blossom
                                            </b>
                                        </p>
                                    </div>
                                    <div>
                                        <div class='row'>
                                            <div class='col-5'>
                                                <button class="btn" type='#'
                                                    style='width:150%;height:100%;color:#black; background-color: #FEBA33;'
                                                    data-dismiss="modal">
                                                    Cancel
                                                </button>
                                            </div>

                                            <div class='col-2'>
                                            </div>

                                            <div class='col-5'>
                                                <button type="submit" class="btn" name='schange' id='schange'
                                                    style='width:150%;height:100%;color:#FFFFFF;background-color: #017CDA'
                                                    data-bs-toggle="modal" data-bs-target="#UploadModal">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-6'>
                                    <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                        <input type="text" class="form-control" id="l_fname" name="l_fname"
                                            placeholder="Your Name" style='width:100%'>
                                    </div>
                                    <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                        <input type="password" class="form-control" id="l_pass" name="l_pass"
                                            placeholder="Previous Password" style='width:100%'>
                                    </div>
                                    <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                        <input type="password" class="form-control" id="l_email" name="l_email"
                                            placeholder="New Password" style='width:100%'>
                                    </div>
                                    <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                        <input type="password" class="form-control" id="l_email" name="l_email"
                                            placeholder="Confirm New Password" style='width:100%'>
                                    </div>
                                    <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                        <input type="text" class="form-control" id="l_email" name="l_email"
                                            placeholder="About" style='width:100%; height:100px;'>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- <div class="modal fade" id="UploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header" style='background-color:#017CDA'>
                        <h5 style='color:white;padding-top:10px'> Upload Files </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' enctype="multipart/form-data" action="Functions/upload.php">
                            <div class='row'>
                                <p style='color:black; text-align:center; font-size:20px;'>
                                    <i class="bi bi-cloud-arrow-up" style='color:black;'></i>
                                    Upload Content Here!
                                </p>
                            </div>

                            <div class='row'>
                                <div class='col-5' style='padding-left:50px;'>
                                    <div>
                                        <label for="pdf-upload">Upload PDF:</label>
                                        <input class="form-control" style='width:100%;' type="file" id="pdf-upload"
                                            name="pdf-upload" accept=".pdf">
                                    </div>

                                    <div class="form-group" style='padding-top:5%;'>
                                        <input type="text" class="form-control" id="doc_name" name="doc_name"
                                            placeholder="Document Name" style='width:100%'>
                                    </div>

                                    <div class="form-group" style='padding-top:5%;'>
                                        <input type="text" class="form-control" id="doc_desc" name="doc_desc"
                                            placeholder="Document Description" style='width:100%; height:100px;'>
                                    </div>

                                </div>

                                <div class='col-2'>
                                </div>

                                <div class='col-5' style='padding-right:50px;padding-top:3.4%'>

                                    <div class="form-group">
                                        <input type="date" class="form-control" id="ddate" name="ddate"
                                            placeholder="Course Year" style='width:100%;'>
                                    </div>

                                    <div class="form-group" style='padding-top:5%;'>
                                        <select class="form-select" id="myDropdown" name="myDropdown"
                                            aria-label="Select an option" style='width: 100%;'>
                                            <option value="" disabled selected>Select The Type of Document</option>
                                            <option value="assignment">Assignment</option>
                                            <option value="quizzes">Quizzes</option>
                                            <option value="notes">Notes</option>
                                            <option value="slidespdf">Slides PDF</option>
                                        </select>
                                    </div>

                                    <div class="form-group" style='padding-top:5%;'>
                                        <select class="form-select" id="myDropdown" name="myDropdown"
                                            aria-label="Select an option" style='width: 100%;'>
                                            <option value="" disabled selected>Select The Course Name</option>
                                            <option value="1">INFS 620</option>
                                            <option value="2">INFS 634</option>
                                            <option value="3">INFS 611</option>
                                            <option value="4">INFS 601</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-3' style='padding-left:7%;'>
                                </div>


                                <div class='col-6'>
                                    <div style='margin-right:20px'>
                                        <button class="btn" type='#' style='color:#black; background-color: #FEBA33;'
                                            data-dismiss="modal"> Cancel </button>
                                    </div>
                                    <div style='margin-left:20px'>
                                        <button type="submit" class="btn" name='uload' id='uload'
                                            style='color:#FFFFFF;background-color: #017CDA' data-bs-toggle="modal"
                                            data-bs-target="#UploadModal"> Upload </button>
                                    </div>

                                </div>



                                <div class='col-3' style='padding-right:7%;'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->


    </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>


</html>