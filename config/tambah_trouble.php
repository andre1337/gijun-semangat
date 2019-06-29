<?php
error_reporting();

include'koneksi.php';

$keluhan		= $_POST['keluhan'];
$penanganan		= $_POST['penanganan'];
$perangkat 	 	= $_POST['perangkat'];

$input = "INSERT INTO tbl_keluhan (id_keluhan,keluhan,penanganan,perangkat) values ('','$keluhan','$penanganan','$perangkat')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<br><br><br><strong><center>Data Berhasil di Tambahkan</strong></center>";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=data-trouble">';
}

	else {
    		print"
    			<script>
    				alert(\"Data Gagal Ditambah!\");
    				history.back(-1);
    			</script>";
    	}

?>