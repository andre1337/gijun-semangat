
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Management User</li>
        </ol>

        <?php
          include 'mod-tambahuser.php'; 
        ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user-plus"></i> Data User</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTable">
                  <thead>
                      <tr>
                          <th><center>No</center></th>
                          <th><center>NIK</center></th>
                          <th><center>Nama Pegawai</center></th>
                          <th><center>Divisi</center></th>
                          <th><center>Username</center></th>
                          <th><center>Password</center></th>
                          <th><center>Level</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th><center>No</center></th>
                          <th><center>NIK</center></th>
                          <th><center>Nama Pegawai</center></th>
                          <th><center>Divisi</center></th>
                          <th><center>Username</center></th>
                          <th><center>Password</center></th>
                          <th><center>Level</center></th>
                          <th><center>Aksi</center></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $no = 1;
                      include '../config/koneksi.php';
                      $query = mysqli_query($konek, "SELECT * FROM user") or die(mysqli_error());
                        if(mysqli_num_rows($query) == 0){
                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                        }
                        else{
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><center><?php echo $no++; ?></center></td>
                            <td><center><?php echo $data['nik']; ?></center></td>
                            <td><center><?php echo $data['nm_pegawai']; ?></center></td>
                            <td><center><?php echo $data['divisi']; ?></center></td>
                            <td><center><?php echo $data['username']; ?></center></td>
                            <td><center><?php echo $data['password']; ?></center></td>
                            <td><center><?php echo $data['level']; ?></center></td>
                            <td><center>
                              <a href="index.php?halaman=edit-user&id=<?php echo $data['id_user'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>&nbsp;&nbsp;
                              <a href="../config/delete_user.php?id=<?php echo $data['id_user'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fas fa-trash"></span></a></center>
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