<style>

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

.a{
  background-color: blue;
}

.btn {
    color: white;
    float: center;
    font-size: 15px;
    font-weight: bold;
}

.btn:hover,
.btn:focus {
    color: maroon;
    cursor: pointer;
}

</style>

<!-- Trigger/Open The Modal -->
<button class="btn btn-danger btn-md center" data-toggle="modal" data-target="#myModal" title="Tambah User"><span class="fa fa-plus"></span> Tambah</button>
<hr>

<!-- The Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <center>
          <!-- <span class="close">&times;</span> <br> -->
          <font color="darkblue"><h2 class="modal-title" align="center">Tambah User</h2>
          <p align="center"><sup><i>Insert</i></sup></p></font>
          </center>
          <button type="button" class="close" data-dismiss="modal" title="Batal">&times;</button>
        </div>
        <!-- Modal User -->
        <div class="modal-body">
          <form action="../config/tambahuser.php" method="POST" class="form-horizontal">
            <label>
              <input type="hidden" name="id_user" class="form-control" id="id_user"></label>
            <div class="form-group input-group">
                <label class="col-md-1"></label>
                <label class="col-md-3">NIK</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">
                  <input type="nik" name="nik" class="form-control" placeholder="Isi Nomer NIK" onkeypress="return hanyaAngka(event)"/ maxlength="5">
                </div>
              </div>
              <div class="form-group input-group">
                <div class="col-md-1"></div>
                 <label class="col-md-3">Nama Pegawai</label>
                 <label class="col-md-1">:</label>
                 <div class="col-md-6">
                    <input type="nm_pegawai" name="nm_pegawai" class="form-control" placeholder="Isi Nama Pegawai" required>
                 </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Divisi</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">          
                  <input type="divisi" name="divisi" class="form-control" placeholder="Isi Nama Divisi" required>
                </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Username</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">          
                  <input type="useraname" name="username" class="form-control" placeholder="Isi Username" required>
                </div>
              </div>
              <div class="form-group input-group">
              <div class="col-md-1"></div>
                <label class="col-md-3">Password</label>
                <label class="col-md-1">:</label>
                <div class="col-md-6">          
                  <input type="password" name="password" class="form-control" placeholder="Isi Passwod" maxlength="8" required>
                </div>
              </div>
              <div class="form-group input-group">
                <div class="col-md-1"></div>
                  <label class="col-md-3" for="level">Level</label>
                  <label class="col-md-1">:</label>
                  <div class="col-md-6">
                  <select class="form-control" id="level" name="level">
                    <option>-- Level --</option>
                    <option>Staff IT</option>
                    <option>User</option>
                  </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            <br>
          </form>
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
