<?php
$database = 2;


$username;
$password;
$servername;
$dbname;


switch ($database) {
	case '0':
	$username = "cesl";
	$password = "cesl123";
	$servername = "cesl.uakron.edu";
	$dbname = "pwm_data";

	break;
	
	default:
	$username = "root";
	$password = "";
	$servername = "localhost";
	$dbname = "pwm_data";


	break;
}


$db = new mysqli($servername, $username, $password, $dbname);
