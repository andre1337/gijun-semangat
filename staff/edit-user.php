<?php

  error_reporting();

  include '../config/koneksi.php';

  $id_user = $_GET['id'];

  $edit    = "SELECT * FROM user WHERE id_user = '$id_user'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Edit Data User</div>
          <div class="card-body">
            <form action="../config/update_user.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
              <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
              <div class="form-group input-group">
              <div class="col-md-1"></div> 
                <label class="col-md-3">NIK</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                  <input class="form-control" type="nik" name="nik" id="nik" value="<?php echo $data['nik']; ?>" onkeypress="return hanyaAngka(event)"/ maxlength="5">
                </div>
              </div>
              <div class="form-group input-group">
                <div class="col-md-1"></div>
                 <label class="col-md-3">Nama Pegawai</label>
                 <label class="col-md-1">:</label>
                 <div class="col-md-6">
                    <input type="nm_pegawai" name="nm_pegawai" class="form-control" id="nm_pegawai" value="<?php echo $data['nm_pegawai']; ?>">
                 </div>
              </div>
              <div class="form-group input-group">
                <div class="col-md-1"></div>
                  <label class="col-md-3">No. Telepon</label>
                  <label class="col-md-1">:</label>
                  <div class="col-md-6">
                    <input type="tlp" name="tlp" class="form-control" id="tlp" value="<?php echo $data['tlp']; ?>" onkeypress="return hanyaAngka(event)"/ maxlength="12">
                  </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Divisi</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">          
                  <input type="divisi" name="divisi" class="form-control" id="divisi" value="<?php echo $data['divisi']; ?>">
                </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Username</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">          
                  <input type="username" name="username" class="form-control" id="username" value="<?php echo $data['username']; ?>">
                </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Password</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">          
                  <input type="text" name="password" class="form-control" id="password" value="<?php echo $data['password']; ?>" readonly>
                </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Password Konfirmasi</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="pwd" name="passwordkonfirm" maxlength="8">
              </div>
              <div class="form-group input-group">
                <div class="col-md-6">
                  <input type="hidden" name="level" value="<?php echo $level ?>" disabled>
                </div>
              </div><hr>
                <div style="float: right;">
                  <a href="?halaman=management-user" class="btn btn-danger">Batal</a>&nbsp;&nbsp; 
                  <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;&nbsp; 
                </div><br>
            </form>
        </div>
</div></div>


  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>