<?php

include'koneksi.php';

$id_komputer		= $_POST['id_komputer'];
$user				= $_POST['user'];
$computer_name 	 	= $_POST['computer_name'];
$sistem_operasi 	= $_POST['sistem_operasi'];
$motherboard		= $_POST['motherboard'];
$processor			= $_POST['processor'];
$hardisk			= $_POST['hardisk'];
$ram				= $_POST['ram'];
$vga_merk			= $_POST['vga_merk'];
$vga_size			= $_POST['vga_size'];
$monitor_merk		= $_POST['monitor_merk'];
$monitor_size		= $_POST['monitor_size'];
$keyboard			= $_POST['keyboard'];
$mouse				= $_POST['mouse'];
$ups				= $_POST['ups'];
$ip_address			= $_POST['ip_address'];
$tgl_beli			= $_POST['tgl_beli'];

$input = "INSERT INTO database_komputer (id_kom,id_komputer,user,computer_name,sistem_operasi,motherboard,processor,hardisk,ram,vga_merk,vga_size,monitor_merk,monitor_size,keyboard,mouse,ups,ip_address,tgl_beli) values ('','$id_komputer','$user','$computer_name','$sistem_operasi','$motherboard','$processor','$hardisk','$ram','$vga_merk','$vga_size','$monitor_merk','$monitor_size','$keyboard','$mouse','$ups','$ip_address','$tgl_beli')";
$data = mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
 	echo "<br><br><br><strong><center>Data Komputer Berhasil di Tambah</strong></center>";
 	echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "1;URL=../staff/index.php?halaman=management-komputer">';
}

	else {
    		print"
    			<script>
    				alert(\"Data Gagal Diubah!\");
    				history.back(-1);
    			</script>";
    	}

?>