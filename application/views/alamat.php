<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Alamat</h1>
    <h5>TABEL DATA ALAMAT</h5>
    <div class="tmbhsis">
    <a href="<?php echo base_url('alamat/tambah_alamat'); ?>">Tambah Alamat</a><br><br>
    </div>
    <table border="1" class="siswa">
        <tr>
            <th>ID</th>
            <th>ALAMAT</th>
            <th>KODE POS</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($alamat as $al) : ?>
        <tr>
            <td> <?= $al['id'] ?> </td>
            <td> <?= $al['alamat'] ?> </td>
            <td> <?= $al['kode_pos'] ?> </td>

            <td class="t-edit"> <a href="<?= base_url(); ?>alamat/edit/<?= $al['id']?>">edit</a> </td>
            <td class="t-hapus"> <a onclick="return confirm('Are u sure want to delete this?')" href="<?= base_url(); ?>alamat/hapus/<?= $al['id']?>">hapus</a> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>