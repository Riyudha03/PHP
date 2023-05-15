<?php
// Peminjaman.php
require 'Model.php';

$peminjaman = getData('peminjaman');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loan Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons a {
            display: inline-block;
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-decoration: none;
            color: #333;
            background-color: #f9f9f9;
            font-size: 14px;
            margin-right: 5px;
        }

        .action-buttons a:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <h1>Loan Data</h1>
    <div class="action-buttons">
        <a href="FormPeminjaman.php">Add New Loan</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Loan Date</th>
            <th>Return Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($peminjaman as $loan) : ?>
            <tr>
                <td><?php echo $loan['id_peminjaman']; ?></td>
                <td><?php echo $loan['tgl_pinjam']; ?></td>
                <td><?php echo $loan['tgl_kembali']; ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?php echo $loan['id_peminjaman']; ?>">Edit</a>
                    <a href="delete.php?table=peminjaman&id=<?php echo $loan['id_peminjaman']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>