<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  // $id_produk = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $harga_produk = $_POST['harga_produk'];
  $kemasan_produk = $_POST['kemasan_produk'];

  // id_produk bernilai '' karena kita set auto increment;
  $query = "INSERT INTO produk (nama_produk,harga_produk,kemasan_produk) VALUES ( '$nama_produk', '$harga_produk', '$kemasan_produk')";
  $q = $conn->query($query);
  
  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); 
    window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan');
    window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}