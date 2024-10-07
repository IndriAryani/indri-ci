<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Alamat</title>
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
    padding: 6px px;
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
    <h1>EDIT DATA ALAMAT</h1>
    <div class="tambah">
        <form action="<?= base_url()?>alamat/update" method="post">
            
            <input type="hidden" name="id" value="<?= $edit['id'] ?>"><br><br>
            <input placeholder="Alamat" type="text" name="alamat" value="<?= $edit['alamat'] ?>"><br><br>
            
            <input placeholder="Kode Pos" type="text" name="kode_pos" value="<?= $edit['kode_pos'] ?>"><br><br>

            <input type="submit" value="Edit">
        </form>
    </div>
</body>
</html>