        <!-- /. NAV SIDE  -->


          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Komputer</li>
            </ol>
              <!-- Welcome -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 style="color: maroon;"> &nbsp;&nbsp;&nbsp;<i class="fas fa-fw fa-desktop"></i> Form Tambah Komputer <i class="fas fa-fw fa-desktop"></i></h2>
                </div>
                <div class="panel-heading">        
                  <div class="panel-body">
                    <div class="card mb-3"><br>
                    <form action="../config/tambah_komputer.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      <input type="hidden" name="id_kom" class="form-control" id="id_kom"></label>
                      
                      <div class="form-group input-group">
                        <label class="col-md-1"></label> 
                        <label class="col-md-2">ID Komputer</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">
                          <input type="text" name="id_komputer" class="form-control" placeholder="Isi ID Komputer" onkeypress="return hanyaAngka(event)"/ maxlength="7" required>
                        </div>
                      </div>
                      
                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                         <label class="col-md-2">User</label>
                         <label class="col-md-1">:</label>
                         <div class="col-md-7">
                            <input type="text" name="user" class="form-control" placeholder="Isi User Komputer" required>
                         </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2">Computer Name</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                            <input type="text" name="computer_name" class="form-control" placeholder="Isi Nama Komputer" required>
                          </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Sistem Operasi</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="sistem_operasi" class="form-control" placeholder="Isi Sistem Operasi" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Motherboard</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="motherboard" class="form-control" placeholder="Isi Type Motherboard" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Processor</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="processor" class="form-control" placeholder="Isi Type Processor" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Hardisk</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="hardisk" class="form-control" placeholder="Isi Ukuran Hardisk" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2" for="ram">RAM</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                          <select class="form-control" id="ram" name="ram">
                            <option>-- RAM --</option>
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

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">VGA Merk</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="vga_merk" class="form-control" placeholder="Isi Merk VGA" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">VGA Size</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="vga_size" class="form-control" placeholder="Isi Ukuran VGA" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Monitor Merk</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="monitor_merk" class="form-control" placeholder="Isi Merk Monitor" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Monitor Size</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="text" name="monitor_size" class="form-control" placeholder="Isi Ukuran Monitor" required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2" for="keyboard">Keyboard</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                          <select class="form-control" id="keyboard" name="keyboard">
                            <option>-- Keyboard --</option>
                            <option>Ada</option>
                            <option>Tidak</option>
                          </select>
                          </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2" for="mouse">Mouse</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                          <select class="form-control" id="mouse" name="mouse">
                            <option>-- Mouse --</option>
                            <option>Ada</option>
                            <option>Tidak</option>
                          </select>
                          </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2" for="ups">UPS</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                          <select class="form-control" id="ups" name="ups">
                            <option>-- UPS --</option>
                            <option>Ada</option>
                            <option>Tidak</option>
                          </select>
                          </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">IP Address</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="ip_address" name="ip_address" class="form-control" placeholder="Isi IP Address Komputer" onkeypress="return hanyaAngka(event)"/ required>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Tanggal Beli</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <input type="date" name="tgl_beli" class="form-control" id="date" placeholder="<?php echo date('d-m-Y')?>">
                        </div>
                      </div>
                      <br>
                        <div style="float: right;">
                          <button type="submit" class="btn btn-primary">Tambah</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                       
                          <a href="?halaman=management-komputer" class="btn btn-danger">Kembali</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                        </div>
                    </form>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>


  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>