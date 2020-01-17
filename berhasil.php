<?php
$id_peminjam = $_GET['n'];

?>
<html>
<head>
<title>berhasil</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<head>
<body>
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Hallo admin!!</a>
        <a class="navbar-brand ml-auto" href="index_admin.php">Home</a>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Berhasil</h5>
            <p class="card-text">Peminjaman berhasil<strong><?= $id_peminjam ?> Infokan kepada peminjam tentang ID_peminjam!!</p>
            <a href="index_admin.php" class="btn btn-primary btn-sm">Kembali ke home</a>
            </div>
        </div>
    </div>
</body>
</html>