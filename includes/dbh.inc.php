<?php
$serverName = "localhost";
$dBUserName = "root";
$dbPassword = "root";
$dBName = "phpproject01";
$port = 3306;

$conn = mysqli_connect($serverName,$dBUserName,$dbPassword,$dBName);

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//1:26:15 Qa7KDRmgtxMFXXQ
