
<div id="page-inner">
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header" style="color:maroon;">Management Komputer</h1>
    </div>
    <!--End Page Header -->
</div>

<a href="index.php?halaman=tambah-komputer" class="btn btn-info"><span class="fa fa-plus"></span> Tambah</a>
<hr>

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
                                  <tbody>
                                      <?php

                                  include '../config/koneksi.php';

                                  $query = mysqli_query($konek, "SELECT * FROM database_komputer") or die(mysqli_error());
                                        if(mysqli_num_rows($query) == 0){
                                          echo '<tr><td collspan="4" align="center">Tidak ada data!</td></tr>';
                                        }
                                        else{
                                          while ($data = mysqli_fetch_array($query)) {  
                                              echo '<tr>';
                                             
                                              echo '<td>'.$data['id_komputer'].'</td>';
                                              echo '<td>'.$data['user'].'</td>';
                                              echo '<td>'.$data['computer_name'].'</td>';
                                              echo '<td>'.$data['sistem_operasi'].'</td>';
                                              echo '<td>'.$data['motherboard'].'</td>';
                                              echo '<td>'.$data['processor'].'</td>';
                                              echo '<td>'.$data['hardisk'].'</td>';
                                              echo '<td>'.$data['ram'].'</td>';
                                              echo '<td>'.$data['vga_merk'].'</td>';
                                              echo '<td>'.$data['vga_size'].'</td>';
                                              echo '<td>'.$data['monitor_merk'].'</td>';
                                              echo '<td>'.$data['monitor_size'].'</td>';
                                              echo '<td>'.$data['keyboad'].'</td>';
                                              echo '<td>'.$data['mouse'].'</td>';
                                              echo '<td>'.$data['ups'].'</td>';
                                              echo '<td>'.$data['ip_address'].'</td>';
                                              echo '<td>'.$data['tgl_beli'].'</td>';
                                              echo '<td><center><a href="index.php?halaman=edit-komputer&id=<?php echo $data['id_kom'];?>" title="Edit Data"><span class="fa fa-edit"></span></a>
                                              <a href="../config/delete_komputer.php?id=<?php echo $data['id_kom'];?>" title="Hapus Data" onclick="return confirm('Hapus Data ini?');"><span class="fa fa-trash-o"></span></a></center>
                                              </td>';
                                             
                                              echo '</tr>';
                                                
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




