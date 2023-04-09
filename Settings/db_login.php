<?php
$server = 'localhost:8888';
$username = 'root';
$password = '';
$database = 'Ink_Hacks';


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

?>