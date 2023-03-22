<?php 
	$id					= $_POST["id"];
	$judul				= $_POST["judul"];
	$pengarang 			= $_POST["pengarang"];
	$penerbit			= $_POST["penerbit"];
	$tahun_terbit		= $_POST["tahun_terbit"];
	$jumlah_buku		= $_POST["jumlah_buku"];
	$gambar 			= $_FILES["gambar"]["name"];
	// jika gambar tidak diganti
	if(empty($gambar)) {
		$mysqli->query("UPDATE tb_buku SET 
						judul		='$judul',
						pengarang	='$pengarang',
						penerbit	='$penerbit',
						tahun_terbit='$tahun_terbit',
						jumlah_buku ='$jumlah_buku',
						isbn 		='$isbn' 
						WHERE id 	=$id
						");

	}else{
		$hapus = $mysqli->query("SELECT * FROM tb_buku WHERE id =$id");
		// menghapus gambar lama
		$namaGambar = mysqli_fetch_array($hapus);
		// nama field gambar
		$lokasi = $namaGambar["gambar"];
		// alamat tempat gambar
		$hapusGambar = "images/buku/$lokasi";
		// untuk menghapus gambar dari folder
		unlink($hapusGambar);
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/buku/'.$gambar);

		$mysqli->query("UPDATE tb_buku SET 
						judul		='$judul',
						pengarang	='$pengarang',
						penerbit	='$penerbit',
						tahun_terbit='$tahun_terbit',
						jumlah_buku ='$jumlah_buku',
						isbn 		='$isbn',
						gambar 		='$gambar' 
						WHERE id 	=$id
						");
	}
	header('location:?page=buku');
 ?> 