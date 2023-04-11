<?php
//for header redirection
ob_start();

//start session - needed to capture login information 
session_start();
//connnect to the controller
require("../Controllers/lec_controller.php");


//check if login button was clicked 
if (isset($_POST['signin'])) {

    //grab form details 
    $l_email = $_POST['l_email'];
    $l_pass = md5($_POST['l_pass']);


    //check if unameexist
    $check_login = verify_lec_login_fxn($l_email);


    if ($check_login) {

        //if exist, continue to password
        //get password from database
        $hash = $check_login[0]['l_password'];

        //verify password
        if ($l_pass == $hash) {

            //set session
            $_SESSION["l_id"] = $check_login[0]['l_id'];
            $_SESSION["l_fname"] = $check_login[0]['l_fname'];
            $_SESSION["l_description"] = $check_login[0]['l_description'];
            $_SESSION["l_email"] = $check_login[0]['l_email'];



            //redirection to home page
            ?>
            <script type="text/javascript">
                alert("Access Permitted");
                window.location.href = "../profile.php";
            </script>
            <?php
            //to make sure the code below does not execute after redirection

            $user_log_det = lec_login_details_function($_SESSION["l_id"]);

            $user_activity = lec_last_activity_function($_SESSION["l_id"]);
            exit();
        } else {
            //echo appropriate error
            ?>
            <script type="text/javascript">
                alert("Incorrect Password");
                window.location.href = "../login.php";
            </script>
            <?php
        }

    } else {
        //echo appropriate error
        ?>
        <script type="text/javascript">
            alert("Incorrect Username or Password");
            window.location.href = "../login.php";
        </script>
        <?php


    }
}

?>