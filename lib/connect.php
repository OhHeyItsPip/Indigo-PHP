<?php

error_reporting(E_ALL);

$memo_title = "What is Indigo?";
$memo_content = "Indigo is a social Media network made by the Indigo Development Team! The site aims to recreate Miiverse's best aspects, while improving some of it's flaws.";

function rip() {
  http_response_code(503);
  exit('Indigo is having trouble connecting to the database right now. Please come back later.');
}

$db = mysqli_connect('localhost','root','','indigo');

if(!$db) {
	rip();
}

if(isset($_SESSION['loggedin'])) {

	$get_user = $db->query("SELECT * FROM users WHERE user_id = ".$_SESSION['user_id']);
	$user = mysqli_fetch_array($get_user);

} else {
	$_SESSION['loggedin'] = false;
	$_SESSION['user_id'] = 0;
}



@$db->query('SET time_zone = "-4:00";') || rip();
date_default_timezone_set('America/New_York');

?>