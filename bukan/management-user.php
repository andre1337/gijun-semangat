     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" />

<div id="page-inner">
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header" style="color:maroon;">Management User</h1>
    </div>
    <!--End Page Header -->
</div>

<?php
  include 'modtambah-user.php'; 
?>

<br>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Data User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover table-responsive" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>NIK</center></th>
                                            <th><center>Nama Pegawai</center></th>
                                            <th><center>No. Telepon</center></th>
                                            <th><center>Divisi</center></th>
                                            <th><center>Username</center></th>
                                            <th><center>Password</center></th>
                                            <th><center>Aksi</center></th>

                                        </tr>
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
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><center><?php echo $no++; ?></center></td>
                                                <td><center><?php echo $data['nik']; ?></center></td>
                                                <td><center><?php echo $data['nm_pegawai']; ?></center></td>
                                                <td><center><?php echo ($data['tlp']); ?></center></td>
                                                <td><center><?php echo ($data['divisi']); ?></center></td>
                                                <td><center><?php echo ($data['username']); ?></center></td>
                                                <td><center><?php echo ($data['password']); ?></center></td>
                                                <td><center>
                                                  <a href="index.php?halaman=edit-user&id=<?php echo $data['id_user'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>
                                                 &nbsp;
                                                  <a href="../config/delete_user.php?id=<?php echo $data['id_user'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fa fa-trash-o"></span></a></center>
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
                    <!--End Advanced Tables -->
                </div>
            </div>
          </div>
        </div>



     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>