<?php 
	$id = $_GET["id"];
	$hapus = $mysqli->query("SELECT * FROM tb_buku WHERE id ='$_GET[id]'");
	// memilih gambar untuk dihapus
	$namaGambar = mysqli_fetch_array($hapus);
	// nama field gambar
	$lokasi = $namaGambar["gambar"];
	// alamat tempat gambar
	$hapusGambar = "images/buku/$lokasi";
	// untuk menghapus gambar dari folder
	unlink($hapusGambar);
	$mysqli->query("DELETE FROM tb_buku WHERE id ='$_GET[id]'");
	header('location:?page=buku');

 ?>
 