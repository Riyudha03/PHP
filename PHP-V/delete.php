<?php
// delete.php
require 'Model.php';

$table = $_GET['table'];
$id = $_GET['id'];

$result = deleteData($table, $id);

if ($result) {
    echo "Data deleted successfully";
} else {
    echo "Failed to delete data";
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