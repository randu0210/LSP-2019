<?php
include 'koneksi.php';
$id         = $_GET['id'];
$buku       = mysqli_query($conn, "select * from tabel_peminjaman where id_peminjam='$id'");
$row        = mysqli_fetch_array($buku);

$judul    = array($conn,"select judul_buku from tabel_peminjaman");
if (isset($_POST['oke'])){
$tanggal_p    = $_POST['tanggal_p'];
$tanggal_k    = $_POST['tanggal_k'];
$denda        = $_POST['denda'];
$status       = "Dikembalikan";



$query="UPDATE tabel_peminjaman SET tanggal_pinjam='$tanggal_p',tanggal_kembali='$tanggal_k',denda='$denda',status_peminjaman='$status' where id_peminjam='$id'";
mysqli_query($conn, $query);

?>
            <script>
                alert("berhasil!")
                window.location.href = 'pengembalian.php';
            </script>
<?php
    }else{
?>
          
<?php
    }
?>
<html>
    <head>
        <title>Kembalikan Buku</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Hallo admin!!</a>
        <a class="navbar-brand ml-auto" href="index_admin.php">Home</a>
    </nav>
    <div class="jumbotron">
        <h1 class="display-10 mb-4">Peraturan pengembalian<h1>
            <p>Jika pengembalian buku telat sehari akan dikenakan denda sebesar Rp 2000.
                Jika tidak ada denda ketik 0 pada kolom denda<hr>
    </div>
        <div class= "container mt-3">
        <form method="post" action="">
            <input type="hidden" value="<?php echo $row['id_peminjam'];?>" class = "form-control" name="id_peminjam">
            <table>
                <div class="form-group">
                <tr><td>Tanggal Peminjaman</td><td><input value="<?php echo $row['tanggal_pinjam'];?>" class ="form-control"type="text" name="tanggal_p"></td></tr>
                </div>
                <div class="form-group">
                <tr><td>Tanggal Kembali:</td><td><input type="text" value="<?php echo $row['tanggal_kembali'];?>" class="form-control" name="tanggal_k"></td></tr>
                </div>
                <div class ="form-group">
                <tr><td>Denda:</td><td><input type="text" value="<?php echo $row['denda'];?>" name="denda"></td></tr>
                </div>
                <div class="form-group">
                <tr><td><button type="submit" name="oke" class="btn btn-primary btn-block" value="simpan">Kembalikan</button>
                </div>       
            </table>
        </form>
    </div>
    </body>
</html>