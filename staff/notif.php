<?php

  error_reporting();

  include '../config/koneksi.php';


  $edit    = "SELECT * FROM tbl_laporan";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw" title="Laporan Masuk"></i>
          <span class="badge badge-danger" id="notif"><?php echo $countNotif; ?>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="?halaman=laporan-masuk"><< Laporan Masuk >></a>
          <div class="dropdown-divider"></div>
          <label class="dropdown-item">Pelapor : <?php echo $data['username']; ?></label>
          <label class="dropdown-item">Darurat : <?php echo $data['darurat']; ?></label>

        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw" title="Keluhan Masuk"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="?halaman=laporan-masuk">Keluhan Masuk</a>
          <div class="dropdown-divider"></div>
          <label class="dropdown-item">Darurat :</label>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="modal" data-target="#logoutModal" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-sign-out-alt" title="Keluar"></i>
        </a>
        </div>
      </li>