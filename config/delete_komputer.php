<?php
error_reporting();
	include 'koneksi.php';

	$id_kom = $_GET['id'];

	$hapus 	 = "DELETE FROM database_komputer WHERE id_kom='$id_kom'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center>Data Komputer Berhasil Dihapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=management-komputer">';
	    }
	else {
	    	echo "<br><br><br><strong><center>Data Komputer Gagal di Hapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=management-komputer">';
	    	
	    }
?>