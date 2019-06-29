


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
						<h1 style="color: black; font-size: 48px; font-family: Haunted Eyes;">Keluhan Troubleshooting</h1>
                    </div>
					</center>
				</div>
			</div>
	</div>

    <div id="about" class="section wb">
        
            <div class="section-title text-center">
                <font style="font-size:33px;color: black;">Input Laporan Masalah Troubleshooting</font>
                <p><font color="gray">Masukkan laporan Kerusakan pada form di bawah ini </font><br></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 offset-md-2">
                  <hr style="background-color: #cdd51f;">
                       <form action='send_mail.php' method='post'>
                       <div class="form-group">
                       <label >Nama</label>
                       <input type="text" class="form-control" name="nama">
                       </div>
                       <div class="form-group">
                       <label >Nomer HP</label>
                       <input type="text" class="form-control" name="hp">
                       </div>
                       <div class="form-group">
                       <label >Alamat</label>
                       <input type="text" class="form-control" name="alamat">
                       </div>
                       <div class="form-group">
                       <label >Email</label>
                       <input type="text" class="form-control" name="usermail">
                       </div>
                       <button type='Submit'>Submit</button>
                       </form>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

