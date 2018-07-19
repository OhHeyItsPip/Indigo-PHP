<?php

error_reporting(E_ALL);

$memo_title = "What is Indigo?";
$memo_content = "Indigo is a social Media Network made by the Indigo Development Team! The site aims to recreate the Miiverse experience, while improving some of Miiverse's flaws.";

function rip() {
  http_response_code(503);
  exit('Indigo is having trouble connecting to the database right now. Please come back later.');
}

$db = mysqli_connect('localhost','root','','indigo');

if(!$db) {
	rip();
}

@$db->query('SET time_zone = "-4:00";') || rip();
date_default_timezone_set('America/New_York');