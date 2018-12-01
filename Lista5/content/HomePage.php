<?php
    require_once(__DIR__ . "/Page.php");


    $MAIN_MENU_ITEMS = [
    "M1.1"   => ["Rejestracja","Register.php"],
    "M1.2"   => ["Login", "Login.php"],
    ];

    $P = new Page("HomePage");
    $P->addCss("HomePage.css");

    echo $P->Begin();
    echo $P->PageHeader();
    echo $P->CreateMenuDiv("studyCont");



    echo $P->End();

    ?>


