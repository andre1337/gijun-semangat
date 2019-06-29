<?php
error_reporting();
	include 'koneksi.php';

	$id_keluhan = $_GET['id'];

	$hapus 	 = "DELETE FROM tbl_keluhan WHERE id_keluhan='$id_keluhan'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center>Data Berhasil Dihapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=data-trouble">';
	    }
	else {
	    	echo "<br><br><br><strong><center>Data Gagal di Hapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=data-trouble">';
	    	
	    }
?>