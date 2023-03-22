<?php 
	$id = $_GET["id"];
	$edit = $mysqli->query("SELECT * FROM tb_buku WHERE id =$id");
	$e = mysqli_fetch_array($edit);
 ?>

 <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
								 <form name="form_buku" action="?page=buku&aksi=update" method="post" enctype="multipart/form-data">
								 	<div class="form-group">
										<label for="judul">Judul</label>
										<input type="hidden" name="id" value="<?= $e["id"]; ?>">
								 		<input type="text" class="form-control" id="judul" name="judul" value="<?= $e["judul"]; ?>" required>
								 	</div>

								 	<div class="form-group">
								 		<label for="pengarang">Pengarang</label>
								 		<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $e["pengarang"]; ?>" required>
								 	</div>

								 	<div class="form-group">
								 		<label for="penerbit">Penerbit</label>
								 		<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $e["penerbit"]; ?>" required>
								 	</div>

								 	<div class="form-group">
										<label for="tahun_terbit">Tahun Terbit</label>
											<select class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $e["tahun_terbit"]; ?>">
												<?php

													$tahun=2001;

													for ($i=$tahun;$i<=$tahun +19;$i++) { 
														echo "<option value='".$i."'>".$i."</option>";
													}
												?>
											</select>
									</div>

									<div class="form-group">
										<label for="jumlah_buku">Jumlah Buku</label>
										<input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?= $e["jumlah_buku"]; ?>" required>
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