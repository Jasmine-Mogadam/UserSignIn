<?php
$serverName = "localhost";
$dBUserName = "root";
$dbPassword = "root";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName,$dBUserName,$dbPassword,$dBName);

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
