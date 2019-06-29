<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<div id="page-inner">
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header" style="color:maroon;">Manajemen User</h1>
    </div>
    <!--End Page Header -->
</div>

<a href="index.php?halaman=tambah-user"><button type="button" class="btn btn-info"><span class="fa fa-plus"></span> Tambah</button></a>
<br><br>


<div class="row">
 <div class="col-md-12">
     <!-- Form Elements -->
     <div class="panel panel-default">
         <div class="panel-heading">
             Form Tambah Pegawai
         </div>
         <div class="panel-body">
             <div class="row">
                 <div class="col-md-12">
                     <section class="animate-box">
                      <form action="../config/tambahuser.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                        <div class="col-md-1"></div> 
                          <label class="col-md-3">NIK</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">
                            <input type="nik" name="nik" class="form-control" placeholder="Isi NIK" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                           <label class="col-md-3">Nama Pegawai</label>
                           <label class="col-md-1">:</label>
                           <div class="col-md-6">
                              <input type="nm_pegawai" name="nm_pegawai" class="form-control" placeholder="Isi Nama Pegawai" required>
                           </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-1"></div>
                            <label class="col-md-3">No. Telepon</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                              <input type="tlp" name="tlp" class="form-control" placeholder="Isi Nomer Telepon" onkeypress="return hanyaAngka(event)"/ required>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Divisi</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="divisi" name="divisi" class="form-control" placeholder="Isi Nama Divisi" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Username</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="divisi" name="divisi" class="form-control" placeholder="Isi Nama Divisi" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">Password</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="divisi" name="divisi" class="form-control" placeholder="Isi Nama Divisi" required>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2" for="level">Level</label>
                            <label class="col-md-1">:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="level" name="level">
                              <option>-- Level --</option>
                              <option>Staff IT</option>
                              <option>User</option>
                            </select>
                            </div>
                        </div>
                          <div style="float: right;">
                            <button type="submit" class="btn btn-primary">Kirim</button> 
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
