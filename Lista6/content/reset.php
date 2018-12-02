
<?php
require_once(__DIR__ . "/Page.php");
require_once "config.php";
$email_err="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if (empty(trim($_POST["email"])))
    {
        $email_err = "Niepoprawny email";
    }
    elseif (preg_match('/[a-zA-Z0-9]{5,}[@][a-zA-Z0-9]+[\.][a-zA-Z0-9]+$/',trim($_POST["email"])) === false)
    {
        $email_err = "Niepoprawny adres E-mail";
    }
    else
    {
        $sql = "SELECT ID FROM users WHERE Email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) != 1){
                    $email_err = "This email does not exist";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

    if(empty($email_err))
    {
        echo "ok";

        $token = rand(11111111,99999999);

        $to_mail = $email;
        $subject = "Password reset";
        $message = "Your password has been reset. Special token has been generated - use it to log in, then change your password. With any questions contact with us. YOUR TOKEN: $token";
        $headers = "From: caymann9marcin@gmail.com";

        $sql = "UPDATE users SET Pass = ? WHERE Email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_password, $param_id);

            // Set parameters
            $param_password = password_hash($token, PASSWORD_ARGON2I);
            $param_id = $email;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                echo $message;

                if(mail($to_mail,$subject,$message))
                {
                    echo 'email success';

                }
                else
                {
                    echo $token;
                }
                session_destroy();
                header('Location: Login.php');
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        else
        {
            echo "nah";
        }

        // Close statement
        mysqli_stmt_close($stmt);


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

$MAINPAGE = "Login.php";


$P = new Page("Reset");
$P->addCss("ResetForm.css");


echo $P->Begin();
echo $P->PageHeader();
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >
<?php
echo $P->ResetForm($email_err);
echo $P->AddReturn();

echo $P->End();

?>
