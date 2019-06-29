<?php
	$nama[0] = "Budi";
	$nama[1] = "Nai";
	$nama[2] = "Monic"; 

	echo $nama[0] . " dan " . $nama[2] . " adalah sahabat.";
?>

<br>
 <?php
 $karyawan=array("Agus"=>"Jepara","Budi"=>"Jakarta","Candra"=>"Semarang");   
 foreach($karyawan as $x=>$x_value) {  
  echo "Nama = " . $x . ", Alamat = " . $x_value;  
  echo "<br>";  
 }  
 ?>

<br>
<?php
	$personil=array("One Ok Rock" => array("Taka","Toru","Ryota","Tomoya"), "Linkin Park" => array("Chester Bennington","Mike Shinoda","Joe Hahn","Brad Delson","Rob Bourdon","Dave Farrell"), "Paramore" => array("Hayley Williams","Taylor York","Jeremy Davis"));

	echo "Vocalis One Ok Rock yaitu: ".$personil["One Ok Rock"][0]."<br/>";
	echo "Vocalis Linkin Park yaitu: ".$personil["Linkin Park"][0]."<br/>";
	echo "Vocalis Paramore yaitu: ".$personil["Paramore"][0]."<br/>";
?>

<br>
<?php
	$personil["One Ok Rock"]=array("Taka","Toru","Ryota","Tomoya");
	$personil["Linkin Park"]=array("Chester Bennington","Mike Shinoda","Joe Hahn","Brad Delson","Rob Bourdon","Dave Farrell");
	$personil["Paramore"]=array("Hayley Williams","Taylor York","Jeremy Davis");

	echo "Vocalis One Ok Rock yaitu : ".$personil["One Ok Rock"][0]."<br/>";
	echo "Vocalis Linkin Park yaitu : ".$personil["Linkin Park"][0]."<br/>";
	echo "Vocalis Paramore yaitu : ".$personil["Paramore"][0];
?>

