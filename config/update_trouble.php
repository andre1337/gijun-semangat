<?php
error_reporting();
	include 'koneksi.php';
	
	$id_keluhan		 = $_POST['id_keluhan'];
	$keluhan 	 	 = $_POST['keluhan'];
	$penanganan		 = $_POST['penanganan'];
	$perangkat		 = $_POST['perangkat'];

		$update = "UPDATE tbl_keluhan SET	keluhan 		 = '$keluhan',
											penanganan 	  	 = '$penanganan',
											perangkat 	  	 = '$perangkat'
									        WHERE id_keluhan = '$id_keluhan'";

		$updateidkom	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateidkom)
    	{
    		echo "<br><br><br><strong><center><i>Data Trouble Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=data-trouble">';
    	}
	else {
    		print"
    			<script>
    				alert(\"ID Komputerer Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>