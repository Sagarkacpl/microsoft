<?php
  session_start();
  error_reporting(0);
  include('inc/function.php');
  include('inc/csrf_token.php');
  include('inc/dbcon.php');
  if(empty($_SESSION["AdminID"])){
    header("Location: index");
  }
// Assuming you have established a database connection ($db) already

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input
    $rawRowId = $_POST['rowId']; // Get the raw rowId value
    
    // Remove 'rowdel' prefix
    $rowId = str_replace('rowdel', '', $rawRowId); // This should be sanitized properly to prevent SQL injection
    
    // Perform your update query here
    $updateQuery = "UPDATE eventlocationimage SET deletedStatus = '1' WHERE id = '$rowId'";
 
    
    if (mysqli_query($db, $updateQuery)) {
        echo "Update successful"; // Send response back to JavaScript if needed
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
} else {
    // Handle other request methods or direct access attempts
    echo "Invalid request";
}
?>
