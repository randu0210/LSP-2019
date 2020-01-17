<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $id_peminjam = date("dhs").rand(11,99);
    $nama = $_POST['nama'];
    $alamat = $_POST["alamat"];
    $judul = $_POST['judul'];
    $tanggal_p = $_POST['tanggal_p'];
    $status = $_POST['status'];
    $denda = "";
    $tanggal_b = "";
    

    $query = mysqli_query($conn, "INSERT INTO tabel_peminjaman(id_peminjam,nama_peminjam,alamat_peminjam,judul_buku,tanggal_pinjam,tanggal_kembali,denda,status_peminjaman) VALUES('$id_peminjam','$nama','$alamat','$judul','$tanggal_p','$tanggal_b','$denda','$status')");
    if($query){
        header("location:berhasil.php?n='$id_peminjam'");
    }
    else{
        echo mysqli_error($conn);
    }


}
?>
<html>
<head>
<title>Dipinjam</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Hallo admin!!</a>
        <a class="navbar-brand ml-auto" href="index_admin.php">Home</a>
    </nav>
    <div class="container mt-3">
    <form action="" method="post">
        <div class="form-group">
        <label> Nama peminjam:</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" required>
        </div>
        <div class="form-group">
        <label> Alamat peminjam:</label>
            <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
        </div>
        <div class="form-group">
        <select name="judul" class="form-control" required>
            <option value="">Judul buku</option>
            <?php
            function call($conn){
                $query="SELECT * FROM daftar_buku";
                return mysqli_query($conn, $query);

            }
                $judul = call($conn);
            while ($d =  mysqli_fetch_assoc($judul)){
                echo("
                      <option value='".$d['judul_buku']."'>".$d['judul_buku']."</option>             
                ");
            }
        
            ?>
            </select>
        </div>
        <div class="form-group">
        <label>Tanggal peminjaman:</label>
            <textarea name="tanggal_p" cols="30" row="5" class="form-control" placeholder="02-oktober-2019"></textarea>
        </div>
        <div class="form-group">
        <label>status peminjaman:</label>
            <input type="radio"  name="status" value="Dipinjamkan">Dipinjamkan
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block"> Kirim</button>
        </div>
    </form>
    </div>
</body>
</html>