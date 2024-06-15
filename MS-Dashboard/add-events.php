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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/css/datepicker.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/faviconn.png" />


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <style>
        .input-group-text {
            padding: 0.875rem 8px !important;
        }
    </style>


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
                        <div class="col-sm-12 mb-xl-0">
                            <h4 class="font-weight-bold text-dark mb-4">Add Sport</h4>
                        </div>
                    </div>

                    <!-------- tab -------->
                    <div class="tab-content m-tab">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="<?php echo $token; ?>" class="form-control">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="SportName">Name of the Sport<span
                                                        class="text-danger">*</span></label>
                                                <select name="SportName" id="SportName" class="form-control form-control-lg"
                                                    style="padding: 18px;" required>
                                                    <option value="">Select Sport</option>
                                                    <?php 
                                                        $SportsQuery = mysqli_query($db, "SELECT * FROM `master_sports` WHERE deletedstatus='0' ORDER BY sports_name ASC");
                                                        while($sports = mysqli_fetch_assoc($SportsQuery)){
                                                    ?>
                                                    <option value="<?php echo $sports['id']; ?>">
                                                        <?php echo $sports['sports_name']; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="BannerImg">Banner Image <span class="text-danger">*</span>
                                                    <small class="text-danger">( Image Resolution
                                                        1400x700)</small></label>
                                                <input type="file" name="BannerImages" class="form-control form-control-lg" id="BannerImg"
                                                    placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="SlotDuration">Slot Duration<span class="text-danger">*
                                                    </span> <small class="text-danger">(in Minutes)</small></label>
                                                <input type="number" name="SlotDuration" class="form-control form-control-lg"
                                                    id="SlotDuration" placeholder="Slot Duration" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border p-4 mb-3 rounded">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="location">Location<span
                                                            class="text-danger">*</span></label>
                                                    <select name="Location[]" id="location" class="form-control form-control-lg"
                                                        style="padding: 18px;">
                                                        <option value="">Select Location</option>
                                                        <?php 
                                                            $SportsQuery = mysqli_query($db, "SELECT * FROM `master_location` WHERE deletedstatus='0' ORDER BY location_name ASC");
                                                            while($sports = mysqli_fetch_assoc($SportsQuery)){
                                                        ?>
                                                        <option value="<?php echo $sports['id']; ?>">
                                                            <?php echo $sports['location_name']; ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="LocationImg">Location Image<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="LocationImg[]" class="form-control form-control-lg"
                                                        id="LocationImg" multiple>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1" class="d-block"
                                                        style="opacity: 0;">aaaaaaaaaaaa</label>
                                                    <button type="button" class="btn btn-primary btn-lg pl-3 pr-3"
                                                        id="addBtn" onclick="add_reports();"><i class="fa fa-plus"></i> Add More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="NonConformitysDocument"></div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="EventStartDate">Booking Start Date<span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="BookingStartDate" id="EventStartDate" class="form-control"
                                                    placeholder="Booking Start Date" required
                                                    aria-label="Booking Start Date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="EventEndDate">Booking End Date</label>
                                                <input type="date" name="BookingEndDate" id="EventEndDate" class="form-control"
                                                    placeholder="Booking End Date" required
                                                    aria-label="Booking End Date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="EventStatTime">Start Time <span
                                                        class="text-danger">*</span></label>
                                                <input type="time" name="StartTime" class="form-control form-control-lg"
                                                    id="EventStatTime" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="EventEndTime">End Time <span
                                                        class="text-danger">*</span></label>
                                                <input type="time" name="EndTime" class="form-control form-control-lg"
                                                    id="EventEndTime" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Capacity<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="TotalCapacity" class="form-control form-control-lg"
                                                    id="exampleInputUsername1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Open Slot Days Before<span
                                                        class="text-danger">*</span></label>
                                                <select name="OneDaySlotBefore" id="exampleInputUsername1"
                                                    class="form-control form-control-lg" style="padding: 15px;">
                                                    <option value="">Select Option</option>
                                                    <option value="1">1 Day</option>
                                                    <option value="2">2 Day</option>
                                                    <option value="3">3 Day</option>
                                                    <option value="4">4 Day</option>
                                                    <option value="5">5 Day</option>
                                                    <option value="6">6 Day</option>
                                                    <option value="7">7 Day</option>
                                                    <option value="8">8 Day</option>
                                                    <option value="9">9 Day</option>
                                                    <option value="10">10 Day</option>
                                                    <option value="11">11 Day</option>
                                                    <option value="12">12 Day</option>
                                                    <option value="13">13 Day</option>
                                                    <option value="14">14 Day</option>
                                                    <option value="15">15 Day</option>
                                                    <option value="16">16 Day</option>
                                                    <option value="17">17 Day</option>
                                                    <option value="18">18 Day</option>
                                                    <option value="19">19 Day</option>
                                                    <option value="20">20 Day</option>
                                                    <option value="21">21 Day</option>
                                                    <option value="22">22 Day</option>
                                                    <option value="23">23 Day</option>
                                                    <option value="24">24 Day</option>
                                                    <option value="25">25 Day</option>
                                                    <option value="26">26 Day</option>
                                                    <option value="27">27 Day</option>
                                                    <option value="28">28 Day</option>
                                                    <option value="29">29 Day</option>
                                                    <option value="30">30 Day</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Description</label>
                                                <textarea name="Description" id="description"
                                                    class="form-control form-control-lg"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputUsername1">Terms & Conditions</label>
                                                <textarea name="Termscondition" id="termscondition"
                                                    class="form-control form-control-lg"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" name="save_events" class="btn btn-primary btn-lg pl-3 pr-3"
                                                id="addBtn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <?php 
                                        if(isset($_POST['save_events']) && empty($csrf_error))
                                        {
                                            $SportName = mysqli_real_escape_string($db, $_POST['SportName']);
                                            $BookingStartDate = mysqli_real_escape_string($db, $_POST['BookingStartDate']);
                                            $BookingEndDate = mysqli_real_escape_string($db, $_POST['BookingEndDate']);
                                            $StartTime = mysqli_real_escape_string($db, $_POST['StartTime']);
                                            $EndTime = mysqli_real_escape_string($db, $_POST['EndTime']);
                                            $TotalCapacity = mysqli_real_escape_string($db, $_POST['TotalCapacity']);
                                            $OneDaySlotBefore = mysqli_real_escape_string($db, $_POST['OneDaySlotBefore']);
                                            $Description = mysqli_real_escape_string($db, $_POST['Description']);
                                            $Termscondition = mysqli_real_escape_string($db, $_POST['Termscondition']);
                                            $SlotDuration = mysqli_real_escape_string($db, $_POST['SlotDuration']);
                                            $Location = implode(",", $_POST['Location']);
 
                                            if ($_FILES['BannerImages'] != '') {
                                                $allowed_extensions21 = array('jpg', 'jpeg', 'png','PNG');
                                                $BannerImages1 = time() . "-" . rand(1000, 9999) . "-DOC-" . $_FILES['BannerImages']['name'];
                                                $BannerImages2 = $_FILES["BannerImages"]["name"];
                                                $file_extension21 = strtolower(pathinfo($BannerImages2, PATHINFO_EXTENSION));
                                                
                                                if ($_FILES["BannerImages"]["name"] != '' && in_array($file_extension21, $allowed_extensions21)) {
                                                    if (move_uploaded_file($_FILES["BannerImages"]["tmp_name"], "../assets/storage/BannerImages/" . $BannerImages1)) {
                                                        $BannerImagesFInal = $BannerImages1;
                                                    }
                                                }
                                            }                                            

                                            if($_FILES["LocationImg"] != '')
                                            {
                                                for ($i = 0;$i < count($_FILES["LocationImg"]["name"]);$i++) {
                                                    $LocationImg1 = time() . "-" . rand(1000, 9999) . "-DOC-" . $_FILES["LocationImg"]["name"][$i];
                                                    $LocationImg = str_replace(",", "", "$LocationImg1");
                                                    if ($_FILES["LocationImg"]["name"][$i] != '') {
                                                        if (strtolower(end(explode(".", $LocationImg))) == "jpg" OR strtolower(end(explode(".", $LocationImg))) == "jpeg" OR strtolower(end(explode(".", $LocationImg))) == "png") {
                                                            if (move_uploaded_file($_FILES["LocationImg"]["tmp_name"][$i], "../assets/storage/LocationImages/" . $LocationImg)) {
                                                                $queryf12 = mysqli_query($db, "SELECT location_img FROM `add_events` WHERE id  = '$latestInsertedID'");
                                                                $rowf12 = mysqli_fetch_assoc($queryf12);
                                                                $LocationImg11 = $rowf12['location_img'];
                                                                if ($LocationImg11 == '') {
                                                                    $LocationImg111 = $LocationImg;
                                                                } else {
                                                                    $LocationImg111 = $LocationImg11 . ',' . $LocationImg;
                                                            }
                                                        }
                                                    }
                                                }
                                            
                                            }
                                        }
                                            $SaveEvent =  mysqli_query($db, "INSERT INTO `add_events`(`id`, `sports_name`, `slot_duration`, `banner_img`, `location`, `location_img`, `start_date`, `end_date`, `start_time`, `end_time`, `capacity`, `one_day_slot`, `description`, `terms_condition`, `deleted_status`, `updated_at`, `created_at`) VALUES (NULL,'$SportName','$SlotDuration','$BannerImagesFInal','$Location','$LocationImg111','$BookingStartDate','$BookingEndDate','$StartTime','$EndTime','$TotalCapacity','$OneDaySlotBefore','$Description','$Termscondition','0',NULL,CURRENT_TIMESTAMP)");
                                            if($SaveEvent)
                                            {
                                                $_SESSION['status'] = "Sport Name saved successfully.";
                                                $_SESSION['status_code'] = "success";
                                            } else {
                                                $_SESSION['status'] = "Sport Name saved successfully.";
                                                $_SESSION['status_code'] = "error";
                                            }
                                        } else {
                                            $_SESSION['status'] = $csrf_error;
                                            $_SESSION['status_code'] = "error";
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('inc/footer.php') ?>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/validation.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/js/datepicker-full.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/ckeditor.js"></script>
    <!-- End custom js for this page-->
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });

        ClassicEditor
            .create(document.querySelector('#termscondition'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const eventStatTimeInput = document.getElementById('EventStatTime');
            const eventEndTimeInput = document.getElementById('EventEndTime');
            const eventStartDateInput = document.getElementById('EventStartDate');
            const eventEndDateInput = document.getElementById('EventEndDate');

            // Attach onchange event listeners to the input elements
            eventStatTimeInput.addEventListener('change', logValues);
            eventEndTimeInput.addEventListener('change', logValues);
            eventStartDateInput.addEventListener('change', logValues);
            eventEndDateInput.addEventListener('change', logValues);

            function logValues() {
                // const eventStatTime = eventStatTimeInput.value;
                // const eventEndTime = eventEndTimeInput.value;
                // const eventStartDate = eventStartDateInput.value;
                // const eventEndDate = eventEndDateInput.value;

                // console.log('Start Time:', eventStatTime);
                // console.log('End Time:', eventEndTime);
                // console.log('Start Date:', eventStartDate);
                // console.log('End Date:', eventEndDate);

                // Optionally, you can perform validation or other operations here
                validateDateTime();
                validateDate();



            }

            // Example validation function
            function validateDateTime() {
                // Parse dates as needed (example)
                const startTime = new Date(`${eventStartDateInput.value}T${eventStatTimeInput.value}`);
                const endTime = new Date(`${eventEndDateInput.value}T${eventEndTimeInput.value}`);



                if (endTime < startTime) {
                    alert('End time cannot be earlier than start time on the same date.');
                    // Optionally reset the end time input
                    eventEndTimeInput.value = '';
                    eventStatTimeInput.value = '';
                }
            }
            function validateDate() {
                // Parse dates as Date objects
                const startDate = new Date(eventStartDateInput.value);
                const endDate = new Date(eventEndDateInput.value);

                // Check if either input is not a valid date
                if (isNaN(startDate) && isNaN(endDate)) {
                    alert('Please enter valid start and end dates.');
                    return;
                }

                // Compare dates
                if (endDate < startDate) {
                    alert('End Date cannot be earlier than start date.');
                    // Optionally reset the end time input
                    eventStartDateInput.value = '';
                    eventEndDateInput.value = '';
                }
            }
        });

    </script>





    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to get the appropriate title for the datepicker
            const getDatePickerTitle = elem => {
                const label = elem.nextElementSibling; // Assuming the label is next to the input
                let titleText = '';
                if (label && label.tagName === 'LABEL') {
                    titleText = label.textContent.trim();
                } else {
                    titleText = elem.getAttribute('aria-label') || '';
                }
                return titleText;
            };

            // Get all datepicker input elements
            const elems = document.querySelectorAll('.datepicker_input');
            elems.forEach(function (elem) {
                new Datepicker(elem, {
                    format: 'dd/mm/yyyy', // UK format
                    title: getDatePickerTitle(elem),
                    minDate: new Date() // Allow selecting from today's date
                });
            });
        });
    </script>

    <script>
        document.getElementById('EventStartDate').min = new Date().toISOString().split('T')[0];
        document.getElementById('EventEndDate').min = new Date().toISOString().split('T')[0];
    </script>
    <script>
        var count = 1;
            function add_reports() {
                count++;
                document.getElementById('NonConformitysDocument').insertAdjacentHTML(
                    'beforeend',
                    '<div class="row" id="row' + count + '"><div class="col-md-5"><div class="form-group"><label for="location">Location<span class="text-danger">*</span></label><select name="Location[]" id="location" class="form-control form-control-lg" style="padding: 18px;"><option value="">Select Location</option><?php $SportsQuery = mysqli_query($db, "SELECT * FROM `master_location` WHERE deletedstatus='0' ORDER BY location_name ASC");while($sports = mysqli_fetch_assoc($SportsQuery)){?><option value="<?php echo $sports['id']; ?>"><?php echo $sports['location_name']; ?></option><?php } ?></select></div></div><div class="col-md-5"><div class="form-group"><label for="LocationImg">Location Image<span class="text-danger">*</span></label><input name="LocationImg[]" type="file" class="form-control form-control-lg" id="LocationImg" multiple></div></div><div class="col-md-2"><div class="col-md-1"><button type="button" class="btn btn-danger mt-5" onclick="delete_reports(\'row' + count + '\')">Delete</button></div></div>'
                );
            }
            function delete_reports(rowId) {
                document.getElementById(rowId).remove();
                count--;
                if (count < 1) {
                    count = 1;
                }
            }
    </script>
    <?php 
            if(isset($_SESSION['status']) && $_SESSION['status'] != '')
            { ?> 
            <script>
            var redirectURL = "events"; 
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
</body>

</html>