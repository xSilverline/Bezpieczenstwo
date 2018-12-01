<?php
$servername = "localhost:3306";
$username = "PageUser";
$password = "ImPageUser";

// Create connection
$link = new mysqli($servername, $username, $password,'userdata');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
