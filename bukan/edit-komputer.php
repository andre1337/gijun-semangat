<?php

  error_reporting();

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
        <h1 class="page-header" style="color:maroon;">Manajemen Komputer</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
 <div class="col-md-12">
     <!-- Form Elements -->
     <div class="panel panel-default">
         <div class="panel-heading">
            Ubah Data Komputer
         </div>
         <div class="panel-body">
             <div class="row">
                 <div class="col-md-12">
                     <section class="animate-box">
                      <form action="../config/updatekomputer.php" method="POST" class="form-horizontal">
                        <input type="hidden" name="id_kom" value="<?php echo $data['id_kom']; ?>">
                        <div class="form-group">
                        <div class="col-md-1"></div> 
                          <label class="col-md-3">ID Komputer</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">
                            <input type="text" name="id_komputer" class="form-control" id="id_komputer" value="<?php echo $data['id_komputer']; ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                           <label class="col-md-3">User</label>
                           <label class="col-md-1">:</label>
                           <div class="col-md-6">
                              <input type="text" name="user" class="form-control" id="user" value="<?php echo $data['user']; ?>">
                           </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3">Computer Name</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                              <input type="text" id="computer_name" name="computer_name" class="form-control" value="<?php echo $data['computer_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Sistem Operasi</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="sistem_operasi" class="form-control" id="sistem_operasi" value="<?php echo $data['sistem_operasi']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Motherboard</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="motherboard" class="form-control" id="motherboard" value="<?php echo $data['motherboard']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Processor</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="processor" class="form-control" id="processor" value="<?php echo $data['processor'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Hardisk</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" id="hardisk" name="hardisk" class="form-control" value="<?php echo $data['hardisk']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-1"></label>
                            <label class="col-md-3" for="ram">RAM</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="ram" name="ram" value="<?php echo $data['ram']; ?>">
                              <option><?php echo $data['ram']; ?></option>
                              <option>2 GB DDR3</option>
                              <option>4 GB DDR3</option>
                              <option>8 GB DDR3</option>
                              <option>16 GB DDR3</option>
                              <option>2 GB DDR4</option>
                              <option>4 GB DDR4</option>
                              <option>8 GB DDR4</option>
                              <option>16 GB DDR4</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">VGA Merk</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="vga_merk" class="form-control" id="vga_merk" value="<?php echo $data['vga_merk']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">VGA Size</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" id="vga_size" name="vga_size" class="form-control" value="<?php echo $data['vga_size']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Monitor Merk</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="monitor_merk" class="form-control" id="monitor_merk" value="<?php echo $data['monitor_merk']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Monitor Size</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="monitor_size" class="form-control" id="monitor_size" value="<?php echo $data['monitor_size']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3" for="keyboard">Keyboard</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="keyboard" name="keyboard" value="<?php echo $data['keyboard']; ?>">
                              <option><?php echo $data['keyboard']; ?></option>
                              <option>Ada</option>
                              <option>Tidak</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3" for="mouse">Mouse</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="mouse" name="mouse" value="<?php echo $data['mouse']; ?>">
                              <option><?php echo $data['mouse']; ?></option>
                              <option>Ada</option>
                              <option>Tidak</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3" for="ups">UPS</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="ups" name="ups" value="<?php echo $data['ups']; ?>">
                              <option><?php echo $data['ups']; ?></option>
                              <option>Ada</option>
                              <option>Tidak</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">IP Address</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="ip_address" name="ip_address" class="form-control" id="ip_address" value="<?php echo $data['ip_address']; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Tanggal Beli</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" id="tgl_beli" name="tgl_beli" class="form-control" value="<?php echo $data['tgl_beli'];?>" readonly>
                          </div>
                        </div><hr>
                        <div style="float: left;">
                          &nbsp;&nbsp;<a href="?halaman=management-komputer" class="btn btn-danger">Kembali</a> 
                        </div>
                        <div style="float: right;">
                          <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;&nbsp; 
                        </div><br>
                      </form>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div> <!--End Row-->
</div>

  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
