<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    
    
    $query = mysqli_query($conn,"INSERT INTO tabel_user(username,password,status) VALUES ('$user','$password','$status')");
    if($query){
        header("location:inputpusta.php?=berhasil");

    }else{
        echo mysqli_error($conn);
    }
}
?>
<html>
<head>
<title>Input pustakawan</title>
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
        <label> Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
        <label> Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <select name="status" class="form-control" required>
                <option value = "">Hak akses</option>
                <option value="pustakawan">Pustakawan</option>
                <option value="administrator">Administrator</option>
            </select><br>
            <div class="form-group">
            <button type="submit" name="submit" class="tn btn-primary btn-block">Daftar</button>
        </div>
    </form>
 </div>
</body>
</html>