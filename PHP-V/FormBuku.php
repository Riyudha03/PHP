<?php
// Add this section at the top of the file, before any HTML
session_start();
?>

<?php
// FormBuku.php
require 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$book = array();

if (!empty($id)) {
    $book = getDataById('buku', $id);
}
?>

<?php
// Add this section after the form processing code, before the HTML
if (isset($_SESSION['success']) && $_SESSION['success'] === true) {
    echo '<p>Data submitted successfully!</p>';
    unset($_SESSION['success']); // Clear the session variable
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Form</title>
</head>
<body>
    <h1>Book Form</h1>
    <form method="post" action="save.php?table=buku">
        <input type="hidden" name="id" value="<?php echo isset($book['id_buku']) ? $book['id_buku'] : ''; ?>">
        <label>Title:</label>
        <input type="text" name="judul_buku" value="<?php echo isset($book['judul_buku']) ? $book['judul_buku'] : ''; ?>"><br><br>
        <label>Author:</label>
        <input type="text" name="penulis" value="<?php echo isset($book['penulis']) ? $book['penulis'] : ''; ?>"><br><br>
        <label>Publisher:</label>
        <input type="text" name="penerbit" value="<?php echo isset($book['penerbit']) ? $book['penerbit'] : ''; ?>"><br><br>
        <label>Publication Year:</label>
        <input type="int" name="tahun_terbit" value="<?php echo isset($book['tahun_terbit']) ? $book['tahun_terbit'] : ''; ?>"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>