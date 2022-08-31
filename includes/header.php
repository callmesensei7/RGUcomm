<?php
require 'config/config.php';

if (isset($SESSION['username'])) {
    $userLoggedIn = $SESSION['username'];
}
else {
    header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to RGUcomm</title>
</head>
<body>

jaffdhvdjvchhc