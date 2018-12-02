<?php
require_once(__DIR__ . "/Page.php");
require_once "config.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: login.php");
    exit;
}


$date = $_SESSION['date'];
$id = $_SESSION['id'];
$transid ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $account = $_POST['account'];
    $value = $_POST['value'];
    $title = $_POST['title'];

    $date = $_SESSION['date'];
    $id = $_SESSION['id'];
    $transid ="";

    if(!empty($id) && !empty($account) && !empty($value) && !empty($title) && !empty($date) && !empty($name))
    {
        $sql = "INSERT INTO transactions(UserID,accountnr,recivername,amount,title,transdate, transid) VALUES (?, ?, ?, ?, ?, ?, ?)";


        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ississs", $param_id, $param_account, $param_name, $param_value, $param_title, $param_date, $param_transid);

            // Set parameters
            $param_id = $id;
            $param_account = $account;
            $param_name = $name;
            $param_value = $value;
            $param_title = $title;
            $param_date = $date;
            $param_transid = substr($date,0,4).substr($date,5,2).substr($date,8,2).substr($date,11,2).substr($date,14,2).substr($account,22,4);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {

                            $_SESSION['transid'] = $param_transid;
                            $_SESSION['name'] = "";
                            $_SESSION['acc'] = "";
                            $_SESSION['val'] = "";
                            $_SESSION['title'] = "";
                            $_SESSION['date'] = "";
                            header("Location: confirmation.php");

            }
            else
                {
                echo "Something went wrong. Please try again later.";
                echo mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        }
        else {
        echo "Something went wrong. Please try again later.";
    }

    }



    mysqli_close($link);
}

$MAINPAGE = "form.php";


$P = new Page("Potwierdzenie przelewu");
$P->addCss("form.css");
//$P->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
$P->addJs("inject1.js");
//

echo $P->Begin();
echo $P->PageHeaderLogout();
?>

<form id="transForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post"  >

<?php



echo $P->ValidationSite($date);
?>

<?php
//echo "<script src=\"scripts/inject1.js\"></script>";

echo $P->AddReturn();

echo $P->End();

?>
