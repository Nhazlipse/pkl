<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    	<form name="form_buku" action="?page=buku&aksi=create" method="POST" enctype="multipart/form-data">
											<div class="form-group">
												<label for="judul">Judul</label>
												<input type="text" class="form-control" id="judul" placeholder="Masukan Judul Buku" name="judul" required>
											</div>

											<div class="form-group">
												<label for="pengarang">Pengarang</label>
												<input type="text" class="form-control" id="pengarang" placeholder="Masukan Nama Pengarang" name="pengarang" required>
											</div>

											<div class="form-group">
												<label for="penerbit">Penerbit</label>
												<input type="text" class="form-control" id="penerbit" placeholder="Masukan Nama Penerbit" name="penerbit" required>
											</div>

											<div class="form-group">
												<label for="tahun_terbit">Tahun Terbit</label>
												<select class="form-control" id="tahun_terbit" name="tahun_terbit">
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
												<input type="number" class="form-control" id="jumlah_buku" placeholder="Masukan Jumlah Buku" name="jumlah_buku" required>
											</div>

											<!--<div class="form-group">
												<label for="isbn">ISBN</label>
												<input type="text" class="form-control" id="isbn" placeholder="Masukan ISBN" name="isbn" required>
											</div>-->

											<div class="form-group">
												<label for="Gambar">Gambar</label>
												<input type="file" class="form-control" id="gambar" name="gambar" required>
											</div>

											<div class="form-group">
												<button type="reset" class="btn btn-danger">Reset</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>