<?php
// define variables and set to empty values
$name =  "";
$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $message= test_input($_POST["message"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo $name;
echo "<br>";
echo $message;