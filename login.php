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

    <link rel="stylesheet" href="Assets/css/Mystyle.css">
</head>

<body>
    <div id="main">
        <div class='container-fluid' id='cfluid' style='border:1px solid black;'>
            <div class='row'>
                <div class="col-10" style='padding-left:50px;height:20%;padding-top:20px'>
                    <br>
                    <h2><b>Sign In </b></h2>
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
                            <form method='POST' enctype="multipart/form-data">
                                <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                    <input type="email" class="form-control" id="l_email" name="l_email"
                                        placeholder="Email Address" style='width:60%' >
                                </div>
                                <div class="form-group" style='padding-top:5%; padding-left:27%'>
                                    <input type="password" class="form-control" id="l_password" name="l_password"
                                        placeholder="Your Name" style='width:60%'>
                                </div>
        
                                <div class="form-element" style='padding-top:15px;padding-left:40%'>
                                    <label class="form-check-label" for="tandc" style='color:black'>
                                       <a href=''>Forgot Password?</a>
                                    </label>
                                </div>
                                <div class='button text-center' style='padding-top:15px;'>
                                    <input style='width:20%;height:15%;color:#FEBA33' name="signin" class="btn btn-dark" value="Sign In" type="submit"
                                        id="signin">
                                </div>
                                <div class="form-element" style='padding-top:15px;padding-left:45%'>
                                    <label class="form-check-label" for="tandc" style='color:black'>
                                       <a href='signup.php'>Sign Up?</a>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='col-6' style='padding-left:0px'>
                        <img src="Assets/img/og-sign-in.png" alt="Card image cap"
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