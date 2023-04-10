<?php
//for header redirection
ob_start();

//start session
session_start(); 

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//funtion to check for login
function check_login(){
	//check if login session exit
    if (!isset($_SESSION['l_id'])) {
		
        //redirect to login page
		header('Location: ../login.php');
	}
}

//function to get lecturer id
function get_lecturer_id(){
	//check if login session userid exists
	if (isset($_SESSION['l_id'])) { 
		//return lecturer id
    	return $_SESSION['l_id'];
	}
}

function get_user_IP(){
	if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
	 // Check IP from internet.
	 $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
	 // Check IP is passed from proxy.
	 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	 // Get IP address from remote address.
	 $ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
   }

?>