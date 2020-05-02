<?php
 /*
 $loginid = $_GET["logid"];
 
 if(!isset($loginid)){
    
    header("location:index.php");
    
 }else{
    include('view/show.php');
 }
*/
session_start();


if(!isset($_SESSION['loginid'])){
   session_unset();
   header("location:index.php");
   
}else{
   include('view/show.php');
   
   
}





?>