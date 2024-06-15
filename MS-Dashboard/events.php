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
                            <h4 class="font-weight-bold text-dark mb-4">Events</h4>
                        </div>
                        <div class="col-sm-3 mb-xl-0 text-right pb-4">
                            <a href="add-events" class="btn btn-primary" id="addBtn"><i class="fa fa-plus"></i> Add Events</a>
                        </div>
                    </div>
                            
                    <!-------- tab -------->
                    <div class="tab-content m-tab">
                        <div id="week" class="tab-pane fade in active show" style="display: block;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="EventTable">
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
                                                    <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit-modal-<?php echo $read['id']; ?>">Edit</a>
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
                                                                    $stmt = $db->prepare("UPDATE `master_sports` SET `sports_name`=?, `updated_at`=? WHERE id=?");
                                                                    $stmt->bind_param("ssi", $EditSportsName, $CurrentDate, $recordID);                                                                
                                                                    if ($stmt->execute()) {
                                                                        $_SESSION['Edit_status'] = "Sport Name updated successfully.";
                                                                        $_SESSION['Edit_status_code'] = "success";
                                                                    } else {
                                                                        $_SESSION['Edit_status'] = "Failed to update Sport Name. Please try again.";
                                                                        $_SESSION['Edit_status_code'] = "error";
                                                                    }
                                                                } else {
                                                                    $_SESSION['Edit_status'] = $csrf_error;
                                                                    $_SESSION['Edit_status_code'] = "error";
                                                                }
                                                            ?>
                                                        </div>
                                                    </div>
                                                        <button type="button" class="btn btn-danger"
                                                            id="addBtn">Delete</button>
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
        let table = new DataTable('#EventTable');
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