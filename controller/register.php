<?php

include('../model/login-register-class.php');

 $name = $_POST['name'];
 $username = $_POST['user'];
 $password = base64_encode($_POST['pwd']);

 $register = new loginregister();
 $register->insertdata($name, $username, $password);

?>
