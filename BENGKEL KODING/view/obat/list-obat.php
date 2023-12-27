<?php
require_once "model/obat.php";

$obat = new Obat();
// Form pencarian
<form action="list-obat.php" method="get">
  <input type="text" name="nama_obat" placeholder="Cari obat">
  <input type="submit" value="Cari">
</form>

// List obat
$data_obat = $obat->list();
// Link ekspor data
<a href="export-data-obat.php">Ekspor Data</a>

// Halaman ekspor data
<?php
require_once "model/obat.php";

$obat = new Obat();

$data_obat = $obat->list();

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=data-obat.csv");

echo implode(",", array_keys($data_obat[0])) . "\n";

foreach ($data_obat as $obat) {
  echo implode(",", $obat) . "\n";
}
?>
foreach ($data_obat as $obat) : ?>

<tr>
  <td><?php echo $obat['id_obat']; ?></td>
  <td><?php echo $obat['nama_obat']; ?></td>
  <td><?php echo $obat['jenis_obat']; ?></td>
  <td><?php echo $obat['harga']; ?></td>
</tr>

<?php endforeach; ?>
$data_obat = $obat->list();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Obat</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Jenis Obat</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_obat as $obat) : ?>
        <tr>
          <td><?php echo $obat['id_obat']; ?></td>
          <td><?php echo $obat['nama_obat']; ?></td>
          <td><?php echo $obat['jenis_obat']; ?></td>
          <td><?php echo $obat['harga']; ?></td>
          <td>
            <a href="tambah-obat.php">Tambah</a>
            <a href="edit-obat.php?id_obat=<?php echo $obat['id_obat']; ?>">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
