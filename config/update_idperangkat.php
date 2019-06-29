<?php
error_reporting();
	include 'koneksi.php';
	
	$id_jenis		 = $_POST['id_jenis'];
	$id_lama	 	 = $_POST['id_lama'];
	$idkkonfirm		 = $_POST['idkkonfirm'];
	$tgl_beli		 = $_POST['tgl_beli'];

		$update = "UPDATE tbl_jenis SET	id_baru 		= '$idkkonfirm',
										tgl_beli 	  	= '$tgl_beli'
									    WHERE id_jenis 	= '$id_jenis'";

		$updateidjenis	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateidjenis)
    	{
    		echo "<br><br><br><strong><center><i>ID Perangkat Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=management-idperangkat">';
    	}
	else {
    		print"
    			<script>
    				alert(\"ID Perangkat Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>