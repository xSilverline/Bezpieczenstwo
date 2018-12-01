
<?php
require_once(__DIR__ . "/Page.php");
require_once "config.php";
//session_start();

//$name = "";
//$message = "";
//$pass = "";
//
//$email = "";
//$nameErr = "";
//$passErr = "";
//$valErr = "";
//$emErr = "";
//$errorcode = 0;


$username = $password = $confirm_password = $email= "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    // Validate username
    if(empty(trim($_POST["name"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT ID FROM users WHERE Name = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["name"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate password
    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["pass"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["pass"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["validation"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["validation"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    if(empty(trim($_POST["email"])))
    {
        $email_err = "Proszę podać email";
    }
    elseif (strpos(trim($_POST["email"]), '@') === false)
    {
        $email_err = "Niepoprawny adres E-mail";
    }
    else
        {
            $email = trim($_POST["email"]);
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (Name, Pass, Email) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("Location: Login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        else
        {
            echo "nope";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$MAINPAGE = "HomePage.php";


$P = new Page("Rejestracja");
$P->addCss("Register.css");



echo $P->Begin();
echo $P->PageHeader();
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >

<?php
echo $P->RegisterForm($username_err,$password_err,$confirm_password_err,$email_err);

echo $P->AddReturn();

echo $P->End();

?>
