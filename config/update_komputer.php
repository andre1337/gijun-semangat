<?php
error_reporting();
	include 'koneksi.php';

    $id_kom             = $_POST['id_kom'];
    $id_komputer        = $_POST['id_komputer'];
    $user               = $_POST['user'];
    $computer_name      = $_POST['computer_name'];
    $sistem_operasi     = $_POST['sistem_operasi'];
    $motherboard        = $_POST['motherboard'];
    $processor          = $_POST['processor'];
    $hardisk            = $_POST['hardisk'];
    $ram                = $_POST['ram'];
    $vga_merk           = $_POST['vga_merk'];
    $vga_size           = $_POST['vga_size'];
    $monitor_merk       = $_POST['monitor_merk'];
    $monitor_size       = $_POST['monitor_size'];
    $keyboard           = $_POST['keyboard'];
    $mouse              = $_POST['mouse'];
    $ups                = $_POST['ups'];
    $ip_address         = $_POST['ip_address'];
    $tgl_beli           = $_POST['tgl_beli'];



	$update 	= "UPDATE database_komputer SET id_komputer     = '$id_komputer', 
                                                 user           = '$user', 
                                                 computer_name  = '$computer_name', 
                                                 sistem_operasi = '$sistem_operasi', 
                                                 motherboard    = '$motherboard', 
                                                 processor      = '$processor', 
                                                 hardisk        = '$hardisk', 
                                                 ram            = '$ram', 
                                                 vga_merk       = '$vga_merk', 
                                                 vga_size       = '$vga_size', 
                                                 monitor_merk   = '$monitor_merk', 
                                                 monitor_size   = '$monitor_size', 
                                                 keyboard       = '$keyboard', 
                                                 mouse          = '$mouse', 
                                                 ups            = '$ups', 
                                                 ip_address     = '$ip_address', 
                                                 tgl_beli       = '$tgl_beli' 
                                                 WHERE id_kom   = '$id_kom'";
                                                 
	$updatekomputer	= mysqli_query($konek, $update)or die(mysqli_error());

	if ($updatekomputer)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil di Ubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php?halaman=management-komputer">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Data Gagal di Ubah!\");
    				history.back(-1);
    			</script>";
    	}
?>