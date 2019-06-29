<?php
session_start();

  error_reporting();
  include 'config/koneksi.php';

  $id_jenis = $_GET['id_jenis'];

  $query    = "SELECT * FROM tbl_jenis where id_jenis='$id_jenis'";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

?>

<?php
session_start();

  error_reporting();
  include 'config/koneksi.php';

  $id_trouble = $_GET['id_trouble'];

  $query    = "SELECT * FROM tbl_trouble where id_trouble='$id_trouble'";
  $hasil   = mysqli_query($konek, $query)or die(mysql_error());
  $data    = mysqli_fetch_array($hasil);

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

.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

</style>

    

   	<div class="jumbotron jumbotron-fluid" style="background-color:#cdd51f;">
		
			<div class="row">
				<div class="col-12">
					<center>
            <div class="animasi-teks">
						  <h1 style="color: black; font-size: 48px;">Masalah Troubleshooting</h1>
            </div>
					</center>
				</div>
			</div>
	</div>

  <div id="about" class="section wb">
          <div class="container"> 
            <div class="row">
              <div class="col-md-6">
                <div class="message-box">
                  <h2>Keluhan Troubleshooting</h2>
                  <p class="lead">Lakukan keluhan jika terjadi ke rusakan atau error pada perangkat yang ada, dan ingin memperbaiki sendiri.</p>
                  <a href="keluhan.php" class="btn11"><span>Keluhan</span><div class="transition"></div></a>
                </div><!-- end messagebox -->
              </div><!-- end col -->
          
            <div class="col-md-6">
                 <div class="message-box">
                   <h2>Laporan Troubleshooting</h2>
                   <p class="lead">Lakukan laporan jika terjadi ke rusakan atau error pada perangkat yang ada, dan ingin memperbaiki sendiri.</p>
                   <div class="col-md-12">
                    <div class="col-md-6 shadow-lg p-3 mb-4 bg-white">
                      <a href="laporan.php" class="btn11"><span>Laporan</span><div class="transition"></div></a>
                    </div>
                   </div>
                 </div><!-- end messagebox -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end container -->
  </div><!-- end section -->

<!-- Coding Collapsible -->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<!-- Ajax barang -->
<!-- <script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $( "#id_barang" ).change(function() {
      var id_barang = $( "#id_barang" ).val();
      console.log(id_barang);
      $.ajax({
        url: "config/ajax_barang.php?id_barang=" + id_barang,
        success: function(result){
          $("#jenis").html(result);
        }
      });
    });
</script> -->