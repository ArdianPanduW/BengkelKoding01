<?php
class Obat {

  private $db;

  public function __construct() {
    $this->db = new mysqli("localhost", "root", "", "poliklinik");
  }

  // Fungsi tambah obat

  public function tambah($nama_obat, $jenis_obat, $harga) {
    $query = "INSERT INTO obat (nama_obat, jenis_obat, harga) VALUES ('$nama_obat', '$jenis_obat', '$harga')";
    $result = $this->db->query($query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  // Fungsi edit obat

  public function edit($id_obat, $nama_obat, $jenis_obat, $harga) {
    $query = "UPDATE obat SET nama_obat='$nama_obat', jenis_obat='$jenis_obat', harga='$harga' WHERE id_obat='$id_obat'";
    $result = $this->db->query($query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  // Fungsi hapus obat

  public function hapus($id_obat) {
    $query = "DELETE FROM obat WHERE id_obat='$id_obat'";
    $result = $this->db->query($query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }
}
