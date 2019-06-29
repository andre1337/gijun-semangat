<?php
error_reporting();
	include 'koneksi.php';

	$id_user = $_GET['id'];

	$hapus 	 = "DELETE FROM user WHERE id_user='$id_user'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center>Data Berhasil Dihapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=management-user">';
	    }
	else {
	    	echo "<br><br><br><strong><center>Data Gagal di Hapus</strong></center>";
	    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=management-user">';
	    	
	    }
?>