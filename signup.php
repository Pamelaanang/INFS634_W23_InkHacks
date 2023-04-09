<?php

date_default_timezone_set('America/Toronto'); //setting default timezone
$date = new DateTime(); //Creating a variable for DateTime
$TimeDate = $date->format('Y-m-d H:i:s'); 



require 'Settings/db_login.php'; //load credentials 

if(!empty($_POST['email']) && !empty($_POST['password'])){ //check if email and password is submitted using POST method

    $password=password_hash($_POST['password'], PASSWORD_DEFAULT); //PHP Hashing for password
    //Extracting data from the database 
    $sql = "INSERT INTO `lecturers` (`l_id`, `l_fname`, `l_email`, `l_number`, `l_password`, `l_description`, `l_photo`) 
    VALUES (NULL, '".$_POST['l_name']."', '".$_POST['l_email']."', '".$_POST['l_number']."', '".$password."', '".$_POST['l_description']."', '".$_POST['l_photo']."')";
    $stmt = $conn->prepare($sql);
    //Creating New Event
    if( $stmt->execute() ){  //executing query to update the database 

        $message="Account Created"; //Message to show account was created
    } else {
            $message="Error was encountered in creating account."; //Message to show error in creating account 
		}
    }

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