<?php
require_once 'koneksi.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");
  foreach ($q as $dt) :
  ?>
  <h1>CRUD Tugas 10 (septian_saputra_311810265)</h1>
  <h2>Halaman Ubah Data</h2>

  <form action="proses_update.php" method="post">
    <input type="hidden" name="id_produk" value="<?= $dt['id_produk'] ?>">
    <input type="text" name="nama_produk" value="<?= $dt['nama_produk'] ?>">
    <input type="number" name="harga_produk" value="<?= $dt['harga_produk'] ?>">
    <input type="text" name="kemasan_produk" value="<?= $dt['kemasan_produk'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}