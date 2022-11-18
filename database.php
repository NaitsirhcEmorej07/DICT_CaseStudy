<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_vaccination";

$connect = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if(!$connect){
    die("Cant connect");
}

?>