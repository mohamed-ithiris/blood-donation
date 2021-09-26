<?php session_start();?>
<?php 
if(is_null($_SESSION['ADMIN'])){
  session_destroy();
  ?> <script>window.location.href="../error.html"</script> <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Request Blood - Blood Donation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="" class="logo me-auto"><img src="../assets/img/favicon.png" alt="logo" class="img-fluid">Blood Donation</a>
    </div>
  </header><!-- End Header -->

  <main id="main" style="min-height:70vh">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Request Blood</h1>
          <ol>
            <li><a href="../admin.php">Home</a></li>
            <li>Request Blood</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Request Blood Section ======= -->
      <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-1">

          <div class="col-lg-12 mt-1 mt-lg-0">

            <form method="post" class="request-blood">
            <div class="row">
                <div class="col-md-6 form-group">
                <label for="name">Patient Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" required> 
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="units">No Of Units<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="units" id="units" pattern="[0-9]{1,2}" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <label for="bloodgroup">Needed Blood Group<span class="text-danger">*</span></label>
                <select class="form-select form-control" name="bloodgroup" id="bloodgroup" required>
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="A+">A+</option>
                    <option value="O+">O+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="O-">O-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="mobileno">Mobile No<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="mobileno" id="mobileno" pattern="[0-9]{10}" title="Please enter 10-digit valid number">
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="description">Description<span class="text-danger">*</span></label>
                <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name="request-blood">Request Blood</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>e3s</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php
        require 'connect.php';
		  if(isset($_POST['request-blood'])){
            $patientname=$_POST['name'];
            $no_of_units=$_POST['units'];
            $bloodgroup=$_POST['bloodgroup'];
            $mobileno=$_POST['mobileno'];
            $description=$_POST['description'];
          // echo " pressed";
        //   echo $patientname;
        //   echo $bloodgroup;
        //   echo $no_of_units;
        //   echo $description;
        //   echo $mobileno;
          
          $sql="insert into bloodrequest (id,patient_name,blood_group,no_of_units,description,mobileno) 
          values (null,'$patientname','$bloodgroup','$no_of_units','$description','$mobileno')";
            if($con->query($sql))
            {
            ?><script>alert("Request Posted Successfully!");window.location.href="../admin.php"</script><?php
            }
            else
            {
            echo "error".$sql."<br>".$con->error;
            }  
            $con->close();
		  }
?>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>