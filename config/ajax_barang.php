<?php

	include "koneksi.php";

	$id_barang = $_GET["id_barang"];

	$query = "SELECT * FROM tbl_jenis WHERE id_barang = '$id_barang' GROUP BY jenis";
	$sql = mysqli_query($konek, $query)or die(mysqli_error($konek));

	while ($data = mysqli_fetch_array($sql)) { ?>
		<option><?php echo $data['jenis']; ?> </option>
	<?php
	}
	?>
?>
