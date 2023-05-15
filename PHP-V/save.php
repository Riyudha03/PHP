<?php
// save.php
require 'Model.php';

$table = $_GET['table'];

// Sanitize and validate form input data
$data = array();

switch ($table) {
    case 'member':
        $data = array(
            'nama_member' => filter_input(INPUT_POST, 'nama_member', FILTER_SANITIZE_STRING),
            'nomor_member' => filter_input(INPUT_POST, 'nomor_member', FILTER_SANITIZE_STRING),
            'alamat' => filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING),
            'tgl_mendaftar' => filter_input(INPUT_POST, 'tgl_mendaftar', FILTER_SANITIZE_STRING),
            'tgl_terakhir_bayar' => filter_input(INPUT_POST, 'tgl_terakhir_bayar', FILTER_SANITIZE_STRING),
        );
        break;
    case 'buku':
        $data = array(
            'judul_buku' => filter_input(INPUT_POST, 'judul_buku', FILTER_SANITIZE_STRING),
            'penulis' => filter_input(INPUT_POST, 'penulis', FILTER_SANITIZE_STRING),
            'penerbit' => filter_input(INPUT_POST, 'penerbit', FILTER_SANITIZE_STRING),
            'tahun_terbit' => filter_input(INPUT_POST, 'tahun_terbit', FILTER_SANITIZE_STRING),
        );
        break;
    case 'peminjaman':
        $data = array(
            'tgl_pinjam' => filter_input(INPUT_POST, 'tgl_pinjam', FILTER_SANITIZE_STRING),
            'tgl_kembali' => filter_input(INPUT_POST, 'tgl_kembali', FILTER_SANITIZE_STRING),
        );
        break;
    default:
        echo "Invalid table name";
        exit;
}

// Validate the data (Example: checking if required fields are not empty)
$requiredFields = array_keys($data); // All fields are required
$isValid = true;

foreach ($requiredFields as $field) {
    if (empty($data[$field])) {
        $isValid = false;
        break;
    }
}

if (!$isValid) {
    echo "Please fill in all required fields.";
    exit;
}

$id = isset($_POST['id']) ? $_POST['id'] : '';

// Perform database operation
if (!empty($id)) {
    $result = updateData($table, $data, $id);
    if ($result) {
        echo "Data updated successfully";
    } else {
        echo "Failed to update data";
    }
} else {
    $result = insertData($table, $data);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Failed to insert data";
    }
}

// Redirect back to the respective page
switch ($table) {
    case 'member':
        header('Location: Member.php');
        break;
    case 'buku':
        header('Location: Buku.php');
        break;
    case 'peminjaman':
        header('Location: Peminjaman.php');
        break;
    default:
        break;
}
?>