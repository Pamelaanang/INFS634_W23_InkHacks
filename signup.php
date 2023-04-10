<?php

date_default_timezone_set('America/Toronto'); //setting default timezone
$date = new DateTime(); //Creating a variable for DateTime
$TimeDate = $date->format('Y-m-d H:i:s');

require 'Settings/db_class.php'; //load credentials 

// if (!empty($_POST['email']) && !empty($_POST['password'])) { //check if email and password is submitted using POST method

//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //PHP Hashing for password
//     //Extracting data from the database 
//     $sql = "INSERT INTO `lecturers` (`l_id`, `l_fname`, `l_email`, `l_number`, `l_password`, `l_description`, `l_photo`) 
//     VALUES (NULL, '" . $_POST['l_name'] . "', '" . $_POST['l_email'] . "', '" . $_POST['l_number'] . "', '" . $password . "', '" . $_POST['l_description'] . "', '" . $_POST['l_photo'] . "')";
//     $stmt = $conn->prepare($sql);
//     //Creating New Event
//     if ($stmt->execute()) { //executing query to update the database 

//         $message = "Account Created"; //Message to show account was created
//     } else {
//         $message = "Error was encountered in creating account."; //Message to show error in creating account 
//     }
// }

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

    <link rel="stylesheet" href="Assets/css/Mystyle.css">
</head>

<body>
    <div id="main">
        <div class='container-fluid' id='cfluid' style='border:1px solid black;'>
            <div class='row'>
                <div class="col-10" style='padding-left:50px;height:20%;padding-top:20px'>
                    <br>
                    <h2><b>Sign Up </b></h2>
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
                    <div class='col-6' style='background-color:#E6E6E6'>
                        <div class="form" style='margin:auto'>
                            <form method='POST' action="Functions/lec_function.php" enctype="multipart/form-data">
                                <div class="form-group" style='padding-top:5%'>
                                    <input type="text" class="form-control" id="l_fname" name="l_fname"
                                        placeholder="Your Name">
                                </div>
                                <div class='row'>
                                    <div class='col-6'>
                                        <div class="form-group" style='padding-top:5%'>
                                            <input type="email" class="form-control" id="l_email" name="l_email"
                                                placeholder=" Email Address">
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class="form-group" style='padding-top:5%'>
                                            <input type="text" class="form-control" id="l_number" name="l_number"
                                                placeholder="Employee Number">
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-6'>
                                        <div class="form-group" style='padding-top:5%'>
                                            <input type="password" class="form-control" id="l_password"
                                                name="l_password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class="form-group" style='padding-top:5%'>
                                            <input type="password" class="form-control" id="l_pass" name="l_pass"
                                                placeholder="Retype Password">
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-6'>
                                        <div class="form-group" style='padding-top:5%'>
                                            <input type="text" class="form-control" id="l_description"
                                                name="l_description" placeholder="About Me">
                                        </div>
                                    </div>
                                    <div class='col-6'>
                                        <div class="form-group" style='padding-top:5%'>
                                            <input type="file" class="form-control" id="l_photo" name="l_photo"
                                                placeholder="Retype Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check" style='padding-top:20px;padding-left:35%'>
                                    <input class="form-check-input" style='text-align:center;' type="checkbox" value=""
                                        id="tandc" name='tandc'>
                                    <label class="form-check-label" for="tandc" style='color:black'>
                                        I agree to the <a href=''>Terms and Conditions</a>
                                    </label>
                                </div>
                                <div class='button text-center' style='padding-top:10px;'>
                                    <input style='width:30%;height:10%;color:#FEBA33' name="reg" class="btn btn-dark" value="Register" type="submit"
                                        id="reg">
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='col-6' style='padding-left:0px'>
                        <img src="Assets/img/sign_up.jpeg" alt="Card image cap"
                            style='border:1px solid black;border-radius:0px;' width='100%'>

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