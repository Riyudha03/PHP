<?php
// Add this section at the top of the file, before any HTML
session_start();
?>

<?php
// FormMember.php
require 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$member = array();

if (!empty($id)) {
    $member = getDataById('member', $id);
}

function getDataById($table, $id)
{
    $conn = connect();

    $sql = "SELECT * FROM $table WHERE id_$table = $id";
    $result = mysqli_query($conn, $sql);
    $data = array();

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    }

    mysqli_close($conn);

    return $data;
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
    <title>Member Form</title>
</head>
<body>
    <h1>Member Form</h1>
    <form method="post" action="save.php?table=member">
        <input type="hidden" name="id" value="<?php echo isset($member['id_member']) ? $member['id_member'] : ''; ?>">
        <label>Name:</label>
        <input type="text" name="nama_member" value="<?php echo isset($member['nama_member']) ? $member['nama_member'] : ''; ?>"><br><br>
        <label>Member Number:</label>
        <input type="text" name="nomor_member" value="<?php echo isset($member['nomor_member']) ? $member['nomor_member'] : ''; ?>"><br><br>
        <label>Address:</label>
        <input type="text" name="alamat" value="<?php echo isset($member['alamat']) ? $member['alamat'] : ''; ?>"><br><br>
        <label>Registration Date:</label>
        <input type="date" name="tgl_mendaftar" value="<?php echo isset($member['tgl_mendaftar']) ? $member['tgl_mendaftar'] : ''; ?>"><br><br>
        <label>Last Payment Date:</label>
        <input type="date" name="tgl_terakhir_bayar" value="<?php echo isset($member['tgl_terakhir_bayar']) ? $member['tgl_terakhir_bayar'] : ''; ?>"><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>