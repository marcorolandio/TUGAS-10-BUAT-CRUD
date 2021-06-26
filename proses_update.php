<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $harga_produk = $_POST['harga_produk'];
  $kemasan_produk = $_POST['kemasan_produk'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE produk SET nama_produk = '$nama_produk', harga_produk = '$harga_produk', kemasan_produk = '$kemasan_produk' WHERE id_produk = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}