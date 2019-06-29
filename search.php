<?php

// header("Content-Type: application/json; charset=UTF-8");

// Database configuration
include 'config/koneksi.php';

// Connect with the database
// $db = new mysqli($id_keluhan, $keluhan, $penanganan, $perangkat);

// Get search
$keluhan = $_GET['query'];

// Get matched data from skills table
$query = mysqli_query("SELECT * FROM tbl_keluhan WHERE keluhan LIKE '%".$keluhan."%' ORDER BY keluhan ASC");
$result=mysqli_fetch_array($konek,$query);

// Fetch all
// $fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);


// // Return results as json encoded array
// echo json_encode($Datakeluhan);

foreach($result as $data) {
    $output['suggestions'][] = [
        'value' 	=> $data['id_keluhan'],
        'keluhan'  	=> $data['keluhan']
    ];
}

if (! empty($output)) {
    // Encode ke format JSON.
    echo json_encode($output);
}

?>