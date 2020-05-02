<?php

if($_POST['username'] == ""){
    echo "Please enter your username";
}
else{
    include("../model/login-register-class.php");

    $recover = new loginregister();
    $recover->forgetpass($_POST['username']);
}


?>