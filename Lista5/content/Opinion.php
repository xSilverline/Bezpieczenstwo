
<?php
require_once(__DIR__ . "/Page.php");

session_start();

$name = "";
$message = "";
$nameErr = "";
$msgErr = "";
$captcha= "";
$ans = "";

$servername = "localhost:3306";
$username = "PageUser";
$password = "ImPageUser";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(empty($_SESSION))
    {
        $_SESSION['a'] = rand(1, 5);
        $_SESSION['b'] = rand(1, 5);
        $_SESSION['c'] = rand(1, 5);
        $_SESSION['d'] = rand(1, 5);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $ans = ($_SESSION['a']*$_SESSION['d']) - ($_SESSION['b']*$_SESSION['c']);
//
//    if( !empty($_POST["captcha"]))
//    {
////        $captcha = test_input($_POST["captcha"]);
////        echo $ans;
////        echo $_SESSION['a'];
//    }
    if (empty($_POST["name"]))
    {
        $nameErr = "Pole wymagane";
    }
    else
        {
        $name = test_input($_POST["name"]);


        }
    if (empty($_POST["message"]))
    {
        $msgErr = "Pole wymagane";
    }
    else
        {
        $message = test_input($_POST["message"]);
    }

    if(!empty($_POST["name"]) && !empty($_POST["message"]) && $_POST["captcha"] == intval($ans))
    {
        $date=date('Y-m-d H:i:s');
        $sql = "INSERT INTO mysite.opinions (Nick, Opinion, Dodanie)
                VALUES ('$name','$message','$date')";
        $conn->query($sql);

        unset($_POST["name"]);
        unset($_POST["message"]);

    }
    $_SESSION['a'] = rand(1, 5);
    $_SESSION['b'] = rand(1, 5);
    $_SESSION['c'] = rand(1, 5);
    $_SESSION['d'] = rand(1, 5);

//                    ?>
    <!--                    <script type="text/javascript">-->
    <!--                        window.location = "menu.php";-->
    <!--                    </script-->
    <!--                    --><?php

}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$AUTHOR = "Marcin Musielski";
$TITLE = "Moje Przygody z Edukacją";
$INFO = "Dodaj swoją opinię!";
$MAINPAGE = "HomePage.php";


$P = new Page("User Opinion");
$P->addCss("Opinion.css");
$P->addInfo($INFO);
$P->addJs('https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML');


echo $P->Begin();
echo $P->PageHeader();
echo $P->CreateForm($nameErr,$passErr,$emErr);

echo $P->CloseSection();
echo $P->AddReturn();

echo $P->End();

?>
