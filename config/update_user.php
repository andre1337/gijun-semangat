<?php
error_reporting();
	include 'koneksi.php';
	
	$id_user		 = $_POST['id_user'];
	$nik			 = $_POST['nik'];
	$nm_pegawai		 = $_POST['nm_pegawai'];
	$username 		 = $_POST['username'];
	$password 		 = $_POST['password'];
	$passwordkonfirm = md5($_POST['passwordkonfirm']);	
	$divisi			 = $_POST['divisi'];

		$update = "UPDATE user SET nik 				= '$nik',
									nm_pegawai 		= '$nm_pegawai',
									username 		= '$username',
									password 		= '$passwordkonfirm',
									divisi 			= '$divisi'
									WHERE id_user 	= '$id_user'";

		$updateuser	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updateuser)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=management-user">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>