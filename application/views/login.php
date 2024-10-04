<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Halaman Login</h1>
<br><br>
<div class="hl">
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url() ?>login/verifikasi" method="post">
        <input type="text" placeholder="Masukkan Username" name="username"><br><br>
        <input type="password" placeholder="Masukkan Password" name="password"><br><br>

        <input type="submit" value="LOGIN">
    </form>
</div>
<p class="dftr">Belum punya akun?<a class="tdftr" href="<?= base_url() ?>daftar">Daftar</a>
</p>
</body>
</html>
