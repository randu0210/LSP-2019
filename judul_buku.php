<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $kd_buku = $_POST['kd_buku'];
    $jd_buku = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $Kategori = $_POST['kategori'];
    
    $query = mysqli_query($conn,"INSERT INTO daftar_buku(kode_buku,judul_buku,pengarang,kategori) VALUES ('$kd_buku','$jd_buku','$pengarang','$Kategori')");
    if($query){
        header("location:judul_buku.php?=berhasil");

    }else{
        echo mysqli_error($conn);
    }
}
$tabel = mysqli_query($conn,"SELECT * FROM daftar_buku ORDER BY kode_buku ASC");
    $no=1;
?>
<html>
<head>
<title></title>
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
        <label> kode Buku:</label>
            <input type="text" name="kd_buku" class="form-control" placeholder="BK_001" required>
        </div>
        <div class="form-group">
        <label> Judul Buku:</label>
            <input type="text" name="judul" class="form-control" placeholder="alamat" required>
        </div>
        
        <div class="form-group">
        <label> Pengarang:</label>
            <input type="text" name="pengarang" class="form-control" placeholder="kategori" required>
        </div>
        <div class="form-group">
        <label> kategori:</label>
            <input type="text" name="kategori" class="form-control" placeholder="kategori" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="tn btn-primary btn-block"> Input</button>
        </div>
        <div class="container-fluid mt-5">
        <table class="table table-bordered table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($tabel as $row){
               echo "<tr>
            <td>".$row['kode_buku']."</td>
            <td>".$row['judul_buku']."</td>
            <td>".$row['pengarang']."</td>
            <td>".$row['kategori']."</td>
           
			
              </tr>";
        $no++;
    }
    ?>
            </tbody>
        </table>
    </div>
</form>
</div>
</body>
</html>