<?php
$serverName = "localhost";
$dbUsername = "site123";
$dbPassword = "C4kAnszb1ibbk!_[";
$dbName = "website1_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
} 