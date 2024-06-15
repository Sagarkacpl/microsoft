<?php 
session_start();
error_reporting(0);
require('inc/dbcon.php');
require('inc/csrf_token.php');
require('inc/function.php');
if(empty($_SESSION["AdminID"]))
{
    header("Location: index");
}

$id = convert_string('decrypt', $_GET['delted_id']);
$delete_record = mysqli_query($db, "UPDATE `master_location` SET `deletedstatus`='1' WHERE id='$id'");
if($delete_record == TRUe)
{
    echo "success";
}
else
{
    echo "error";
}

?>