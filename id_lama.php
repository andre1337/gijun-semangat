<?php
// Set header type konten.
header("Content-Type: application/json; charset=UTF-8");

// Deklarasi variable untuk koneksi ke database.
$host     = "localhost";// Server database
$username = "root";     // Username database
$password = "";     // Password database
$database = "sjm";     // Nama database

// Koneksi ke database.
$conn = new mysqli($host, $username, $password, $database);

// Deklarasi variable keyword buah.
$id_lama = $_GET["query"];

// Query ke database.
$query  = $conn->query("SELECT * FROM tbl_jenis WHERE id_lama LIKE '%$id_lama%' ORDER BY id_lama DESC");

// Fetch hasil query.
$result = $query->fetch_All(MYSQLI_ASSOC);

// Cek apakah ada yang cocok atau tidak.
if (count($result) > 0) {
    foreach($result as $data) {
        $output['suggestions'][] = array(
            'value' => $data['id_lama'],
            'id_lama'  => $data['id_lama'],
            'jenis'  => $data['jenis'],
            'user'  => $data['user'],
            'lokasi'  => $data['lokasi']
        );
    }

    // Encode ke JSON.
    echo json_encode($output);

// Jika tidak ada yang cocok.
} else {
    $output['suggestions'][] = array(
        'value' => '',
        'id_lama'  => '',
        'jenis'  => '',
        'user'  => '',
        'lokasi'  => ''
    );

    // Encode ke JSON.
    echo json_encode($output);
}
