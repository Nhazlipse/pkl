<?php 
	$id 		= $_POST["id"];
	$nim 		= $_POST["nim"];
	$nama 		= $_POST["nama"];
	$jk 		= $_POST["jk"];
	$jurusan 	= $_POST["jurusan"];
	$alamat		= $_POST["alamat"];
	$gambar 	= $_FILES["gambar"]["name"];
	// jika gambar tidak diganti
	if(empty($gambar)) {
		$mysqli->query("UPDATE tb_anggota SET 
						nim 		= '$nim',
						nama 		= '$nama',
						jk 			= '$jk',
						jurusan 	= '$jurusan',
						alamat 		= '$alamat'
						WHERE id 	=$id
						");
	} else {
		$hapus = $mysqli->query("SELECT * FROM tb_anggota WHERE id =$id");
		// menghapus gambar lama
		$namaGambar = mysqli_fetch_array($hapus);
		// nama field gambar
		$lokasi = $namaGambar["gambar"];
		// alamat tempat gambar
		$hapusGambar = "images/anggota/$lokasi";
		// untuk menghapus gambar dari folder
		unlink($hapusGambar);
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/anggota/' . $gambar);
		$mysqli->query("UPDATE tb_anggota SET
						nim 		= '$nim',
						nama 		= '$nama',
						jurusan 	= '$jurusan',
						alamat 		= '$alamat',
						gambar 		= '$gambar'
						WHERE id 	=$id
						");
	}
	header('location:?page=anggota');
 ?>