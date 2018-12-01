
<?php
require_once(__DIR__ . "/Page.php");
require_once "config.php";


$email = "";
$message = "";
$pass = "";
$emErr = "";
$nameErr = "";
$passErr = "";



// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (empty(trim($_POST["email"])))
    {
        $emErr = "Niepoprawny email";
    }
    else
    {
        $email = test_input($_POST["email"]);

    }

//    if(!empty($_POST["name"]) && !empty($_POST["message"]) && $_POST["captcha"] == intval($ans))
//    {
//        $date=date('Y-m-d H:i:s');
//        $sql = "INSERT INTO mysite.opinions (Nick, Opinion, Dodanie)
//                VALUES ('$name','$message','$date')";
//        $conn->query($sql);
//
//        unset($_POST["name"]);
//        unset($_POST["message"]);
//
//    }
//    $_SESSION['a'] = rand(1, 5);
//    $_SESSION['b'] = rand(1, 5);
//    $_SESSION['c'] = rand(1, 5);
//    $_SESSION['d'] = rand(1, 5);



}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$MAINPAGE = "Login.php";


$P = new Page("Reset");
$P->addCss("ResetForm.css");


echo $P->Begin();
echo $P->PageHeader();
echo $P->ResetForm($emErr);
echo $P->AddReturn();

echo $P->End();

?>
