<?php
include "koneksi.php";
?>
<html>
<head>
<title>data peminjaman</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Hallo admin!!</a>
        <a class="navbar-brand ml-auto" href="index_admin.php">Home</a>
    </nav>
    <form action="" method="post" class="form-inline mt-5">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="cari" class="form-control" placeholder="Id peminjam">
        </div>
        <button type="submit" name="search" class="btn btn-primary mb-2">Cari</button>
    </form>
    <div class="container-fluid mt-5">
        <table class="table table-bordered table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id peminjam</th>
                    <th scope="col">Nama peminjam</th>
                    <th scope="col">Alamat peminjam</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal pinjam</th>
                    <th scope="col">Tanggal kembali</th>
                    <th scope="col">Denda</th>
                    <th scope="col">Status peminjaman</th>
                    <th scope="col">Status hapus</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php
            
                if (isset($_POST['search'])) {
                    $cari = $_POST['cari'];
                    $status = "Dikembalikan";
                    $query = mysqli_query($conn, "SELECT * FROM tabel_peminjaman WHERE id_peminjam = '$cari' AND status_peminjaman = '$status'");

                    
                    if (mysqli_num_rows($query) > 0) {
                    
                        while ($result = mysqli_fetch_assoc($query)) : 
                        echo("

                       <tr>
                        <td>".$result['id_peminjam']." </td>
                        <td>".$result['nama_peminjam']."</td>
                        <td>".$result['alamat_peminjam']."</td>
                        <td>".$result['judul_buku']."</td>
                        <td>".$result['tanggal_pinjam']."</td>
                        <td>".$result['tanggal_kembali']."</td>
                        <td>".$result['denda']."</td>
                        <td>".$result['status_peminjaman']."</td>
                            ");
                            ?>
                            <td>
                            <a href="hapus.php?id=<?= $result['id_peminjam'] ?>">Hapus??</a>
                            </td>
                                
                     <?php
                        endwhile;
                    }else { ?>
                        <td colspan="6">Data Tidak Ada Atau Buku Belum Dikembalikan</td>
            <?php
                    }
                }
            ?>
                </tbody>
            </table>
        </div>
</body>
</html>
