<?php
session_start();


if(isset($_SESSION['loginid'])){
   session_unset();
   header("location:index.php");
   
}

?>