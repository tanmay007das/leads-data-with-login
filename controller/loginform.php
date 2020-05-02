<?php
session_start();
include('model/login-register-class.php');


 if(isset($_POST['loginup'])){
     //echo $_POST['username'];
    $usrname = $_POST['username'];
    $password = base64_encode($_POST['password']);

 $logindata = new loginregister();
 $logindata->login($usrname,$password);
 $_SESSION['loginid'] = $logindata->iddata;
 
 if(isset($_SESSION['loginid'])){
     header("Location: showdata.php"); 
 }
 else{
     echo "<script> alert('Your username or password not matched'); </script>";
 }



 }
?>