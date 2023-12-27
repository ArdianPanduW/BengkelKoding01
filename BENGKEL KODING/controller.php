<?php
require_once "koneksi.php";

function login($username, $password) {
  global $koneksi;

  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) == 1) {
    $admin = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['id_admin'] = $admin['id_admin'];
    $_SESSION['username'] = $admin['username'];
    return true;
  } else {
    return false;
  }
}

function loginDokter($username, $password) {
  global $koneksi;

  $query = "SELECT * FROM dokter WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) == 1) {
    $dokter = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['id_dokter'] = $dokter['id_dokter'];
    $_SESSION['username'] = $dokter['username'];
    return true;
  } else {
    return false;
  }
}

function logout() {
