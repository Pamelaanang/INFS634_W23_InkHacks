<?php
include('header.php');
include(dirname(__FILE__) . "/Settings/db.php");

if (isset($_POST['schange'])) {

    $lfname = $_POST['nu_fname'];
    $ldes = $_POST['nu_desc'];
    $lid = $_SESSION['l_id'];


    $sql = "UPDATE lecturers SET `l_fname` = '$lfname' , `l_description` = '$ldes' WHERE `lecturers.l_id` = $lid"; //creating query
    $statement = $conn->query($sql);
   

    if ($statement) {
        // echo'somtin';
        ?>
       
        <script type="text/javascript">
            alert("The Change is effected");
            window.location.href = "#";
        </script>
        <?php
    } else {
        // echo 'yup';
        ?>
        <script type="text/javascript">
            alert("An error occured");
            window.location.href = "#";
        </script>
        <?php

    }

}

?>

<?php
if (isset($_POST['uload'])) {

    $doc_name = $_POST['doc_name'];
    $doc_desc = $_POST['doc_desc'];
    $ddtype = $_POST['dtype'];
    $ddate = $_POST['ddate'];
    $drole = 2;

    $aim_dir = "Assets/pdfs/";
    $aim_file = $aim_dir . basename($_FILES['pdf_file']['name']);
    $pdf_type = strtolower(pathinfo($aim_file, PATHINFO_EXTENSION));


    if (isset($_FILES['pdf_file']['name'])) {

        $add_pdf = move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $aim_file);

        if ($add_pdf) {

            $insertquery =
            "INSERT INTO document (`doc_name`, `doc_desc`, `doc_type`, `pdf_data`, `doc_date`,`d_role`,`course_id`) 
            VALUES ('$doc_name', '$doc_desc', '$ddtype', '$aim_file', '$ddate', 1, 2)";
            $stmt = $conn->prepare($insertquery);
            $statement = $stmt->execute();
        } else {
            echo 'Failure';
        }
    } else {
        ?>

         <div class="alert alert-danger alert-dismissible
            fade show text-center">
            <a class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Failed!</strong>
            File must be uploaded in PDF format!
        </div>
<?php
    }
}
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

                    <div class='col-6' style='text-align:left;background-color:#E6E6E6'>
                        <div style='color:black; padding-top:50px; padding-left:20px;'>
                            <?php echo $_SESSION['l_description'];
                            ?>
                        </div>
                        <div class='char'
                            style='display:grid;padding-bottom:20px;grid-template-columns: 1fr 1fr;padding-top:50px;'>
                            <div class='button' id='pro_btn' style='padding-right:10px;'>
                                <button type="button" class="btn btn-dark" style='width:100%;color:#FEBA33'
                                    data-bs-toggle="modal" data-bs-target="#EditProModal">
                                    Edit Profile
                                </button>
                            </div>
                            <div class='button' style='padding-left:10px'>
                                <button type="button" class="btn btn-dark" style='width:100%;color:#FEBA33'
                                    data-bs-toggle="modal" data-bs-target="#UploadModal">
                                    Upload File
                                </button>
                            </div>
                        </div>
                    </div>



                    <div class='col-6' style='text-align:center;'>
                        <div>
                            <img height='300px' width='380px' src=" <?php echo $_SESSION['l_photo'];
                            ?>" alt="Card image cap" style='border:1px solid black;border-radius:50%'>
                        </div>̱̱
                        <div>
                            <p style='color:black;font-weight:bold;font-size:30px;'>
                                <?php echo $_SESSION['l_fname'];
                                ?>
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <br>

        <div class="modal fade" id="EditProModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header" style='background-color:#017CDA'>
                        <h5 style='color:white;padding-top:10px'> Edit Profile </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' enctype="multipart/form-data" action='#'>
                            <div class='row'>
                                <p style='color:black; text-align:center; font-size:20px;'> Edit Your Information Here
                                </p>
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-6' style='padding-left:50px;'>
                                    <div style='padding-left:20px;'>
                                        <img height='300px' width='300px' src="<?php echo $_SESSION['l_photo']; ?>"
                                            alt="Card image cap" style='border:1px solid black; border-radius:50%;'>

                                    </div>

                                    <br>

                                    <div>
                                        <p style='color:black;text-align:center;padding-left:50px; font-size:20px'><b>
                                                <?php echo $_SESSION['l_fname'];
                                                ?>
                                            </b>
                                        </p>
                                    </div>
                                    <!-- <div class="form-group" style='padding-left:15%'>
                                        <label for='#nu_photo' style='color:black; text-align:center;'>
                                            Upload a new image:
                                        </label>
                                        <div>
                                            <input type="file" class="form-control" id="nu_photo" name="nu_photo"
                                                style='width:100%;'>
                                        </div>


                                    </div> -->
                                </div>

                                <div class='col-1'>

                                </div>

                                <div class='col-5'>
                                    <div class="form-group" style='padding-top:5%;'>
                                        <input type="text" class="form-control" id="nu_fname" name="nu_fname" value="<?php echo $_SESSION['l_fname'];
                                        ?>" style='width:100%'>
                                    </div>
                                    <!-- <div class="form-group" style='padding-top:5%;'>
                                        <input type="password" class="form-control" id="l_pass" name="l_pass"
                                            placeholder="Previous Password" style='width:100%'>
                                    </div>
                                    <div class="form-group" style='padding-top:5%;'>
                                        <input type="password" class="form-control" id="l_npass" name="l_npass"
                                            placeholder="New Password" style='width:100%'>
                                    </div>
                                    <div class="form-group" style='padding-top:5%;'>
                                        <input type="password" class="form-control" id="l_email" name="l_email"
                                            placeholder="Confirm New Password" style='width:100%'>
                                    </div> -->
                                    <div class="form-group" style='padding-top:5%;'>
                                        <textarea class="form-control" id="nu_desc" name="nu_desc" placeholder="<?php echo $_SESSION['l_description'];
                                        ?>" style='width:100%; height:250px;'></textarea>
                                    </div>

                                    <div class="form-group" style='padding-top:5%;'>
                                        <button class="btn" type=' #'
                                            style='width:100%;color:#black; background-color: #FEBA33;'
                                            data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>

                                    <div class="form-group" style='padding-top:5%;'>

                                        <input style='width:100%;color:#FFFFFF;background-color: #017CDA' name='schange'
                                            id='schange' class="btn" value="Save Changes" type="submit">

                                        <!-- <button type="submit" class="btn" name='schange' id='schange'
                                        style='width:100%;color:#FFFFFF;background-color: #017CDA'
                                        data-bs-toggle="modal" data-bs-target="#UploadModal">
                                        Save Changes
                                        </button> -->
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="UploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header" style='background-color:#017CDA'>
                        <h5 style='color:white;padding-top:10px'> Upload Files </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' enctype="multipart/form-data" action="#">
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
                                        <input class="form-control" style='width:100%;' type="file" id="pdf_file"
                                            name="pdf_file" accept=".pdf">
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
                                        <select class="form-select" id="dtype" name="dtype"
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
                                            <option value="1">INFS 634</option>
                                            <option value="2">INFS 629</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class='row'>
                                <div class='col-3' style='padding-left:7%;'>
                                </div>


                                <div class='col-6' style='display:grid;grid-template-columns: 1fr 1fr;'>
                                    <div style=''>
                                        <button class="btn" type='#'
                                            style='color:#black; background-color: #FEBA33; width:150px'
                                            data-dismiss="modal"> Cancel </button>
                                    </div>
                                    <div style=''>
                                        <button type="submit" class="btn" name='uload' id='uload'
                                            style='color:#FFFFFF;background-color: #017CDA; width:150px'
                                            data-bs-toggle="modal" data-bs-target="#UploadModal"> Upload </button>
                                    </div>

                                </div>
                                <div class='col-3' style='padding-right:7%;'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>


</html>