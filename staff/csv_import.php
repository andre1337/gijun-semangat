<?php 
// menghubungkan dengan koneksi
include '../config/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filekeluhan']['name']) ;
move_uploaded_file($_FILES['filekeluhan']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filekeluhan']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filekeluhan']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$masalah     = $data->val($i, 1);
	$penanganan  = $data->val($i, 2);
	$perangkat   = $data->val($i, 3);

	if($masalah != "" && $penanganan != "" && $perangkat != ""){
		// input data ke database (table tbl_keluhan)
		mysqli_query($koneksi,"INSERT into tbl_keluhan values('','$masalah','$penanganan','$perangkat')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filekeluhan']['name']);

// alihkan halaman ke index.php
header("location:index.php?halaman=$berhasil");
?>