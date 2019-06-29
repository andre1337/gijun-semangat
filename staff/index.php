<?php

session_start();
//error_reporting(0);

$id1 = $_SESSION['id'];
$id2 = session_id();



if($id1!=$id2) //jika belum ke login
{
header("location: index.php");
}

$username   = $_SESSION['username'];
$level      = $_SESSION['level'];

if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; else $halaman="home";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT. Sebastian Jaya Metal</title>

  <!-- Site Icons -->
  <link rel="shortcut icon" href="../images/logos/logo.jpg" type="image/x-icon" />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>


<!-- Notif Laporan -->
<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM tbl_laporan WHERE status = '0'";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $countNotif  = mysqli_num_rows($sqlNotif);

?>


<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #3300FF;">

    <a class="navbar-brand mr-1" href="index.html"><?php echo $level ?> IT</a>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
        <div class="input-group-append">
         
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
       <?php include 'notif.php'; ?>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <br>
      <li class="text-center">
          <img src="../images/find_user.png" class="user-image img-responsive"/>
      </li><br>
      <li class="nav-item active">
        <a href="index.php" class="nav-link"><i class="fas fa-fw fa-home"></i> Home</a>
      </li>

      <?php
          if($level=="Admin")
             {
                  include ('halaman-admin.php');  
             }
          elseif($level=="Staff")
              {
                  include ('halaman-staff.php');
              }
          ?>
    </ul>

    <div id="content-wrapper">

      <?php

      if($halaman=="home")                       include "home.php"; 
            else if($halaman=="management-user")       include "management-user.php"; 
            else if($halaman=="edit-user")             include "edit-user.php";

            else if($halaman=="management-idperangkat") include "management-idperangkat.php";
            else if($halaman=="edit-idperangkat")      include "edit-idperangkat.php";
            
            else if($halaman=="management-komputer")   include "management-komputer.php";
            else if($halaman=="edit-komputer")         include "edit-komputer.php";
            else if($halaman=="tambah-komputer")       include "tambah-komputer.php";

            else if($halaman=="data-trouble")          include "data-trouble.php";
            else if($halaman=="edit-trouble")          include "edit-trouble.php";
            else if($halaman=="tambah-trouble")        include "tambah-trouble.php";

            else if($halaman=="keluhan")               include "keluhan.php";
            else if($halaman=="laporan")               include "laporan.php";
            else if($halaman=="laporan-masuk")         include "laporan-masuk.php";

            else if($halaman=="komentarmenu")          include "komentarmenu.php";
            else if($halaman=="komentarweb")           include "komentarweb.php";
            else if($halaman=="edit-komen")            include "edit-komen.php";
            else if($halaman=="edit-komentar")         include "edit-komentar.php";
                  
            else if($halaman=="rekap")                 include "rekap.php";
        

      ?>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>© PT. Sebastian Jaya Metal | Gita Apriyani</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Tombol "Keluar" di bawah ini jika Anda ingin keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="../config/logout.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

  <script>
  var last = 0;
  function check(){
      var url = 'cek.php?last='+last;
      $.get(url, {}, function(resp){
          if(resp.result != false){
              $("#notif").html(resp.result);
              last = resp.last;
          }
          setTimeout("check()", 1000);
      }, 'json');
  }
  $(document).ready(function(){
      check();
  });
  </script>

</body>

</html>
