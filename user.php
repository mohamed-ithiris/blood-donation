<?php session_start();?>
<?php 
if(is_null($_SESSION['USER'])){
  session_destroy();
  ?> <script>window.location.href="error.html"</script> <?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Donation - User</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

    <a href="index.html" class="logo me-auto"><img src="assets/img/favicon.png" alt="logo" class="img-fluid">Blood Donation</a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="user.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="requestblood.php">Request Blood</a></li>
              <li><a href="donateblood.php">Donate Blood</a></li>
              <li><a href="bloodrequestlist.php">Blood Request Lists</a></li>
            </ul>
          </li>

          <li><a href="profile.php">Profile</a></li>

          <li><a href="contact.php">Contact</a></li>
          <li><a href="logout.php" class="getstarted">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <main id="main">

        <!-- ======= USER Section ======= -->
    <section id="typesofdonation" class="mt-5">
        <div class="container mt-1">

                <div class="row content mt-1">
                    <div class="col-lg-12">
                        <h2 class="entry-title">
                            <b class="btn btn-danger">TYPES OF DONATION</b>
                        </h2>

                        <div class="entry-content">
                            <p>
                                The human body contains five liters of blood, which is made of several useful components.
                            </p>
                            <ul class="list-group col-3 mb-4 mt-4">
                                <li class="list-group-item" onclick="openCity(event, 'London')">Whole blood</li>
                                <li class="list-group-item" onclick="openCity(event, 'Paris')">Platelet</li>
                                <li class="list-group-item" onclick="openCity(event, 'Tokyo')">Plasma</li>
                            </ul>
                            <div class="entry-content">

                                    <!-- Tab content -->
                                    <div id="London" class="tabcontent">
                                        <h2 class="text-danger" style="font-weight:bolder">Whole blood</h2>
                                        <h5 style="font-weight:bold">What is it?</h5>
                                        <p>Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>
                                        <h5 style="font-weight:bold">Who can donate?</h5>
                                        <p>You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.</p>
                                        <h5 style="font-weight:bold">User For?</h5>
                                        <p>Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>
                                        <h5 style="font-weight:bold">Lasts For?</h5>
                                        <p>Red cells can be stored for 42 days.</p>
                                        <h5 style="font-weight:bold">How long does it take?</h5>
                                        <p>15 minutes to donate.</p>
                                        <h5 style="font-weight:bold">How often can I donate?</h5>
                                        <p>Every 12 weeks</p>
                                    </div>

                                    <div id="Paris" class="tabcontent">
                                        <h2 class="text-danger" style="font-weight:bolder">Platelet</h2>
                                        <h5 style="font-weight:bold">What is it?</h5>
                                        <p>The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions.</p>
                                        <h5 style="font-weight:bold">Who can donate?</h5>
                                        <p>You need to be 18-70 (men) or 20-70 (women) years old, weigh 50kg or more and must have given successful whole blood donation in last two years.</p>
                                        <h5 style="font-weight:bold">User For?</h5>
                                        <p>Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
                                        <h5 style="font-weight:bold">Lasts For?</h5>
                                        <p>Plasma can last up to one year when frozen.</p>
                                        <h5 style="font-weight:bold">How long does it take?</h5>
                                        <p>We collect your blood, keep plasma and return rest to you by apheresis donation.</p>
                                        <h5 style="font-weight:bold">How long does it take?</h5>
                                        <p>15 minutes to donate.</p>
                                        <h5 style="font-weight:bold">How often can I donate?</h5>
                                        <p>Every 2-3 weeks.</p>
                                    </div>

                                    <div id="Tokyo" class="tabcontent">
                                        <h2 class="text-danger" style="font-weight:bolder">Plasma</h2>
                                        <h5 style="font-weight:bold">What is it?</h5>
                                        <p>The tiny 'plates' in blood that wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like malaria and cancer patients.</p>
                                        <h5 style="font-weight:bold">Who can donate?</h5>
                                        <p>You need to be 18-70 years old (men), weigh 50kg or more and have given a successful plasma donation in the past 12 months</p>
                                        <h5 style="font-weight:bold">User For?</h5>
                                        <p>Cancer, blood diseases, haemophilia, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
                                        <h5 style="font-weight:bold">Lasts For?</h5>
                                        <p>Just five days..</p>
                                        <h5 style="font-weight:bold">How does it work?</h5>
                                        <p>We collect your blood, keep platelet and return rest to you by apheresis donation.</p>
                                        <h5 style="font-weight:bold">How long does it take?</h5>
                                        <p>45 minutes to donate.</p>
                                        <h5 style="font-weight:bold">How often can I donate?</h5>
                                        <p>Every 2 weeks</p>
                                    </div>
                                

                            </div>
                            <p>Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
                            <p>For plasma and platelet donation you must have donated whole blood in past two years.</p>
                        </div>
                            

                    </div>
                </div>

        </div>
    </section><!-- End USER Section -->

    <!-- ======= USER Section ======= -->
    <section id="user">
      <div class="container mt-1">

        <div class="row content mt-1">
          <div class="col-lg-12 table-responsive">
              <h5 class="btn btn-danger"><b>Compatible Blood Type Donors</b></h5>
            <table class="table table-hover table-bordered mt-4">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Donate Blood To</th>
                    <th scope="col">Receive Blood From</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>A+</td>
                    <td>A+ AB+</td>
                    <td>A+ A- O+ O-</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>O+</td>
                    <td>O+ A+ B+ AB+</td>
                    <td>O+ O-</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>B+</td>
                    <td>B+ AB+</td>
                    <td>B+ B- O+ O-</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>AB+</td>
                    <td>AB+</td>
                    <td>Everyone</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>A-</td>
                    <td>A+ A- AB+ AB-</td>
                    <td>A- O-</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td>O-</td>
                    <td>Everyone</td>
                    <td>O-</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td>B-</td>
                    <td>B+ B- AB+ AB-</td>
                    <td>B- O-</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td>AB-</td>
                    <td>AB+ AB-</td>
                    <td>AB- A- B- O-</td>
                    </tr>
                </tbody>
                </table>
          </div>
        </div>

      </div>
    </section><!-- End USER Section -->

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

<script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>