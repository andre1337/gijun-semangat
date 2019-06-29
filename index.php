<?php 
 
 include 'config/koneksi.php';
 
error_reporting(0);
session_start();

if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
  else $halaman = "index";
  
  $id = session_id();
  $id = $_SESSION ['id'];

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>PT. Sebastian Jaya Metal</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logos/logo.jpg" type="image/x-icon" />
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">


    <!-- Modernizer for Portfolio -->
    <script src="assets/js/modernizer.js"></script>


<style>
body {
  margin: 0;
  font-family: Modeka;
  font-size: 17px;
}
</style>
</head>
<body>

<?php include 'loader.php'; ?>
    
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="right-top">
                        <div class="social-box">
                            <ul>
                                <li>
                                    <a href="https://id-id.facebook.com/PTSJM/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" title="facebook"></i></a></li>
                                <li>
                                    <a href="https://www.instagram.com/ptsebastianjayametal/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" title="instagram"></i></a></li>
                                <li>
                                    <a href="https://id.linkedin.com/company/pt-sebastian-jaya-metal" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true" title="linedin"></i></a></li>
                                <li>
                                    <a href="https://twitter.com/sjm_jb" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true" title="twitter"></i></a></li>
                            <ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="left-top">
                        <div class="email-box">
                            <?php
                            if(!isset($_SESSION['id']))
                              { ?>
                            <a href="http://www.gmail.com" title="email" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@sebastianjayametal.com</a>
                            <?php }
                              else { ?>
                            <a href="http://www.gmail.com" title="email" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i> itjb.sjm@gmail.com</a>
                            <?php } ?>
                        </div>
                        <div class="phone-box">
                            <?php
                            if(!isset($_SESSION['id']))
                              { ?>
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> (021) 8984 3516</a>
                            <?php }
                              else { ?>
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"> IT</i> (085) 6711 5593 </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="index.php?halaman=index" style="font-size: 18px;">| Home |</a></li>
                        <?php
                        if(!isset($_SESSION['id']))
                          { ?>
                        <li><a href="index.php?halaman=About" style="font-size: 18px;">| Tentang |</a></li>
                        <?php }
                          else { ?>
                        <li><a href="index.php?halaman=Trouble" style="font-size: 18px;">| Masalah Troubleshooting |</a></li>
                        <li><a href="index.php?halaman=History" style="font-size: 18px;">| Histori Penanganan |</a></li>
                        <?php } ?>

                        <?php
                        
                          if(!isset($_SESSION['id']))
                          {
                            include 'login.php';
                          }
                          else {
                            include 'logout.php';
                          }
                        
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <?php

          if($halaman=='index'){
            include 'awal.php';
          } 

          elseif ($halaman=='About') {
            include 'about-us.php';
          }

          elseif ($halaman=='Trouble') {
            include 'trouble.php';
          }

          elseif ($halaman=='History') {
            include 'history.php';
          }

          elseif ($halaman=='Contact') {
            include 'kontak.php';
          }

          elseif ($halaman=='coba') {
            include 'coba.php';
          }

        ?>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name" style="color:#cdd51f;"> <a href="https://www.unsada.ac.id" title="Universitas Darma Persada" target="_blank">Universitas Darma Persada</a> | Gita Apriyani. &copy; 2019 | <a href="http://www.sebastianjayametal.com/" title="PT. Sebastian Jaya Metal" target="_blank">PT. Sebastian Jaya Metal</a>
                    </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    
    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/portfolio.js"></script>
    <script src="assets/js/hoverdir.js"></script>    
    

</body>
</html>

