<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Laporan Masuk</li>
        </ol> 
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-desktop"></i>
            Laporan Masalah</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>ID User</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Pelapor</center></th>
                          <th><center>Nomer Laporan</center></th>
                          <th><center>ID Perangkat</center></th>
                          <th><center>Jenis Perangkat</center></th>
                          <th><center>User</center></th>
                          <th><center>Lokasi Perangkat</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Darurat</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </thead><!-- 
                  <tfoot>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>ID User</center></th>
                          <th><center>Tanggal Laporan</center></th>
                          <th><center>Pelapor</center></th>
                          <th><center>Nomer Laporan</center></th>
                          <th><center>ID Perangkat</center></th>
                          <th><center>Jenis Perangkat</center></th>
                          <th><center>User</center></th>
                          <th><center>Lokasi Perangkat</center></th>
                          <th><center>Laporan</center></th>
                          <th><center>Status</center></th>
                          <th><center>Darurat</center></th>
                          <th><center>Alasan</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </tfoot> -->
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM tbl_laporan") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['id_user']; ?></td>
                            <td><?php echo $data['tgl_laporan']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['no_lap']; ?></td>
                            <td><?php echo $data['id_perangkat']; ?></td>
                            <td><?php echo $data['jenis_perangkat']; ?></td>
                            <td><?php echo $data['user']; ?></td>
                            <td><?php echo $data['lokasi_perangkat']; ?></td>
                            <td><?php echo $data['laporan']; ?></td>
                            <td><?php echo $data['darurat']; ?></td>
                            <td><?php echo $data['alasan']; ?></td>
                            
                            <td><center>
                              <?php 
                              if ($data['status']==0){ ?>
                                <a href="../config/proses_konfirmasi.php?id=<?php echo $data['id_laporan']; ?> AND <?php $tgl=date('d-m-Y'); echo $tgl;?>" class="btn btn-success" title="Tangani">Tangani</a>
                                  <?php }
                              else { ?>

                              <?php } ?>
                            </center>
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