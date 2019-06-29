<?php

  error_reporting();

  include '../config/koneksi.php';

  $id_keluhan = $_GET['id'];

  $edit    = "SELECT * FROM tbl_keluhan WHERE id_keluhan = '$id_keluhan'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Edit Data Trouble</li>
        </ol>

        <!-- Edit Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            Ubah Data Trouble</div>
          <div class="card-body">
          <form action="../config/update_trouble.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <input type="hidden" name="id_keluhan" value="<?php echo $data['id_keluhan']; ?>">
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">Keluhan</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">          
                <textarea type="text" name="keluhan" class="form-control" id="keluhan" required><?php echo $data['keluhan'];?></textarea>
              </div>
            </div>
            <div class="form-group input-group">
            <div class="col-md-1"></div>
              <label class="col-md-3">Penanganan</label>
              <label class="col-md-1">:</label>
              <div class="col-md-6">
                <textarea type="text" class="form-control" id="penanganan" name="penanganan" required><?php echo $data['penanganan'];?></textarea>
              </div>
            </div>
            <div class="form-group input-group">
              <label class="col-md-1"></label>
                <label class="col-md-2" for="perangkat">Perangkat</label>
                <label class="col-md-1">:</label>
                <div class="col-md-7">
                <select class="form-control" id="perangkat" name="perangkat">
                  <option><?php echo $data['perangkat'];?>"</option>
                  <option>Jaringan</option>
                  <option>Software</option>
                  <option>Hardisk</option>
                </select>
                </div>
            </div>

            <hr>
              <div style="float: right;">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="?halaman=data-trouble" class="btn btn-danger">Batal</a>&nbsp;&nbsp; 
              </div><br>
          </form>
        </div>
</div>
