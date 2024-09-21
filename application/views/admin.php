<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Admin</h1>
    <h5>TABEL DATA SISWA</h5>
    <div class="tmbhsis">
    <a href="<?php echo base_url('tambah_siswa'); ?>">Tambah Data</a><br><br>
    </div>
    <table border="1" class="siswa">
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO. TELP</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php foreach ($siswa as $ssw) : ?>
        <tr>
            <td> <?= $ssw['nis'] ?> </td>
            <td> <?= $ssw['nama'] ?> </td>
            <td> <?= $ssw['alamat'] ?> </td>
            <td> <?= $ssw['no_telp'] ?> </td>
            <td> <a href="<?= base_url(); ?>admin/edit/<?= $ssw['nis']?>">edit</a> </td>
            <td> <a onclick="return confirm('Are u sure want to delete this?')" href="<?= base_url(); ?>admin/hapus/<?= $ssw['nis']?>">hapus</a> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>