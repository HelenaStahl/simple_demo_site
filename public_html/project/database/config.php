<?php

$dbhost = "localhost";
$dbuser = "cs307-group14";
$dbpass = "BLvQX5smuRVJAWYU";
$dbname = "cs307-group14-DB";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>