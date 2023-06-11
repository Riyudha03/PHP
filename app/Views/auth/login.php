<!-- login.php -->
<head>
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>

<h1>Login</h1>

<?php if (session()->getFlashData('warning')): ?>
    <div class="warning"><?= session()->getFlashData('warning') ?></div>
<?php endif; ?>

<form action="/attempt-login" method="POST">
    <label>Username:</label>
    <input type="text" name="username">

    <label>Password:</label>
    <input type="password" name="password">

    <button type="submit">Login</button>
</form>