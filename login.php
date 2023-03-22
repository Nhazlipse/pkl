<?php
//panggil koneksi
require_once './Database/koneksi.php';

use Database\koneksi;

$koneksi = new koneksi();


//deklarasikan user dan pass
$password = md5($_POST['password']);
$username = $_POST['username'];


$query = "SELECT * FROM t_user WHERE username='$username' and  password = '$password'";
$login = $koneksi->query($query);
$data = mysqli_fetch_array($login);


// jika tidak di temukan user/pass tuser
if ($data) {
    session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header("location: home.php");
} else {
    echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='../index.php';</script>";
}