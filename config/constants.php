<?php
//Start session
session_start();

//Create Constants to store repeating values
// define('LOCALHOST', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'food-order');

// $dbUser = 'localhost';
// $dbPass = '';
// $db = 'food-order';
// //Database connection and Selecting Database
// $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
// $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

// define('SITEURL', 'localhost/food-project/');
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "food-order";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed" . mysqli_connect_error());
}