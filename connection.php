<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_book";

$con = mysqli_connect("localhost","root","","db_book");

if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>