<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_kom = $_GET['id'];

  $edit    = "SELECT * FROM database_komputer WHERE id_kom = '$id_kom'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div id="page-inner">
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header" style="color:maroon;">Manajemen User</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Komputer
                        </div>
                        <div class="panel-body">
                          
                          <div class="row space-form ">
                             <div class="col-lg-4">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                              </div>
                            </div>
                          </div><br>

                              <div class="table-responsive" style="overflow-x: auto">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>ID Komputer</center></th>
                                            <th><center>Tanggal Beli</center></th>
                                            <th><center>Aksi</center></th>

                                        </tr>
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
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><center><?php echo $no++; ?></center></td>
                                                <td><center><?php echo $data['id_komputer']; ?></center></td>
                                                <td><center><?php echo ($data['tgl_beli']); ?></center></td>
                                                <td><center>
                                                  <a href="index.php?halaman=edit-idkomputer&id=<?php echo $data['id_kom'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>
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
                </div>
            </div>
      </div>


