<?php

$servername = 'localhost';
$user = 'root';
$pass = 'password';
$dbname = 'rguconnect';

$con = new mysqli($servername, $user, $pass, $dbname);

if ($con->connect_error) {
    die('Database connection error: ' . $con->connect_error);
}
?>

<html>
<head>
	<title>Welcome to RGUcomm</title>
</head>
<body>
	Hello Reece!!!!!
</body>
</html>