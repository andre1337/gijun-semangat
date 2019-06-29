<?php

include 'koneksi.php';

$username 	= mysqli_real_escape_string($konek, $_POST['username']);
$password 	= mysqli_real_escape_string($konek, md5($_POST['password']));

$sql 	= "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query 	= mysqli_query($konek,$sql) or die (mysqli_error($konek));
$count 	= mysqli_num_rows($query);
$data 	= mysqli_fetch_array($query);

$user 	= $data['username'];
$pass 	= $data['password'];
$level	= $data['level'];
$ids 	= $data['id_user'];

if ($count > 0) {

	session_start();
	//jika login berhasil
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $pass;
	$_SESSION['level']	  = $level;
	$_SESSION['id_user']  = $ids;
	$_SESSION['id']  	  = session_id();

	if($data['level']=='Staff'){
		echo "<br><br><br><br><strong><center>HELLO !! <br>Anda Login Sebagai Staff";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php">';
		// echo 'Berhasil login sebagai admin';
	}

	elseif($data['level']=='User'){
		echo "<br><br><br><br><strong><center>HELLO !! <br>Anda Berhasil Login  Sebagai User";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=index">';
	}

	elseif ($data['level']=='Admin'){
		echo "<br><br><br><br><strong><center>HELLO !! <br>Anda Login Sebagai Admin";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../staff/index.php">';
		// echo 'Berhasil login sebagai admin';
	} 

} 

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}
?>
