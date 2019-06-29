<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_jenis = $_GET['id'];

  $edit    = "SELECT * FROM tbl_jenis WHERE id_jenis = '$id_jenis'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Edit ID Perangkat</li>
        </ol>
        <hr>
        <!-- Form Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Ubah ID Perangkat</div>
          <div class="card-body">
          <form action="../config/update_idperangkat.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="id_jenis" value="<?php echo $data['id_jenis']; ?>">
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">ID Perangkat Lama</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">          
                <input type="text" name="id_lama" class="form-control" id="id_lama" value="<?php echo $data['id_lama']; ?>" readonly>
              </div>
            </div>
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">ID Perangkat Baru</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="idk" name="idkkonfirm" onkeypress="return hanyaAngka(event)"/ maxlength="7">
              </div>
            </div>
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">Jenis Perangkat</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $data['jenis']; ?>" readonly>
              </div>
            </div>
            <div class="form-group input-group">
              <div class="col-md-1"></div>
              <label class="col-md-3">Tanggal Beli</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">          
                <input type="date" name="tgl_beli" class="form-control" value="<?php echo $data['tgl_beli'];?>">
              </div>
            </div>
            <hr>
              <div style="float: right;">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="?halaman=management-idkomputer" class="btn btn-danger">Batal</a>&nbsp;&nbsp; 
              </div><br>
          </form>
        </div>
</div>


  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>