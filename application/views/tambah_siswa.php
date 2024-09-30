<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<style>
    h1{
    color: rgb(214, 148, 184);
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align: center;
}
.tambah input[type=text]{
    width: 35%;
    color: white;
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: rgb(214, 148, 184);
    cursor: pointer;
}
.tambah select{
    width: 35%;
    color: white;
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: rgb(214, 148, 184);
    cursor: pointer;
}
.tambah input[type=submit]{
    padding: 6px 7px;
    color: white;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: rgb(240, 191, 217);
    cursor: pointer;
}
</style>
<body>
    <h1>TAMBAH DATA SISWA</h1>
    <div class="tambah">
        <form action="tambah_siswa/tambah" method="post">
            <input placeholder="Masukkan Nama" type="text" name="nama"><br><br>
           <select name="alamat">
                <option value="">pilih alamat</option>
                <?php foreach ($alamat as $al) : ?>
                    <option value="<?= $al['id']?>"><?= $al['alamat']?></option>
                <?php endforeach; ?>
           </select><br><br>
            <input placeholder="Masukkan No.Telp" type="text" name="no_telp"><br><br>

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>