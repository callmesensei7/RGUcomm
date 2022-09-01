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

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script> 

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="top_bar">
        <div class="logo">
            <a href="index.php">RGUcomm</a>
        </div>

    </div>