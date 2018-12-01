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
    header("Location: history.php");
}
$id = $name = $account = $value = $title = $date = "";

$transid = $_SESSION['transid'];
echo $transid;

$sql = "SELECT accountnr, recivername, amount, title, transdate FROM transactions WHERE transid = ?";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_transid);

    // Set parameters
    $param_transid = $transid;

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) == 1){
            // Bind result variables
            mysqli_stmt_bind_result($stmt,  $account, $name, $value,$title,$date );
            if(mysqli_stmt_fetch($stmt))
            {
                $_SESSION['transid'] ="";

            }
        } else{
            // Display an error message if username doesn't exist
            echo "Błąd";
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}

$MAINPAGE = "menu.php";

$P = new Page("Potwierdzenie wykonania przelewu");
$P->addCss("form.css");

echo $P->Begin();
echo $P->PageHeaderLogout();
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >
    <?php

    echo $P->ConfirmationSite($transid,$name,$account,$value,$title,$date);

    echo $P->AddReturn();

    echo $P->End();



    ?>
