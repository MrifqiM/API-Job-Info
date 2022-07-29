<?php
   
    session_start();

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    // koneksi database
    $servername = "localhost";
    $uname = "root";
    $pass = "";
    $dbname = "jobinfo";

     

    $conn = new mysqli($servername, $uname, $pass, $dbname);

    // Membuat query
    $sql = "SELECT * FROM user WHERE username='$username'";
   
    // Eksekusi query
    $result=$conn->query($sql);

    if($result->num_rows > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $key_token = $row["key_token"];
        }
    }else{
        echo "Anda belum memiliki token";
    };
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>API KEY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.0.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-contact">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Job</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">Dokumentasi API</a></li>
          <li><a href="contact.php" class="active">API KEY</a></li>
          <li><a href="logout_user.php">LogOut</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>API KEY</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>API KEY</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Username:</h4>
                <p><?php echo $username; ?></p>
              </div>
            </div><!-- End Info Item -->


          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

          <div class="input-group mb-3 mt-1">
                        <input id="api_key" type="text" readonly="" class="form-control" value="<?php echo $key_token; ?>">
                            <div class="input-group-append">
                                <input type="submit" value="Salin ke Clipboard" class="btn text-white btn-block btn-primary" name="submit" onclick="copy_API()">
                            </div>
                    </div>

                    <div class="d-block">
                        <form action="user_generate_apiKey.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="username" value="<?php echo $_SESSION['username']=$username; ?>">
                            <input type="hidden" name="password" value="<?php echo $_SESSION['password']=$password; ?>">
                          
                        </form>
                    </div>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <span>Job Info</span>
            </a>
            <p>Layanan penyedia API Key</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Job Info</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script>
        function copy_API() {
        var copyText = document.getElementById("api_key");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        }
    </script>

</html>