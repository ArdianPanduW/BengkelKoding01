<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Obat</title>
</head>
<body>
  <h1>Obat</h1>

  <a href="tambah-obat.php">Tambah Obat</a>
  <a href="edit-obat.php">Edit Obat</a>
  <a href="hapus-obat.php">Hapus Obat</a>

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
      <?php
      require_once "model/obat.php";

      $obat = new Obat();
      $data = $obat->tampilSemua();

      foreach ($data as $row) {
      ?>
        <tr>
          <td><?php echo $row['id_obat']; ?></td>
          <td><?php echo $row['nama_obat']; ?></td>
          <td><?php echo $row['jenis_obat']; ?></td>
          <td><?php echo $row['harga']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
