<?php 
session_start();
error_reporting(0);
include('inc/dbcon.php');
if(!empty($_SESSION["AdminID"])){
  header("Location: dashboard");
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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo text-center">
                <img src="images/arete-logo-2.png" alt="logo">
              </div>
              <h4 class="text-black">Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" method="POST" autocomplete="off">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="Username" class="form-control form-control-lg border-left-0"  id="exampleInputEmail" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="Password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" required>
                  </div>
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Remember Password
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> -->
                <div class="my-3">
                  <button class="submit btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>              
              </form>
              <?php 
                if(isset($_POST['Username']) && isset($_POST['Password']) && !empty($_POST['Username']) && !empty($_POST['Password']))
                {
                    $Username = mysqli_real_escape_string($db, filter_var(trim($_POST["Username"]), FILTER_SANITIZE_EMAIL));
                    $Password = mysqli_real_escape_string($db, md5(filter_var(trim($_POST["Password"]), FILTER_SANITIZE_EMAIL)));
                    $Deleted_Status = '0';
                    $CurrentDate = date("Y-m-d H:i:s");
                    $stmt = $db->prepare("SELECT * FROM user WHERE email = ? AND password = ? AND deletedstatus = ?");
                    $stmt->bind_param("ssi", $Username, $Password, $Deleted_Status);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    $latestInsertId = $db->insert_id;
                    if($row['id'] != '') {
                        $_SESSION["AdminID"] = $row['id'];
                        $_SESSION["AdminName"] = $row['name'];
                        $_SESSION["AdminEmail"] = $row['email'];
                        $_SESSION["AdminLastLogin"] = $row['update_at'];
                        $query = mysqli_query($db, "UPDATE `user` SET `update_at`='$CurrentDate' WHERE id='{$row['id']}'");
                        echo '<div class="alert alert-success mt-3" id="register_en">Login Success Redirect......</div>';
                        echo "<script>window.location.href='dashboard'</script>";                                
                    } else {
                        echo '<div class="alert alert-danger mt-3" id="register_en">Please Check Your Email Id & Password.</div>';
                    }    
                }
              ?>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Design & Developed by Aretesoftwares.com</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
