<h1>Halaman Login</h1>
<br>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url() ?>login/verifikasi" method="post">
        <input type="text" placeholder="Masukkan Username" name="username"><br><br>
        <input type="password" placeholder="Masukkan Password" name="password"><br><br>

        <input type="submit" value="LOGIN">
    </form>
<p>Belum punya akun?<a href="<?= base_url() ?>daftar">Daftar</a></p>