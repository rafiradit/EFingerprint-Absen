<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="./vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./css/Custom.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/favicon.png" />
  <!-- Javascript Management User -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/manage_users.js"></script>
    <script>
    $(document).ready(function(){
        $.ajax({
            url: "/pages/Add_User/manage_users_up.php"
            }).done(function(data) {
            $('#manage_users').html(data);
        });
        setInterval(function(){
        $.ajax({
            url: "/pages/Add_User/manage_users_up.php"
            }).done(function(data) {
            $('#manage_users').html(data);
        });
        },5000);
    });
    </script>
    <!-- END Javascript Management User -->
</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:../../partials/_sidebar.html -->
    <?php include('./partials/_sidebar.html'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <?php include('./partials/_navbar.html'); ?>
        <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pengguna Fingerprint</h4></br>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="fingerid">Masukan ID Fingerprint (1-127).</label>
                      <input type="text" class="form-control" id="fingerid" placeholder="User Fingerprint ID">
                    </div>
                    <div class="form-group">
                        <button type="button" name="fingerid_add" class="btn btn-info col">Tambah Fingerprint ID</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Info Pengguna</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="User Name"> </br>
                        <input type="text" class="form-control" name="number" id="number" placeholder="Serial Number"> </br>
                        <input type="email" class="form-control" name="email" id="email" placeholder="User Email"> </br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Masuk</label>
                        <input type="time" class="form-control" name="timein" id="timein"> </br>
                        <div class="form-check form-check-warning">
                            <label class="form-check-label">
                                <input type="radio" class="form-check" name="gender" value="Male">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check form-check-warning">
                            <label class="form-check-label">
                                <input type="radio" class="form-check" name="gender" value="Female">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    
                    <button type="button" name="user_add" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-outline-warning btn-fw">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Finger .ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>S.No</th>
                            <th>Date</th>
                            <th>Time in</th>
                            </tr>
                        </thead>
                    </table>
                        <table class="table table-hover">
                        <div id="manage_users"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- <?php include('./partials/_footer.html'); ?> -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="./js/file-upload.js"></script>
  <script src="./js/Custom.js"></script>
  <!-- End custom js for this page-->
  
</body>

</html>
