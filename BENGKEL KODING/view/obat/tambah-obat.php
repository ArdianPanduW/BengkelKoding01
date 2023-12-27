<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Obat</title>
</head>
<body>
  <h1>Tambah Obat</h1>

  <?php
require_once "model/obat.php";

$obat = new Obat();
// Validasi data
if (empty($_POST['nama_obat'])) {
    echo "Nama obat tidak boleh kosong.";
    return;
  }
  
  // Validasi jenis obat
  if (empty($_POST['jenis_obat'])) {
    echo "Jenis obat tidak boleh kosong.";
    return;
  }
  
  // Validasi harga
  if (empty($_POST['harga'])) {
    echo "Harga tidak boleh kosong.";
    return;
  }
  
  // Simpan data obat
  $obat->tambah($_POST['nama_obat'], $_POST['jenis_obat'], $_POST['harga']);
  
  header("Location: index.php");

if (isset($_POST['nama_obat']) && isset($_POST['jenis_obat']) && isset($_POST['harga'])) {
  $nama_obat = $_POST['nama_obat'];
  $jenis_obat = $_POST['jenis_obat'];
  $harga = $_POST['harga'];

  $hasil = $obat->tambah($nama_obat, $jenis_obat, $harga);

  if ($hasil) {
    header("Location: index.php");
  } else {
    echo "Tambah data gagal.";
  }
}
?>

  <form action="tambah-obat.php" method="post">
    <input type="text" name="nama_obat" placeholder="Nama Obat">
    <input type="text" name="jenis_obat" placeholder="Jenis Obat">
    <input type="number" name="harga" placeholder="Harga">
    <input type="submit" value="Tambah">
  </form>
</body>
</html>
