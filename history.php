<?php

include'../config/koneksi.php';
$id      = $_GET['id'];
$id_user = $_GET['id_user'];

?>

<style>
.animasi-teks {
  font-size: 48px;
  width: 100%;
  white-space:nowrap;
  overflow:hidden;
  -webkit-animation: typing 5s steps(70, end);
  animation: animasi-ketik 5s steps(70, end);
}

@keyframes animasi-ketik{
  from { width: 0; }
}

@-webkit-keyframes animasi-ketik{
  from { width: 0; }
}
</style>

   	<div class="jumbotron jumbotron-fluid" style="background-color:#cdd51f;">
		
			<div class="row">
				<div class="col-12">
					<center>
                    <div class="animasi-teks">
						<h1 style="color: black; font-size: 48px; font-family: Haunted Eyes;">Histori Penanganan Ticketing Troubleshooting</h1>
                    </div>
					</center>
				</div>
			</div>
	</div>

    <div id="about" class="section wb">
        <div class="container">

                <!-- Page Header -->
                <div class="section-title text-center">
                    <h3>Histori Penanganan</h3>
                    <p><font color="gray">Histori Rekomendasi Penanganan Ticketing Troubleshooting </font></p><br><hr style="background-color: #cdd51f;">
                </div><!-- end title -->
                <!--End Page Header -->


            <div class="row">
              <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: black;">
                             Rekap Histori Penanganan Troubleshooting
                        </div>
                        <div class="panel-body">
             
                          <div class="table-responsive">
                            <form action="" method="POST">
                            <table class="table table-striped table-bordered table-hover" id="myTable">
                              <thead>
                                <tbody>

                                  <tr>
                                  <td>
                                    <select type="text" name="bln" class="form-control">
                                                    <option>--Pilih--</option>
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                  </select>
                                  </td>
                                  <td>
                                  <select name="thn" class="form-control">
                                  <?php
                                  $mulai= date('Y') - 50;
                                  for($i = $mulai;$i<$mulai + 100;$i++){
                                      $sel = $i == date('Y') ? ' selected="selected"' : '';
                                      echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                  }
                                  ?>
                                  </select>
                                  </td>

                                  <td align="center">
                                    <div class="text-center cont-btn col-md-6">
                                      <button type="submit" name="cari" class="btn11"><span>Submit</span></button>
                                    </div>
                                  </td>
                                  </tr>
                                  </table>
                                  <br>
                                  <br>
                                  </div>

                                  <?php

                                    if(isset($_POST['cari'])){

                                      $bln = $_POST['bln'];
                                      $thn = $_POST['thn'];
                                    
                                  ?>


                                    <script>

                                    window.location = 'index.php?halaman=history&&bln=<?php echo $bln; ?>&&thn=<?php echo $thn; ?>';

                                    </script>


                                    <?php
                                    }
                                    
                                    ?>

                                  <?php
                                    if(isset($_GET['bln'])&& isset($_GET['thn'])){
                                   
                                    ?>

                                  <table class="table" style="width:800px;">
                                      <thead>
                                        <tbody>
                                      <tr>
                                          <th class="bg-info"><center>No</center></th>
                                          <th class="bg-info"><center>Tanggal</center></th>
                                          <th class="bg-info"><center>No.Ticket</center></th>
                                          <th class="bg-info"><center>Keluhan</center></th>
                                          <th class="bg-info"><center>Status</center></th>
                                      </tr>

                                  <?php

                                  $bln = $_GET['bln'];
                                  $thn = $_GET['thn'];

                                  include 'config/koneksi.php'; 

                                  $no = 1;
                                  $query1 = "SELECT * FROM tbl_trouble join tbl_keluhan where 
                                            tbl_trouble.id_keluhan=tbl_keluhan.id_keluhan and tbl_trouble.status='1' and month(tbl_trouble.tanggal) = '$bln' and year(tbl_trouble.tanggal) = '$thn'";

                                  $tampil1 = mysqli_query($konek, $query1);


                                  ?>


                                  <?php
                                  if(!mysqli_num_rows($tampil1)) {
                                    echo "No posts yet";

                                  } else {
                                  while($row = mysqli_fetch_array($tampil1)) { ?>
                                      <tr>
                                          <td><center><?php echo $no++; ?></center></td>
                                          <td><center><?php echo $row['tanggal']; ?></center></td>
                                          <td><center><?php echo $row['no_ticket']; ?></center></td>
                                          <td><center><?php echo $row['trouble']; ?></center></td>  
                                      </tr>


                                  <?php }

                                  ?>
                                

                                  <?php }
                                  ?>


                                  <?php }
                                  ?>

                                </tbody>
                              </thead>
                            </table>
                          </tbody>
                        </thead>
                      </table>
                    </form>
                  </d>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div>

