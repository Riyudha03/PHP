<?php
// Add this section at the top of the file, before any HTML
session_start();
?>

<?php
// FormPeminjaman.php
require 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$loan = array();

if (!empty($id)) {
    $loan = getDataById('peminjaman', $id);
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
    <title>Loan Form</title>
</head>
<body>
    <h1>Loan Form</h1>
    <form method="post" action="save.php?table=peminjaman">
        <input type="hidden" name="id" value="<?php echo isset($loan['id_peminjaman']) ? $loan['id_peminjaman'] : ''; ?>">
        <label>Loan Date:</label>
        <input type="date" name="tgl_pinjam" value="<?php echo isset($loan['tgl_pinjam']) ? $loan['tgl_pinjam'] : ''; ?>"><br><br>
        <label>Return Date:</label>
        <input type="date" name="tgl_kembali" value="<?php echo isset($loan['tgl_kembali']) ? $loan['tgl_kembali'] : ''; ?>"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>