<?php 
session_start();
error_reporting(0);
include('inc/dbcon.php');
if(empty($_SESSION["AdminID"]))
{
    header('Location: index');
}


unset($_SESSION["AdminID"]);
unset($_SESSION["AdminName"]);
unset($_SESSION["AdminEmail"]);
unset($_SESSION["AdminLastLogin"]);
header('Location: index');
?>