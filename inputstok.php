<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $no_rak = $_POST['no_rak'];
    $jumlah = $_POST['jumlah'];
    
    
    $query = mysqli_query($conn,"INSERT INTO stok_buku(judul_buku,no_rak,jumlah) VALUES ('$judul','$no_rak','$jumlah')");
    if($query){
        header("location:inputstok.php?=berhasil");

    }else{
        echo mysqli_error($conn);
    }
}
?>
<html>
<head>
<title>input stok</title>
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
        <label> judul buku:</label>
        <select name="judul" class="form-control" required>
            <option value="">judul buku</option>
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
        <label> No rak:</label>
            <input type="text" name="no_rak" class="form-control" placeholder="B-002" required>
        </div>
        
        <div class="form-group">
        <label> Jumlah:</label>
            <input type="text" name="jumlah" class="form-control" placeholder="jumlah" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="tn btn-primary btn-block"> Input</button>
        </div>
    </form>
</div>
</body>
</html>
