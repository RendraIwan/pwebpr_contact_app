<?php
$koneksi = mysqli_connect('localhost','root','','pweb_database');

if (isset($_POST['simpandata'])) {
    $id_user = $_POST['nomorid'];
    $no_Hp = $_POST['numberphone'];
    $owner = $_POST['nama'];
    $Alamat = $_POST['addres'];

    $query = mysqli_query($koneksi, "insert into beranda (nomorid, numberphone, nama, addres) values ('$id_user','$no_hp','$owner', '$Alamat')");

    if($query){
        echo 'berhasil';
    } else{
        echo 'gagal';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 50px;">
  <h2>Tambah Data</h2>
  <form method="post">
  <div class="form-group">
   <label for="nomorid">id_user</label>
   <input type="text" class="form-control" id="nomorid" placeholder="Masukkan no id" name="nomorid">
 </div>    
    <div class="form-group">
      <label for="numberphone">no_Hp</label>
      <input type="number" class="form-control" id="numberphone" placeholder="Masukkan Nomor Hp" name="numberphone">
    </div>    
    <div class="form-group">
      <label for="nama">owner</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="addres">Alamat</label>
      <input type="text" class="form-control" id="addres" placeholder="Masukkan Alamat" name="addres">
    </div>

    <button type="submit" name="simpandata" class="btn btn-primary">Tambah</button>
  </form>
</div>

</body>
</html>