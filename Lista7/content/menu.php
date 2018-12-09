<?php
require_once(__DIR__ . "/Page.php");

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$MAIN_MENU_ITEMS = [
    "M1.1"   => ["Przelew","form.php"],
    "M1.2"   => ["Historia", "history.php"],
];

$P = new Page("Strona Główna");
$P->addCss("HomePage.css");

echo $P->Begin();
echo $P->PageHeaderLogout();
echo $P->CreateMenuDiv("studyCont");



echo $P->End();

?>


