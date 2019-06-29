<?php

session_start();
error_reporting(0);

$id1 = $_SESSION['id'];
$id2 = session_id();



if($id1!=$id2) //jika belum ke login
{
header("location: index.php");
}

$username   = $_SESSION['username'];
$level      = $_SESSION['level'];

if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; else $halaman="home-staff";

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Sebastian Jaya Metal</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
       <!-- GOOGLE FONTS-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <!-- TABLE STYLES-->
      <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
 
</head>

<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM tbl_keluhan";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $Notif = mysqli_num_rows($sqlNotif);

?>

<?php
include '../config/koneksi.php';

    $queryNotif="SELECT * FROM tbl_laporan";
    $sqlNotif = mysqli_query($konek,$queryNotif) or die (mysqli_error($konek));
    $Notif2 = mysqli_num_rows($sqlNotif);

?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php">Staff IT</a> 
            </div>
           

                <a href="?halaman=pesanan-masuk">
                    <i class="fa fa-bell"></i>
                    <span class="top-label label label-warning" id="notif"><?php echo $countNotif; ?></span> 
                </a>
                <a a href="?halaman=komentarweb">
                    <span class="top-label label label-success"><?php echo $Notif2; ?></span>  <i class="fa fa-tasks"></i>
                </a>
                <a href="?halaman=komentarmenu">
                    <span class="top-label label label-danger"><?php echo $Notif; ?></span><i class="fa fa-envelope"></i>
                </a>
          
        </nav>

        <!-- /. NAV TOP  -->
         <nav class="navbar-default navbar-side" role="navigation">
         <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive"/>
            </li>
                <li>
                    <a  href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-desktop"></i>Management<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="index.php?halaman=management-user">Management User</a>
                        </li>
                        <li>
                            <a href="#">Management Komputer<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="index.php?halaman=management-komputer">Ubah Data Komputer</a>
                                </li>
                                <li>
                                    <a href="index.php?halaman=management-idkomputer">Ubah ID Komputer</a>
                                </li>
                                <li>
                                    <a href="index.php?halaman=management-komputer">Tanggal Beli Komputer</a>
                                </li>
                            </ul>
                           
                        </li>
                    </ul>
                </li>
                <li >
                    <a  href="table.html"><i class="fa fa-table"></i> Rekap Troubleshooting</a>
                </li> 
                 <li>
                    <a href="../config/logout.php" value="Click Me" onclick="return confirm('Apakah anda ingin logout?') "><i class="fa fa-sign-out"></i> Logout</a>
                </li>       
             </ul>
             </div>
         </nav>  

<div id="page-wrapper" >
    <?php

    if($halaman=="home-staff")                             include "home-staff.php"; 
                else if($halaman=="management-user")       include "management-user.php"; 
                else if($halaman=="edit-user")             include "edit-user.php";
                else if($halaman=="tambah_pegawai")        include "tambah_pegawai.php";  

                else if($halaman=="management-komputer")   include "management-komputer.php";
                else if($halaman=="management-idkomputer") include "management-idkomputer.php";
                else if($halaman=="edit-komputer")         include "edit-komputer.php";
                else if($halaman=="edit-idkomputer")       include "edit-idkomputer.php";
                else if($halaman=="tambah-komputer")       include "tambah-komputer.php";

                else if($halaman=="data-konfirmasi")       include "data-konfirmasi.php";
                else if($halaman=="detail-pesanan")        include "detail-pesanan.php";
                else if($halaman=="detail-alamat-pesanan") include "detail-alamat-pesanan.php";

                else if($halaman=="data-request")          include "data-request.php";
                else if($halaman=="detail-request")        include "detail-request.php";

                else if($halaman=="pesanan-masuk")         include "pesanan-masuk.php";
                else if($halaman=="detail-pesanan-masuk")  include "detail-pesanan-masuk.php";


                else if($halaman=="komentarmenu")          include "komentarmenu.php";
                else if($halaman=="komentarweb")           include "komentarweb.php";
                else if($halaman=="edit-komen")            include "edit-komen.php";
                else if($halaman=="edit-komentar")         include "edit-komentar.php";
                
                else if($halaman=="contoh")                include "contoh.php";
      

    ?>
</div>

<?php
    include 'gotop.php';
?>

</div>
<!-- /. WRAPPER  -->
    
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


    <script src="assets/js/jquery.min.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
   
</body>
</html>
