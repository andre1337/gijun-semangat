<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Management Komputer</li>
        </ol> 
        <a href="index.php?halaman=tambah-komputer" class="btn btn-danger"><span class="fa fa-plus"></span> Tambah</a><hr>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-desktop"></i>
            Data Komputer</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>ID Komputer</center></th>
                            <th><center>User</center></th>
                            <th><center>Computer Name</center></th>
                            <th><center>Sistem Operasi</center></th>
                            <th><center>Motherboard</center></th>
                            <th><center>Processor</center></th>
                            <th><center>Hardisk</center></th>
                            <th><center>RAM</center></th>
                            <th><center>VGA Merk</center></th>
                            <th><center>VGA Size</center></th>
                            <th><center>Monitor Merk</center></th>
                            <th><center>Monitor Size</center></th>
                            <th><center>Keyboard</center></th>
                            <th><center>Mouse</center></th>
                            <th><center>UPS</center></th>
                            <th><center>IP Address</center></th>
                            <th><center>Tanggal Beli</center></th>
                            <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th><center>No.</center></th>
                          <th><center>ID Komputer</center></th>
                            <th><center>User</center></th>
                            <th><center>Computer Name</center></th>
                            <th><center>Sistem Operasi</center></th>
                            <th><center>Motherboard</center></th>
                            <th><center>Processor</center></th>
                            <th><center>Hardisk</center></th>
                            <th><center>RAM</center></th>
                            <th><center>VGA Merk</center></th>
                            <th><center>VGA Size</center></th>
                            <th><center>Monitor Merk</center></th>
                            <th><center>Monitor Size</center></th>
                            <th><center>Keyboard</center></th>
                            <th><center>Mouse</center></th>
                            <th><center>UPS</center></th>
                            <th><center>IP Address</center></th>
                            <th><center>Tanggal Beli</center></th>
                            <th><center>Aksi</center></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM database_komputer") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><?php echo $data['id_komputer']; ?></td>
                            <td><?php echo $data['user']; ?></td>
                            <td><?php echo $data['computer_name']; ?></td>
                            <td><?php echo $data['sistem_operasi']; ?></td>
                            <td><?php echo $data['motherboard']; ?></td>
                            <td><?php echo $data['processor']; ?></td>
                            <td><?php echo $data['hardisk']; ?></td>
                            <td><?php echo $data['ram']; ?></td>
                            <td><?php echo $data['vga_merk']; ?></td>
                            <td><?php echo $data['vga_size']; ?></td>
                            <td><?php echo $data['monitor_merk']; ?></td>
                            <td><?php echo $data['monitor_size']; ?></td>
                            <td><?php echo $data['keyboard']; ?></td>
                            <td><?php echo $data['mouse']; ?></td>
                            <td><?php echo $data['ups']; ?></td>
                            <td><?php echo $data['ip_address']; ?></td>
                            <td><?php echo $data['tgl_beli']; ?></td>
                            <td><center>
                              <a href="index.php?halaman=edit-komputer&id=<?php echo $data['id_kom'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>&nbsp;&nbsp;
                              <a href="../config/delete_komputer.php?id=<?php echo $data['id_kom'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fas fa-trash"></span></a></center>
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