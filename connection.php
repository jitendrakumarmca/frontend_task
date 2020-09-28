<?php
/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'frontendtask')

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);*/

$mysqli = new mysqli("localhost","root","","frontendtask");

// Check connection

if($mysqli -> connect_errno){
	echo "Failed to connect mysql".$mysql -> connect_error;
	exit();
}

?>