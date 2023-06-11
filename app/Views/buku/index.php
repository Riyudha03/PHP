<!-- index.php -->
<head>
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>

<h1>Daftar Buku</h1>

<a href="/buku/create">Tambah Buku</a>

<?php if (session()->getFlashData('success')): ?>
    <div class="success"><?= session()->getFlashData('success') ?></div>
<?php endif; ?>

<table>
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($buku as $b): ?>
        <tr>
            <td><?= $b['judul'] ?></td>
            <td><?= $b['penulis'] ?></td>
            <td><?= $b['penerbit'] ?></td>
            <td><?= $b['tahun_terbit'] ?></td>
            <td>
                <a href="/buku/delete/<?= $b['id'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>