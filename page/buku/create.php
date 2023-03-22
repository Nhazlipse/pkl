<?php 

							$judul 				= $_POST['judul'];
							$pengarang 			= $_POST['pengarang'];
							$penerbit 			= $_POST['penerbit'];
							$tahun_terbit 		= $_POST['tahun_terbit'];
							$jumlah_buku 		= $_POST['jumlah_buku'];
							$isbn 		 		= $_POST['isbn'];
							$gambar 			= $_FILES['gambar']['name'];

							$mysqli->query("INSERT INTO tb_buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit',jumlah_buku='$jumlah_buku',isbn='$isbn',gambar='$gambar'");
							move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/buku/'.$gambar);
							header('location:?page=buku');

						?>


						
