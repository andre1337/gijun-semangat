<?php
	
session_start();
$out=session_destroy();
	if ($out) {
			echo "<br><br><br><br><strong><center>Terima Kasih <br><br>Anda Berhasil Keluar</center</strong>";
		# code...
	}
?>

<META HTTP-EQUIV="REFRESH" CONTENT='1; url=../index.php'>