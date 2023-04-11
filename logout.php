<?php

ob_start();

session_start();

session_unset();

session_destroy();

//redirect to login page
header('Location: index.php');

?>