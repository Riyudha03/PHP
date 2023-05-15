<?php
// Member.php
require 'Model.php';

$members = getData('member');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member Data</title>
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
    <h1>Member Data</h1>
    <div class="action-buttons">
        <a href="FormMember.php">Add New Member</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Member Number</th>
            <th>Address</th>
            <th>Registration Date</th>
            <th>Last Payment Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($members as $member) : ?>
            <tr>
                <td><?php echo $member['id_member']; ?></td>
                <td><?php echo $member['nama_member']; ?></td>
                <td><?php echo $member['nomor_member']; ?></td>
                <td><?php echo $member['alamat']; ?></td>
                <td><?php echo $member['tgl_mendaftar']; ?></td>
                <td><?php echo $member['tgl_terakhir_bayar']; ?></td>
                <td>
                    <a href="FormMember.php?id=<?php echo $member['id_member']; ?>">Edit</a>
                    <a href="delete.php?table=member&id=<?php echo $member['id_member']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
