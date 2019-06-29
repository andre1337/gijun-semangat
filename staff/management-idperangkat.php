<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Management Komputer</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-laptop"></i>
            Data Komputer</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                        <th><center>No</center></th>
                        <th><center>ID Perangkat</center></th>
                        <th><center>ID Perangkat Baru</center></th>
                        <th><center>Jenis Perangkat</center></th>
                        <th><center>Tanggal Beli</center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th><center>No</center></th>
                        <th><center>ID Perangkat</center></th>
                        <th><center>ID Perangkat Baru</center></th>
                        <th><center>Jenis Perangkat</center></th>
                        <th><center>Tanggal Beli</center></th>
                        <th><center>Aksi</center></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM tbl_jenis") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                                <td><center><?php echo $data['id_lama']; ?></center></td>
                                <td><center><?php echo $data['id_baru']; ?></center></td>
                                <td><center><?php echo $data['jenis']; ?></center></td>
                                <td><center><?php echo ($data['tgl_beli']); ?></center></td>
                                <td><center>
                                  <a href="index.php?halaman=edit-idperangkat&id=<?php echo $data['id_jenis'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>
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