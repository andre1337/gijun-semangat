<?php
error_reporting();

include'koneksi.php';

$nik		 	= $_POST['nik'];
$nm_pegawai		= $_POST['nm_pegawai'];
$divisi 		= $_POST['divisi'];
$username		= $_POST['username'];
$password		= md5($_POST['password']);
$level			= $_POST['level'];

$input = "INSERT INTO user (id_user,nik,nm_pegawai,divisi,username,password,level) values ('','$nik','$nm_pegawai','$divisi','$username','$password','$level')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<br><br><br><strong><center>Data Berhasil di Daftarkan</strong></center>";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=management-user">';
}

	else {
    		print"
    			<script>
    				alert(\"Data Gagal Ditambah!\");
    				history.back(-1);
    			</script>";
    	}

?>