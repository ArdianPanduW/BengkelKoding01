<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Obat</title>
</head>
<body>
  <h1>Edit Obat</h1>

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
$id_obat = $_GET['id_obat'];

$data = $obat->detail($id_obat);

if (isset($_POST['nama_obat']) && isset($_POST['jenis_obat']) && isset($_POST['harga'])) {
  $nama_obat = $_POST['nama_obat'];
  $jenis_obat = $_POST['jenis_obat'];
  $harga = $_POST['harga'];

  $hasil = $obat->edit($id_obat, $nama_obat, $jenis_obat, $harga);

  if ($hasil) {
    header("Location: index.php");
  } else {
    echo "Edit data gagal.";
  }
}
?>


  <form action="edit-obat.php" method="post">
    <input type="hidden" name="id_obat" value="<?php echo $data['id_obat']; ?>">
    <input type="text" name="nama_obat" value="<?php echo $data['nama_obat']; ?>" placeholder="Nama Obat">
    <input type="text" name="jenis_obat" value="<?php echo $data['jenis_obat']; ?>" placeholder="Jenis Obat">
    <input type="number" name="harga" value="<?php echo $data['harga']; ?>" placeholder="Harga">
    <input type="submit" value="Edit">
  </form>
  
</body>
</html>

