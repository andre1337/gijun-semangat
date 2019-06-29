  <?php 
  if(isset($_GET['berhasil'])){
    echo "<p>".$_GET['berhasil']." Data berhasil di unggah.</p>";
  }
  ?>

<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Data Troubleshooting</li>
        </ol>
        <a href="index.php?halaman=tambah-trouble" class="btn btn-danger"><span class="fa fa-plus"></span> Tambah</a>

        <a href="index.php?halaman=tambah-komputer" class="btn btn-primary float-right"><span class="fa fa-download"></span> Unduh</a><hr>

        <div class="col-lg-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <!-- Upload data csv -->
            <form method="post" enctype="multipart/form-data" action="csv_import.php">
              <input name="filekeluhan" type="file" required="required">
              <input name="upload" type="submit" value="Unggah" class="btn btn-info float-right"><!-- <span class="fa fa-upload"></span>Unggah</a> -->
            </form>
          </li>
        </ol>
        </div>
        <hr>

        <hr>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-cog fa-spin"></i>
            Data Penanganan Troubleshooting</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Masalah</center></th>
                          <th><center>Penanganan</center></th>
                          <th><center>Perangkat</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>Masalah</center></th>
                          <th><center>Penanganan</center></th>
                          <th><center>Perangkat</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM tbl_keluhan") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['keluhan']; ?></td>
                            <td><?php echo $data['penanganan']; ?></td>
                            <td><center><?php echo $data['perangkat']; ?></center></td>
                            <td><center>
                              <a href="index.php?halaman=edit-trouble&id=<?php echo $data['id_keluhan'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>&nbsp;&nbsp;
                              <a href="../config/delete_trouble.php?id=<?php echo $data['id_keluhan'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fas fa-trash"></span></a></center>
                            </td>
                        </tr>
                          <?php
                          
                        }
                        }
                        ?>
                  </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Diubah pada <?php echo date("d-M-Y | H:i:s"); ?></div>
        </div>

      </div>
      <!-- /.container-fluid -->