<?php
		$nim 		= $_POST['nim'];
		$nama 		= $_POST['nama'];
		$jk			= $_POST['jk'];
		$jurusan 	= $_POST['jurusan'];
		$alamat 	= $_POST['alamat'];
		$gambar 	= $_FILES['gambar']['name'];
		$mysqli->query("INSERT INTO tb_anggota SET nim='$nim',nama='$nama',jk='$jk',jurusan='$jurusan',alamat='$alamat',gambar='$gambar'");
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/anggota/'.$gambar);
		header('location:?page=anggota');
?>
