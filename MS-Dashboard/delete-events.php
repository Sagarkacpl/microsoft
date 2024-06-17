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
$delete_record = mysqli_query($db, "UPDATE `add_events` SET `deleted_status`='1' WHERE id='$id'");
$delete_record1 = mysqli_query($db, "UPDATE `eventlocationimage` SET `deletedStatus`='1' WHERE eventID='$id'");
if($delete_record == TRUE && $delete_record1 == TRUE)
{
    echo "success";
}
else
{
    echo "error";
}

?>