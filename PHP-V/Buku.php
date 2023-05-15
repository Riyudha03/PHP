<?php
// Buku.php
require 'Model.php';

$buku = getData('buku');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Data</title>
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
    <h1>Book Data</h1>
    <div class="action-buttons">
        <a href="FormBuku.php">Add New Book</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publication Year</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($buku as $book) : ?>
            <tr>
                <td><?php echo $book['id_buku']; ?></td>
                <td><?php echo $book['judul_buku']; ?></td>
                <td><?php echo $book['penulis']; ?></td>
                <td><?php echo $book['penerbit']; ?></td>
                <td><?php echo $book['tahun_terbit']; ?></td>
                <td>
                    <a href="FormBuku.php?id=<?php echo $book['id_buku']; ?>">Edit</a>
                    <a href="delete.php?table=buku&id=<?php echo $book['id_buku']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>