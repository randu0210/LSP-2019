<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from tabel_peminjaman where id_peminjaman='$id'";
mysqli_query($conn, $query);
header("location:data_peminjam.php?=berhasil");
?>