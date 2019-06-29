<?php

  error_reporting(0);

  include '../config/koneksi.php';

  $id_kom = $_GET['id'];

  $edit    = "SELECT * FROM database_komputer WHERE id_kom = '$id_kom'";
  $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<div id="page-inner">
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header" style="color:maroon;">Edit ID Komputer</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
 <div class="col-md-12">
     <!-- Form Elements -->
     <div class="panel panel-default">
         <div class="panel-heading">
            Ubah ID Komputer
         </div>
         <div class="panel-body">
             <div class="row">
                 <div class="col-md-12">
                     <section class="animate-box">
                      <form action="../config/updateuser.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="id_kom" value="<?php echo $data['id_kom']; ?>">
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">ID Komputer Lama</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">          
                            <input type="text" name="id_komputer" class="form-control" id="id_komputer" value="<?php echo $data['id_komputer']; ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-1"></div>
                          <label class="col-md-3">ID Komputer Baru</label>
                          <label class="col-md-1">:</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" id="idk" name="idkkonfirm" maxlength="8">
                        </div>
                        <hr>
                          <div style="float: left;">
                            &nbsp;&nbsp;<a href="?halaman=management-idkomputer" class="btn btn-danger">Batal</a> 
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