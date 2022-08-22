<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$servername = 'localhost';
$user = 'root';
$pass = 'password';
$dbname = 'rguconnect';

$con = new mysqli($servername, $user, $pass, $dbname);

if ($con->connect_error) {
    die('Connection error: ' . $con->connect_error);
}
