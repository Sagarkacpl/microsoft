<?php 
    session_start();
    error_reporting(0);
    include('inc/function.php');
    include('inc/csrf_token.php');
    include('inc/dbcon.php');
    if(empty($_SESSION["AdminID"])){
      header("Location: index");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Venue Booking</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/faviconn.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include('inc/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include('inc/navbar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-9 mb-xl-0">
                            <h4 class="font-weight-bold text-dark mb-4">Sports</h4>
                        </div>
                        <div class="col-sm-3 mb-xl-0 text-right pb-4">
                            <!-- <a href="add-sport.html" class="btn btn-primary" id="addBtn"><i class="fa fa-plus"></i> Add Sports</a> -->
                            <!-- Button trigger modal -->
                            <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId" >Add Sports</a>
                        </div>
                    </div>
                            <!-- Add Modal -->
                            <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Sports</h5>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"><i class="icon-cross"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" autocomplete="off">
                                                <input type="hidden" name="_token" value="<?php echo $token; ?>" class="form-control">
                                                <div class="mb-3">
                                                    <label for="NameSports" class="form-label text-left">Name of Sports</label>
                                                    <input type="text" name="SportsName" id="NameSports" class="form-control" placeholder="Enter Name of Sports" aria-describedby="helpId" required/>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                               if (isset($_POST['SportsName']) && empty($csrf_error)) {
                                // Sanitize the input
                                $SportsName = filter_var(trim($_POST["SportsName"]), FILTER_SANITIZE_STRING);

                                // Prepare the query to check if the sports name already exists
                                $stmt = $db->prepare("SELECT * FROM `master_sports` WHERE `sports_name` = ? AND `deletedstatus` = '0'");
                                $stmt->bind_param("s", $SportsName);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows == 0) {
                                    // Prepare the insert statement
                                    $stmt = $db->prepare("INSERT INTO `master_sports` (`sports_name`, `deletedstatus`, `updated_at`, `created_at`) VALUES (?, '0', NULL, current_timestamp())");
                                    $stmt->bind_param("s", $SportsName);
                                    if ($stmt->execute()) {
                                        $_SESSION['status'] = "Sport Name saved successfully.";
                                        $_SESSION['status_code'] = "success";
                                    } else {
                                        $_SESSION['status'] = "Failed to save Sport Name. Please try again.";
                                        $_SESSION['status_code'] = "error";
                                    }
                                } else {
                                    $_SESSION['status'] = "This Entry already exists.";
                                    $_SESSION['status_code'] = "error";
                                }

                                // Close the statement
                                $stmt->close();
                            } else {
                                $_SESSION['status'] = $csrf_error;
                                $_SESSION['status_code'] = "error";
                            }
                            ?>
                    <!-------- tab -------->
                    <div class="tab-content m-tab">
                        <div id="week" class="tab-pane fade in active show" style="display: block;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="sportsTable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name of Sports</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $FetchQuery = mysqli_query($db, "SELECT * FROM `master_sports` WHERE deletedstatus='0' ORDER BY id DESC");
                                                    $count = 1 ;
                                                    while($read = mysqli_fetch_assoc($FetchQuery)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $count; ?></td>
                                                    <td class="py-1"><?php echo $read['sports_name'] ?></td>
                                                    <td><?php echo $date =  date("d-M-Y", strtotime($read['created_at'])) ?></td>
                                                    <td>
                                                    <a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#edit-modal-<?php echo $read['id']; ?>">Edit</a>
                                                    <!--  Edit Modal  -->
                                                    <div class="modal fade" id="edit-modal-<?php echo $read['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="EditmodalTitleId" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="EditmodalTitleId">Edit <?php echo $read['sports_name'] ?></h5>
                                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"><i class="icon-cross"></i></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post" autocomplete="off">
                                                                        <input type="hidden" name="_token" value="<?php echo $token; ?>" class="form-control">
                                                                        <input type="hidden" name="recordID" value="<?php echo $read['id']; ?>" class="form-control">
                                                                        <div class="mb-3">
                                                                            <label for="NameSports" class="form-label text-left">Name of Sports</label>
                                                                            <input type="text" name="EditSportsName" value="<?php echo $read['sports_name'] ?>" id="NameSports" class="form-control" placeholder="Enter Name of Sports" aria-describedby="helpId" required />
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <!-- Optional footer content can be added here -->
                                                                </div>
                                                            </div>
                                                            <?php 
                                                               if (isset($_POST['EditSportsName']) && empty($csrf_error)) {
    // Sanitize the input
    $EditSportsName = filter_var(trim($_POST["EditSportsName"]), FILTER_SANITIZE_STRING);
    $recordID = mysqli_real_escape_string($db, $_POST['recordID']);
    $CurrentDate = date("Y-m-d H:i:s");

    // Prepare the SQL statement to check for existing sport name
    $stmt = $db->prepare("SELECT * FROM `master_sports` WHERE `sports_name` = ? AND `deletedstatus` = '0'");
    $stmt->bind_param("s", $EditSportsName);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the sport name already exists
    if ($result->num_rows == 0) {
        // Prepare the SQL statement to update the sport name
        $stmt = $db->prepare("UPDATE `master_sports` SET `sports_name` = ?, `updated_at` = ? WHERE `id` = ?");
        $stmt->bind_param("ssi", $EditSportsName, $CurrentDate, $recordID);

        // Execute the statement and set session variables based on the result
        if ($stmt->execute()) {
            $_SESSION['Edit_status'] = "Sport Name updated successfully.";
            $_SESSION['Edit_status_code'] = "success";
        } else {
            $_SESSION['Edit_status'] = "Failed to update Sport Name. Please try again.";
            $_SESSION['Edit_status_code'] = "error";
        }
    } else {
        $_SESSION['Edit_status'] = "Sport Name already exists.";
        $_SESSION['Edit_status_code'] = "error";
    }
} else {
    // Handle CSRF error
    $_SESSION['Edit_status'] = $csrf_error;
    $_SESSION['Edit_status_code'] = "error";
}

                                                            ?>
                                                        </div>
                                                    </div>
                                                        <!-- <button type="button" class="btn btn-danger"id="addBtn">Delete</button> -->
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeleteRecord('<?php echo convert_string('encrypt', $read['id']);?>');">Delete</button>
                                                        <script>
                                                            function confirmDeleteRecord(id) {
                                                                swal({
                                                                    title: "Are you sure?",
                                                                    text: "You want to delete this record!",
                                                                    icon: "warning",
                                                                    buttons: ["Cancel", "Yes, Delete It!"],
                                                                    dangerMode: true,
                                                                }).then((willDelete) => {
                                                                    if (willDelete) {
                                                                        // Send AJAX request to delete the record
                                                                        deleteRecord(id);
                                                                    }
                                                                });

                                                                document.querySelector('.swal-button--confirm').style.backgroundColor = "#4CAF50"; // Green color
                                                                document.querySelector('.swal-button--cancel').style.backgroundColor = "#f44336"; // Red color
                                                                document.querySelector('.swal-button--cancel').style.color = "#ffffff";

                                                                return false; // Prevent default link action
                                                            }

                                                            function deleteRecord(id) {
                                                                // Send AJAX request to the server to delete the record
                                                                var xhr = new XMLHttpRequest();
                                                                xhr.open("GET", "delete-sports?delted_id=" + id, true);
                                                                xhr.onload = function() {
                                                                    if (xhr.readyState === XMLHttpRequest.DONE) {
                                                                        if (xhr.status === 200) {
                                                                            var response = xhr.responseText;
                                                                            if (response.trim() === 'success') {
                                                                                // Optional: Display a success message or update the UI
                                                                                swal("Success!", "Record deleted successfully.", "success").then(() => {
                                                                                    window.location.reload(); // Reload the page or update the UI
                                                                                });
                                                                            } else {
                                                                                // Optional: Display an error message or update the UI
                                                                                swal("Error!", "Failed to delete the record.", "error");
                                                                            }
                                                                        } else {
                                                                            // Optional: Display an error message or update the UI
                                                                            swal("Error!", "Failed to delete the record.", "error");
                                                                        }
                                                                    }
                                                                };
                                                                xhr.send();
                                                            }
                                                        </script>


                                                    </td>
                                                </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('inc/footer.php'); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#sportsTable');
    </script>
    <script>
        var modalId = document.getElementById('modalId');
        modalId.addEventListener('show.bs.modal', function (event) {
                // Button that triggered the modal
                let button = event.relatedTarget;
                // Extract info from data-bs-* attributes
                let recipient = button.getAttribute('data-bs-whatever');
            // Use above variables to manipulate the DOM
        });
    </script>
     <?php 
            if(isset($_SESSION['status']) && $_SESSION['status'] != '')
            { ?> 
            <script>
            var redirectURL = "sports-list"; 
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "Okay",
            }).then(function () {
                    window.location.href = redirectURL;
                });
            </script>
            <?php
                unset($_SESSION['status']);
                unset($_SESSION['status_code']);
                unset($_SESSION["_token"]);
                unset($_SESSION["token_expire"]);
            }
	    ?>
<?php 
            if(isset($_SESSION['Edit_status']) && $_SESSION['Edit_status'] != '')
            { ?> 
            <script>
            var redirectURL = "sports-list"; 
            swal({
                title: "<?php echo $_SESSION['Edit_status']; ?>",
                icon: "<?php echo $_SESSION['Edit_status_code']; ?>",
                button: "Okay",
            }).then(function () {
                    window.location.href = redirectURL;
                });
            </script>
            <?php
                unset($_SESSION['Edit_status']);
                unset($_SESSION['Edit_status_code']);
                unset($_SESSION["_token"]);
                unset($_SESSION["token_expire"]);
            }
	    ?>
</body>
</html>