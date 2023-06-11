<!-- create.php -->
<head>
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>

<h1>Tambah Buku</h1>

<?php if (session()->getFlashData('errors')): ?>
    <div class="errors">
        <?php foreach (session()->getFlashData('errors') as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="/buku/store" method="POST">
    <label>Judul:</label>
    <input type="text" name="judul" value="<?= old('judul') ?>">

    <label>Penulis:</label>
    <input type="text" name="penulis" value="<?= old('penulis') ?>">

    <label>Penerbit:</label>
    <input type="text" name="penerbit" value="<?= old('penerbit') ?>">

    <label>Tahun Terbit:</label>
    <input type="text" name="tahun_terbit" value="<?= old('tahun_terbit') ?>">

    <button type="submit">Simpan</button>
</form>
