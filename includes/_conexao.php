<?php
$servername = "localhost";
$username = 'root';
$password = '12345';
$db = 'webaula_trabalhoweb';

$con = new mysqli($servername, $username, $password, $db);

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
	//echo "connect ok.";
}

mysqli_set_charset($con,"utf8");
?>