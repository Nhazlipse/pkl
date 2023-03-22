<!-- session agar (bukan admin) tidak dapat mengakses file admin -->
<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
require_once '../../Database/koneksi.php';

use database\koneksi;


// hapus data pengungjung
$id = $_GET['id_vendor'];
$sql = "DELETE FROM t_vendor WHERE id_vendor = $id";
$koneksi = new koneksi();
$koneksi->query($sql);

if ($koneksi) {
    header("location:buku.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='buku.php';</script>";
}