        <!-- /. NAV SIDE  -->
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Trouble</li>
            </ol>
              <!-- Welcome -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 style="color: maroon;"> &nbsp;&nbsp;&nbsp; Form Tambah Trouble</h2>
                </div>
                <div class="panel-heading">        
                  <div class="panel-body">
                    <div class="card mb-3"><br>
                    <form action="../config/tambah_trouble.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      <input type="hidden" name="id_keluhan" class="form-control" id="id_keluhan" required></label>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Keluhan</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <textarea type="text" name="keluhan" class="form-control" placeholder="Isi Trouble" required></textarea>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                        <label class="col-md-2">Penanganan</label>
                        <label class="col-md-1">:</label>
                        <div class="col-md-7">          
                          <textarea type="text" name="penanganan" class="form-control" placeholder="Isi Penanganan Masalah" required></textarea>
                        </div>
                      </div>

                      <div class="form-group input-group">
                        <label class="col-md-1"></label>
                          <label class="col-md-2" for="perangkat">Perangkat</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-7">
                          <select class="form-control" id="perangkat" name="perangkat">
                            <option>-- Perangkat --</option>
                            <option>Hardware</option>
                            <option>Software</option>
                            <option>Jaringan</option>
                          </select>
                          </div>
                      </div>

                      <br>
                        <div style="float: right;">
                          <button type="submit" class="btn btn-primary">Tambah</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                       
                          <a href="?halaman=data-trouble" class="btn btn-danger">Kembali</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                        </div>
                    </form>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>