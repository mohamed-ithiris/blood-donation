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

  <title>Profile - Blood Donation</title>
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
    
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profile</h2>
          <ol>
            <li><a href="user.php">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Request Blood Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
              <div class="row mt-1">
                    <form method="post" class="request-blood">
                        <?php
                        require 'connect.php';
                        $sql="select * from userinfo where username='".$_SESSION['USER']."'";
                        $result=mysqli_query($con,$sql);
                        while ($row=mysqli_fetch_array($result)) {
                        ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="name" id="name" value="<?php echo $row["username"];?>" required> 
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="name">Email<span class="text-danger">*</span></label>
                          <input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"];?>" required> 
                        </div>
        
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="mobileno">Mobile No<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="mobileno" id="mobileno" value="<?php echo $row["mobileno"];?>" pattern="[0-9]{10}" title="Please enter 10-digit valid number">
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="name">Country<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="country" id="country" value="<?php echo $row["country"];?>" required> 
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="name">State<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="state" id="state" value="<?php echo $row["state"];?>" required> 
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="name">City<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="city" id="city" value="<?php echo $row["city"];?>" required> 
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="gender">Gender<span class="text-danger">*</span></label>
                          <select class="form-select form-control" name="gender" id="gender" required>
                          <option selected class="text-danger"><?php echo $row["gender"];?></option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Others">Others</option>
                          </select>
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="name">Date of Birth<span class="text-danger">*</span></label>
                          <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $row["DOB"];?>" required> 
                        </div>
                    </div>
                      <div class="text-center mt-3"><button type="submit" name="update">Update</button></div>
                      <?php }?>
                  </form>
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
		  if(isset($_POST['update'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $mobileno=$_POST['mobileno'];
            $country=$_POST['country'];
            $state=$_POST['state'];
            $city=$_POST['city'];
            $gender=$_POST['gender'];
            $date=$_POST['dob'];
          // echo " pressed";
        $update="update userinfo set username='$name',email='$email',mobileno='$mobileno',country='$country',state='$state',city='$city',gender='$gender',DOB='$date' where username='".$_SESSION['USER']."'";

            if($con->query($update))
            {
            ?><script>alert("Updated Successfully!");window.location.href="user.php"</script><?php
            }
            else
            {
            echo "error".$sql."<br>".$con->error;
            }  
            $con->close();
		  }
          
if(isset($_SESSION['USER'])){
    // echo $_SESSION['USER'];
    
}else{
    session_destroy();
    ?> <script>window.location.href="./"</script> <?php
}
?>
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