<?php

	include "koneksi.php";

	$prov = $_GET["provinsi"];

	$query = "SELECT * FROM daerah WHERE provinsi = '$prov' GROUP BY kota";
	$sql = mysqli_query($konek, $query)or die(mysqli_error($konek));

	while ($row = mysqli_fetch_array($sql)) { ?>
		<option value="<?php echo $row['kota']; ?>"><?php echo $row['kota'];?></option>
	<?php
	}
	?>
?>