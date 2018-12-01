
<?php
require_once(__DIR__ . "/Page.php");
require_once "config.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


$name = $account = $value = $title= "";
$name_err = $account_err = $value_err = $title_err = "";

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty(test_input($_POST["name"])))
    {
        $name_err = "Please enter a username.";
    }
    else
    {
        $name = test_input($_POST["name"]);
    }

    if(empty(test_input($_POST["account"])))
    {
        $account_err = "Proszę podać numer konta";
    }elseif (strlen(test_input($_POST["account"])) != 26 || preg_match('/\D+/',test_input($_POST["account"])))
    {
        $account_err = "Niepoprawny numer konta";
    }
    else
    {
        $account = test_input($_POST["account"]);
    }
    if(empty(test_input($_POST["value"])))
    {
        $value_err = "Proszę podać kwote";
    }elseif ( preg_match('/\D+/',test_input($_POST["value"])))
    {
        $value_err = "Niepoprawna kwota";
    }
    else
    {
        $value = test_input($_POST["value"]);
    }
    if(empty(test_input($_POST["title"])))
    {
        $title_err = "Proszę podać tytuł przelewu";
    }
    else
    {
        $title = test_input($_POST["title"]);
    }

    if(empty($name_err) && empty($account_err) && empty($value_err) && empty($title_err))
    {
        $date=date('Y-m-d H:i:s');
        $_SESSION['name'] = $name;
        $_SESSION['acc'] = $account;
        $_SESSION['val'] = $value;
        $_SESSION['title'] = $title;
        $_SESSION['date'] = $date;
//        unset($_POST["name"]);
//        unset($_POST["account"]);
//        unset($_POST["value"]);
//        unset($_POST["title"]);
        header('Location: TransacionValidation.php');
    }
    mysqli_close($link);


}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$MAINPAGE = "menu.php";


$P = new Page("Przelew");
$P->addCss("Form.css");



echo $P->Begin();
echo $P->PageHeaderLogout();
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >

<?php
echo $P->TransactionForm($name_err,$account_err,$value_err,$title_err);

echo $P->AddReturn();

echo $P->End();

?>
