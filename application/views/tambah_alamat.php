<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alamat</title>
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
    <h1>TAMBAH DATA ALAMAT</h1>
    <br><br>
    <div class="tambah">
        <form action="<?= base_url() ?>alamat/simpan" method="post">
            <input placeholder="Masukkan Alamat" type="text" name="alamat"><br><br>
            <input placeholder="Masukkan Kode Pos" type="text" name="kode_pos"><br><br>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>