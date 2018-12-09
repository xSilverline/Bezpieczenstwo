<?php
require_once(__DIR__ . "/Page.php");
require_once "config2.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: login.php");
    exit;
}

$param_user = $param_account = $param_name = $param_value = $param_title = $param_date = $param_transid ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $transid = test_input($_POST['transid']);
    if (!empty($transid))
    {

        $sql = "SELECT UserID,accountnr, recivername, amount, title, transdate, transid FROM toaccept WHERE transid = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_id);

            // Set parameters
            $param_id = $transid;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt,$user,  $account, $name, $value,$title,$date,$transid );
                    if(mysqli_stmt_fetch($stmt))
                    {
                        $param_user = $user;
                        $param_account = $account;
                        $param_name = $name;
                        $param_value = $value;
                        $param_title = $title;
                        $param_date = $date;
                        $param_transid = $transid;
                    }



                } else{
                    // Display an error message if username doesn't exist
                    echo  "No transaction";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
        $sql = "INSERT INTO transactions(UserID,accountnr,recivername,amount,title,transdate, transid) VALUES (?, ?, ?, ?, ?, ?, ?)";



        if ($stmt = mysqli_prepare($link, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ississs", $userx, $accountx, $namex, $valuex, $titlex, $datex, $transidx);

            // Set parameters
            $userx = $param_user;
            $accountx=$param_account;
            $namex = $param_name;
            $valuex = $param_value;
            $titlex = $param_title;
            $datex = $param_date;
           $transidx = $param_transid;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt))
            {

                mysqli_stmt_close($stmt);
                $sql = "DELETE FROM toaccept WHERE transid =?";

                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_transidx);

                    // Set parameters
                    $param_transidx= $param_transid;

                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt))
                    {
                        header("Location: manage.php");
                    }
                    else
                    {
                        echo "Something went wrong-1. Please try again later.";
                        echo mysqli_stmt_error($stmt);
                    }
                }
            } else {
                echo "Something went wrong-2. Please try again later.";
                echo mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else
            {
            echo "Something went wrong-3. Please try again later.";
        }
    }
}
$id = $name = $account = $value = $title = $date = "";

$id = $_SESSION['id'];

//---------------------------

$MAINPAGE = "admin.php";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$P = new Page("Potwierdzenie wykonania przelewu");
$P->addCss("Form.css");
//$P->addJs("inject3.js");

echo $P->Begin();
echo $P->PageHeaderLogout();


echo $P->CreateAdmin();



$sql = "SELECT accountnr, recivername, amount, title, transdate, transid FROM toaccept";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
//    mysqli_stmt_bind_param($stmt, "s", $param_id);
//
//    // Set parameters
//    $param_id = $id;

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
                echo $P->AddAdmin($transid,$name,$account,$value,$title,$date);
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
