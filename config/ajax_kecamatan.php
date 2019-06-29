<?php
	include "koneksi.php";

	$kota = $_GET["kota"];

	$query = "SELECT * FROM daerah WHERE kota = '$kota' GROUP BY kecamatan ASC";
	$sql = mysqli_query($konek,$query)or die(mysqli_error());

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['kecamatan']; ?>"><?php echo $row['kecamatan']; ?> </option>
	<?php
	}
	?>	
?>