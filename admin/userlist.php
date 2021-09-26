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

  <title>User List - Blood Donation</title>
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
          <h1>User List</h1>
          <ol>
            <li><a href="../admin.php">Home</a></li>
            <li>User List</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Request List Section ======= -->
    <section id="requestlist">
      <div class="container mt-1">

        <div class="row content">
          <div class="col-lg-12 table-responsive">
              <!-- <h5 class="btn btn-danger"><b>User List</b></h5> -->
            <table class="table table-hover table-bordered">
                <thead class="table-warning">
                    <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Country</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
               
                <tbody>
                <?php
                require 'connect.php';
                $sql="select * from userinfo";
                $result=mysqli_query($con,$sql);
                while ($row=mysqli_fetch_array($result)) {
                ?>
                    <tr>
                    <th scope="row"><?php echo $row["id"];?></th>
                    <td> <?php echo $row["username"];?> </td>
                    <td> <?php echo $row["email"];?> </td>
                    <td> <?php echo $row["mobileno"];?> </td>
                    <td> <?php echo $row["country"];?> </td>
                    <td> <?php echo $row["state"];?> </td>
                    <td> <?php echo $row["city"];?> </td>
                    <td> <?php echo $row["gender"];?> </td>
                    <td> <?php echo $row["DOB"];?> </td>
                    <!-- <td> <a href="donateblood.php" class="btn btn-danger">Donate</a> </td> -->
                    <td>
                    <a 
                        class="btn btn-danger"
                        href="userlist.php?delete=<?php echo $row["id"]; ?>" 
                        onclick="return confirm('Are You Sure do you want to delete ?');">
                            Delete
                        </a>
                    </td>
                    </tr>
                    <?php }?>
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

  <?php
        if(isset($_GET['delete']))
        {
          $delete= $_GET['delete'];
        
            $sql="delete from userinfo where id='$delete'";
            if($con->query($sql))
            {
                // ?><script>window.location.href="./userlist.php"</script><?php
            }
            else
            {
                echo "query not working";
            }
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