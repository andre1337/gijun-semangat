<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div id="page-inner">
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header" style="color:maroon;">Management Komputer</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
 <div class="col-md-12">
     <!-- Form Elements -->
     <div class="panel panel-default">
         <div class="panel-heading">
             Form Tambah Komputer
         </div>
         <div class="panel-body">
             <div class="row">
                 <div class="col-md-12">
                     <section class="animate-box">
                      <form action="../config/tambahkomputer.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="id_komp" class="form-control" id="id_komp"></label>
                        <div class="form-group">
                        <div class="col-md-1"></div> 
                          <label class="col-md-3">ID Komputer</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">
                            <input type="text" name="id_komputer" class="form-control" placeholder="Isi ID Komputer" maxlength="15">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                           <label class="col-md-3">User</label>
                           <label class="col-md-1">:</label>
                           <div class="col-md-6">
                              <input type="text" name="user" class="form-control" placeholder="Isi User Komputer" required>
                           </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3">Computer Name</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                              <input type="text" name="computer_name" class="form-control" placeholder="Isi Nama Komputer" required>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Sistem Operasi</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="sistem_operasi" class="form-control" placeholder="Isi Sistem Operasi" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Motherboard</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="motherboard" class="form-control" placeholder="Isi Type Motherboard" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Processor</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="processor" class="form-control" placeholder="Isi Type Processor" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Hardisk</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="hardisk" class="form-control" placeholder="Isi Ukuran Hardisk" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-1"></label>
                            <label class="col-md-3" for="ram">RAM</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
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
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">VGA Merk</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="vga_merk" class="form-control" placeholder="Isi Merk VGA" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">VGA Size</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="divisi" class="form-control" placeholder="Isi Ukuran VGA" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Monitor Merk</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="monitor_merk" class="form-control" placeholder="Isi Merk Monitor" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Monitor Size</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="monitor_size" class="form-control" placeholder="Isi Ukuran Monitor" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3" for="keyboard">Keyboard</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="keyboard" name="keyboard">
                              <option>-- Keyboard --</option>
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
                            <select class="form-control" id="mouse" name="mouse">
                              <option>-- Mouse --</option>
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
                            <select class="form-control" id="ups" name="ups">
                              <option>-- UPS --</option>
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
                            <input type="ip_address" name="ip_address" class="form-control" placeholder="Isi IP Address Komputer">
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Tanggal Beli</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="date" name="tgl_beli" class="form-control" placeholder="Isi Nama Divisi" required>
                          </div>
                        </div>
                        <hr>
                          <div style="float: left;">
                            &nbsp;&nbsp;<a href="?halaman=management-komputer" class="btn btn-danger">Kembali</a> 
                          </div>
                          <div style="float: right;">
                            <button type="submit" class="btn btn-primary">Tambah</button> 
                          </div>
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
