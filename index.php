<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query($conn,"select * from tabel_user where username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0){
	    $data = mysqli_fetch_assoc($login);

	if($data['status']=="administrator"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "administrator";
		header("location:index_admin.php");
	}else if($data['status']=="pustakawan"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "pustakawan";
		header("location:index_pustakawan.php");
    }
    else{
	    header("location:index.php?pesan=gagal");
        }
    }
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<div class="container mt-3">
    <h1>login yuk!</h1>
    <form action="" method="post">
        <div class="form-group">
        <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="username" required>
        </div>
        <br>
        <div class="form-group">
        <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="password" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="submit" class="tn btn-primary btn-block"> Login</button>
        </div>
</body>
</html>