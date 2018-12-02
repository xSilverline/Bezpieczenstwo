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

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    header("Location: menu.php");
}
$id = $name = $account = $value = $title = $date = "";

$id = $_SESSION['id'];

//---------------------------

$MAINPAGE = "menu.php";

$P = new Page("Potwierdzenie wykonania przelewu");
$P->addCss("Form.css");
$P->addJs("inject3.js");

echo $P->Begin();
echo $P->PageHeaderLogout();


    echo $P->CreateHistory();



$sql = "SELECT accountnr, recivername, amount, title, transdate, transid FROM transactions WHERE UserID = ?";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_id);

    // Set parameters
    $param_id = $id;

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) > 0)
        {
            // Bind result variables
            mysqli_stmt_bind_result($stmt,  $account, $name, $value,$title,$date,$transid );
            while(mysqli_stmt_fetch($stmt))
            {
                echo $P->AddHistory($transid,$name,$account,$value,$title,$date);
            }
        } else{
            // Display an error message if username doesn't exist
            $username_err = "No account found with that username.";
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
echo $P->CloseSection();
//echo "<script src=\"scripts/inject3.js\"></script>";


    echo $P->AddReturn();

    echo $P->End();



    ?>
