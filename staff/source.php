<?php
//connect ke database
  mysql_connect("localhost","root","");
  mysql_select_db("sjm");
//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));
  
$qstring = "SELECT * FROM tbl_keluhan WHERE keluhan LIKE '".$term."%'";
//query database untuk mengecek tabel anime
$result = mysql_query($qstring);
  
while ($row = mysql_fetch_array($result))
{
    $row['value']=htmlentities(stripslashes($row['keluhan']));
    $row['id_keluhan']=(int)$row['id_keluhan'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>