<?php 
	$id = $_GET["id"];
	$edit = $mysqli->query("SELECT * FROM tb_anggota WHERE id =$id");
	$e = mysqli_fetch_array($edit);
 ?>

 <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
                                	<form name="form_mahasiswa" action="?page=anggota&aksi=update" method="post" enctype="multipart/form-data">
									 	<div class="form-group">
									 		<label for="nim">NIM</label>
											<input type="hidden" name="id" value="<?= $e["id"]; ?>">
									 		<input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" value="<?= $e["nim"]; ?>" required>
									 	</div>

									 	<div class="form-group">
									 		<label for="nama">Nama</label>
									 		<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" value="<?= $e["nama"]; ?>" required>
									 	</div>

									 	<div class="form-group">
											<label for="jk">Jenis Kelamin</label>
												<select name="jk" class="form-control" id="jk" name="jk" required>
													<option value="<?= $e["jk"]; ?>"><?= $e["jk"]; ?></option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
										</div>

									 	<div class="form-group">
									 		<label for="jurusan">Program Studi</label>
									 		<select class="form-control" id="jurusan" name="jurusan" required>
									 			<option value="<?= $e["jurusan"]; ?>"><?= $e["jurusan"]; ?></option>
												<option value="Sistem Informasi">Sistem Informasi</option>
												<option value="Teknik Informatika">Teknik Informatika</option>
												<option value="Teknik Komputer">Teknik Komputer</option>
												<option value="Sistem Informasi Akuntasi">Sistem Informasi Akuntasi</option>
									 		</select>
									 	</div>

									 	<div class="form-group">
									 		<label for="alamat">Alamat</label>
									 		<textarea type="text" class="form-control" id="alamat" name="alamat" value="<?= $e["alamat"]; ?>" required><?= $e["alamat"]; ?></textarea>
									 	</div>

									 	<div class="form-group">
									 		<label for="gambar">Gambar</label>
									 		<input type="file" class="form-control" id="gambar" name="gambar">
									 		<span><?= $e["gambar"]; ?></span>
									 	</div>

									 	<div class="form-group">
									 		<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Perbarui</button>
									 	</div>

									 </form>