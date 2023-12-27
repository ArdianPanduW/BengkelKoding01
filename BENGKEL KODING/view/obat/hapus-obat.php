<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hapus Obat</title>
</head>
<body>
  <h1>Hapus Obat</h1>

  <?php
require_once "model/obat.php";

$obat = new Obat();
$id_obat = $_GET['id_obat'];

$hasil = $obat->hapus($id_obat);

if ($hasil) {
  header("Location: index.php");
} else {
  echo "Hapus data gagal.";
}
?>


  <a href="hapus-obat.php?id_obat=<?php echo $id_obat; ?>">Hapus</a>
</body>
</html>

