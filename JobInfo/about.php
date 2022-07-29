<?php
    session_start();

    $_SESSION['username'];
    $_SESSION['password'];

    if(isset($_SESSION['username']) && !empty($_SESSION['password'])) {
      echo '

        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Job Info</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        

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

        <body class="page-about">

        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="d-flex align-items-center">Job Info</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                 <li><a href="index.php">Home</a></li>
                 <li><a href="about.php">Dokumentasi API</a></li>
                 <li><a href="contact.php" class="active">API KEY</a></li>
                 <li><a href="logout_user.php">LogOut</a></li>

        </div>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url("assets/img/about-header.jpg");">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Dokumentasi API</h2>
                <ol>
                <li><a href="index.php">Home</a></li>
                <li>Dokumentasi API</li>
                </ol>

            </div>
            </div><!-- End Breadcrumbs -->

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                    <h3>Dokumentasi API Akun</h3>
                    <p>
                        Dokumentasi ini menjelaskan cara mengakses layanan API JobInfo untuk akun.
                    </p>
                    
                    <ul>
                    <li>Get One Data</li>
                    <p>
                       URL
                    </p>

                    <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                        }
                    </style>

                    <table>
                     <tr>
                      <th>Method</th>
                      <th>URL</th>
                    </tr>
                    <tr>
                     <td>GET</td>
                      <td>http://localhost/jobinfo/getonedata.php</td>
                      </tr>
                    </table>

                    <p>
                       Parameter
                    </p>

                    <h>&rarr; kategori as string</h>

                                        <p>
                       Response
                    </p>
                    <pre v-pre="" data-lang="json"><code class="lang-json"> {
    {
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "results": [
        {
            "id_komputer": "3",
            "kategori": "IT",
            "nama_perusahaan": "PT.MITRA PUTRA PROFITAMAS",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2021-08-30",
            "posisi": "STAFF IT",
            "persyaratan": "PERSYARATAN :\r\n1.Laki-laki, max 28 tahun\r\n2.Diutamakan S1 Teknik Informatika\r\n3.MenguasaiTCP/IP,router,mikrotik,winbox,networking dan bandwith management\r\n4.Penempatan di Palangka Raya",
            "email": "Kirimkan berkas lamaran lengkap anda ke email :\r\nahmad.zak@mitrasuzuki.com",
            "alamat": "Jl.Tijilik Riwuk No.7 Palangka Raya",
            "batas_pengumpulan": "2021-09-11",
            "gambar": "suzuki.jpg"
        }
    ]
}
</code></pre>

                    <p>
                      


                    <li>Get All Data</li>
                    <p>
                       URL
                    </p>

                    <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                        }
                    </style>

                    <table>
                     <tr>
                      <th>Method</th>
                      <th>URL</th>
                    </tr>
                    <tr>
                     <td>GET</td>
                      <td>http://localhost/jobinfo/getalldata.php</td>
                      </tr>
                    </table>

                    <p>
                       Headers
                    </p>
                    <h>&rarr; key : [your_token]</h>

                    <p>
                       Response
                    </p>

                    <pre v-pre="" data-lang="json"><code class="lang-json"> {
    {
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "results": [
        {
            "id_komputer": "3",
            "kategori": "IT",
            "nama_perusahaan": "PT.MITRA PUTRA PROFITAMAS",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2021-08-30",
            "posisi": "STAFF IT",
            "persyaratan": "PERSYARATAN :\r\n1.Laki-laki, max 28 tahun\r\n2.Diutamakan S1 Teknik Informatika\r\n3.MenguasaiTCP/IP,router,mikrotik,winbox,networking dan bandwith management\r\n4.Penempatan di Palangka Raya",
            "email": "Kirimkan berkas lamaran lengkap anda ke email :\r\nahmad.zak@mitrasuzuki.com",
            "alamat": "Jl.Tijilik Riwuk No.7 Palangka Raya",
            "batas_pengumpulan": "2021-09-11",
            "gambar": "suzuki.jpg"
        },
        {
            "id_komputer": "4",
            "kategori": "IT",
            "nama_perusahaan": "CV.ANGLE",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2021-07-31",
            "posisi": "STAFF IT",
            "persyaratan": "PERSYARATAN :\r\n1.Laki-laki, max 28 tahun\r\n2.Diutamakan S1 Teknik Informatika\r\n3.Memahami Troubelshooting Software & Hardware\r\n4.Menguasai sosial media & website\r\n5.Menguasai OS Windows dengan baik\r\n6.Mampu mengelola Jaringan LAN\r\n7.Mampu mengelola website berbasis Wordpress",
            "email": "Kirim lamaran ke : HRD CV.Angle",
            "alamat": "Jl.Kaliurang Km 10 Yogyakarta\r\n",
            "batas_pengumpulan": "2021-08-21",
            "gambar": "angle.jpg"
        },
        {
            "id_komputer": "7",
            "kategori": "IT",
            "nama_perusahaan": "PT.MITRA EKSPEDISI SEJAHTERA (J&T EXPRESS)",
            "penyebar": "jobinfo",
            "tanggal_sebar": "2021-08-04",
            "posisi": "STAFF IT",
            "persyaratan": "1. Usia 22-30 Tahun\r\n2. Pendidikan Min. S1 Teknik Informatika, Teknik Komputer, Ilmu Komputer\r\n3. Berpengalaman Min. 1 Tahun Di Bidang Mikrotik dan Jaringan Lebih Di Sukai\r\n4. Mampu dan Memahami Sistem Operasional GPS Menjadi Nilai Tambah \r\n5. Mampu mengoperasikan Ms. Office & Internet\r\n6. Memiliki loyalitas dan dedikasi tinggi\r\n7. Sehat jasmani dan rohani\r\n8. Wajib melampirkan Foto Copy SKCK aktif\r\n9. Wajib melampirkan Surat Keterangan Sehat",
            "email": "kirim CV ke kantor kami :\r\nJl. Siliwangi No. 353 Kel. Krapyak, Semarang Barat",
            "alamat": "Jl. Siliwangi No. 353 Kel. Krapyak, Semarang Barat",
            "batas_pengumpulan": "2021-09-15",
            "gambar": "j&t.jpg"
        },
        {
            "id_komputer": "8",
            "kategori": "IT",
            "nama_perusahaan": "PT RIFAN FINANCINDO BERJANGKA",
            "penyebar": "jobinfo",
            "tanggal_sebar": "2021-09-01",
            "posisi": "OPERATOR KOMPUTER",
            "persyaratan": "1. fotocopy ktp\r\n2. fotocopy ijasah\r\n3. fotocopy skck\r\n4. fotocopy kartu keluarga\r\n5. pas foto 3X4\r\n6. surat keterangan sehat",
            "email": "kirim CV ke :\r\nfinancerekruitmen@gmail.com",
            "alamat": "Jl. Asia Afrika No. 141 - 149 Gedung Wisma Bumi Putra Lt. 3",
            "batas_pengumpulan": "2021-09-24",
            "gambar": "rifan.jpg"
        },
        {
            "id_komputer": "59",
            "kategori": "Kesehatan",
            "nama_perusahaan": "PRAKTIK MANDIRI BIDAN WANDA",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2022-07-11",
            "posisi": "ASISTEN BIDAN",
            "persyaratan": "PERSYARATAN :\r\n1.Domisili Cirebon\r\n2.Lulusan D3 Kebidanan\r\n3.STR aktif\r\n4.Mempunyai SIM C",
            "email": "Kirimkan berkas lamaran lengkap anda ke email :\r\nbidanwandadwi@gmail.com",
            "alamat": "Jl.Kusnan No.35 Kota Cirebon",
            "batas_pengumpulan": "2022-08-05",
            "gambar": ""
        },
        {
            "id_komputer": "60",
            "kategori": "Kesehatan",
            "nama_perusahaan": "RS JANTUNG JAKARTA",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2022-07-14",
            "posisi": "ASISTEN APOTEKER",
            "persyaratan": "PERSAYARATAN :\r\n1.Usia makasimal 30 tahun\r\n2.Bersedia bekerja dalam shift\r\n3.Penempatan di Rs Jantung Jakarta\r\n4.Memiliki STR aktif\r\n5.Pengalaman minimal 2 tahun\r\n6.Fresh Graduate dipersilahkan melamar",
            "email": "Kirimkan berkas lamaran lengkap anda ke email :\r\nrekrutmen.rsjantung@gmail.com",
            "alamat": "Jl. Matraman Raya No.23",
            "batas_pengumpulan": "2022-08-07",
            "gambar": ""
        },
        {
            "id_komputer": "61",
            "kategori": "Kesehatan",
            "nama_perusahaan": "PT SEHATQ HARSANA EMEDIKA",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2022-08-04",
            "posisi": "DOKTER UMUM",
            "persyaratan": "1. Pendidikan Profesi Dokter\r\n2. STR (Surat Tanda Registrasi) Aktif\r\n3. Bersertifikat ACLS dan ATLS\r\n4. Memiliki Minimal 1 tahun pengalaman sebagai Dokter Umum di Rumah Sakit atau Klinik\r\n5. Integritas Tinggi\r\n6. Memiliki kemampuan komunikasi yang baik",
            "email": "Kirimkan resume anda ke :\r\nEmail : work@sehatq.com",
            "alamat": "Jl. M.H. Thamrin No.18, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310",
            "batas_pengumpulan": "2022-09-09",
            "gambar": ""
        },
        {
            "id_komputer": "62",
            "kategori": "Keuangan",
            "nama_perusahaan": "PT. RAVA ATHAYA",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2022-08-18",
            "posisi": "STAFF KEUANGAN",
            "persyaratan": "PERSYARATAN :\r\n1.Pria/wanita\r\n2.Pendidikan minimal D3 Akuntansi\r\n3.Usia max 30 Tahun\r\n4.Pengalaman minimal 1 tahun dikeuangan\r\n5.Menguasai microsoft office tools\r\n6.Mengerti sistem keuangan dan accounting\r\n7.Teliti, jujur,dan bertanggung jawab",
            "email": "Kirimkan berkas lamaran lengkap anda ke email :\r\nahkambasirofficial@gmail.com\r\nDengan subjek : Nama_posisi yang dilamar_tempat domisili",
            "alamat": "KOMPLEK ROYAL RESIDENCE SOHO BS-15 No. 10C, SURABAYA, JAWA TIMUR, 60279, INDONESIA",
            "batas_pengumpulan": "2022-09-29",
            "gambar": ""
        },
        {
            "id_komputer": "63",
            "kategori": "Keuangan",
            "nama_perusahaan": "RUMAH SAKIT IBU dan ANAK MITRA FAMILY",
            "penyebar": "JobInfo",
            "tanggal_sebar": "2022-08-14",
            "posisi": "STAFF KEUANGAN",
            "persyaratan": "PERSYARATAN:\r\n1.Pria/wanita usia maksimal 30 tahun\r\n2.Fresh Graduate, diutamakan pengalaman 1 tahaun\r\n2.Pendidikan minimal D3 Akuntansi\r\n4.Bersedia bekerja dibawah takanan",
            "email": "Kirimkan berkas lamaran lengkap anda ke email :\r\nhrd@rsmitrafamily.com",
            "alamat": "Jl.Raya Guluh Mas Karawang",
            "batas_pengumpulan": "2022-08-06",
            "gambar": ""
        }
    ]
}</code></pre>

                    <p>
                     
                    

                        <li>Insert Data</li>
                    <p>
                       URL
                    </p>

                    <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                        }
                    </style>

                    <table>
                     <tr>
                      <th>Method</th>
                      <th>URL</th>
                    </tr>
                    <tr>
                     <td>POST</td>
                      <td>http://http://localhost/jobinfo/postinsertdata.php</td>
                      </tr>
                    </table>

                    <p>
                       Body
                    </p>
                    <h>&rarr; form-data</h>


                    <table>
                     <tr>
                      <th>KEY</th>
                      <th>as</th>
                     </tr>
                     <tr>
                      <td>kategori</td>
                      <td>String</td>
                     </tr>

                     <tr>
                      <td>nama_perusahaan</td>
                      <td>String</td>
                     <tr>
                     <td>penyebar</td>
                     <td>String</td>
                     </tr>
                     </tr>
                     <tr>
                      <td>tanggal_sebar</td>
                      <td>String</td>
                     </tr>
                     <tr>
                      <td>posisi</td>
                      <td>String</td>
                     </tr>
                     <tr>
                      <td>persyaratan</td>
                      <td>String</td>
                     </tr>
                     <tr>
                      <td>email</td>
                      <td>String</td>
                     </tr>
                     <tr>
                     <td>alamat</td>
                     <td>String</td>
                     </tr>
                     <tr>
                      <td>batas_pengumpulan</td>
                      <td>String</td>
                     </tr>
                    </table>

                    <p>
                       Response
                    </p>

                    <pre v-pre="" data-lang="json"><code class="lang-json"> {
    {
    "status": {
        "code": 200,
        "description": "1 Data Inserted"
    },
    "results": {
        "kategori": "IT",
        "nama_perusahaan": "kwangya",
        "penyebar": "Suman",
        "tanggal_sebar": "2022-2-3",
        "posisi": "UI/UX Design",
        "persyaratan": "1. Mahir menggunakan Figma",
        "email": "kwangya@gmail.com",
        "alamat": "Jln.Pasar Baru No.21",
        "batas_pengumpulan": "2022-3-4"
    }
}</code></pre>

                    <p>
                     



                        <li>Delete Data</li>
                    <p>
                       URL
                    </p>

                    <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }
                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                        }
                    </style>

                    <table>
                     <tr>
                      <th>Method</th>
                      <th>URL</th>
                    </tr>
                    <tr>
                     <td>DELETE</td>
                      <td>http://http://localhost/jobinfo/deletedata.php</td>
                      </tr>
                    </table>

                    <p>
                       Body
                    </p>

                    <h>&rarr; x-www-form-urlencode</h>
                    </br>
                    <h> &diams; id_komputer as int</h>

                    <p>
                       Response
                    </p>

                    <pre v-pre="" data-lang="json"><code class="lang-json"> {
    {
    "status": {
        "code": 200,
        "description": "1 Data Deleted"
    },
    "results": {
        "id_komputer": "63"
    }
}

}</code></pre>

                    <p>
                      



                    </ul>
                    </div>
                </div>
                </div>

            </div>
            </section><!-- End About Section -->



         <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-12">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
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

          

        </div>
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

        </html>';
    }else{
        header("Location: index.php");
       }