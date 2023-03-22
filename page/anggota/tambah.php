<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Anggota 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<form name="form_mahasiswa" action="?page=anggota&aksi=create" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="NIM">NIM</label>
											<input type="text" class="form-control" id="nim" placeholder="Input Nomor Induk Mahasiswa" name="nim" required>
										</div>

										<div class="form-group">
											<label for="Nama">Nama</label>
											<input type="text" class="form-control" id="nama" placeholder="Input Nama" name="nama" required>
										</div>

										<div class="form-group">
											<label for="jk">Jenis Kelamin</label>
												<select name="jk" class="form-control" id="jk" name="jk" required>
													<option value="">None</option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Wanita">Perempuan</option>
												</select>
										</div>

										<div class="form-group">
											<label for="Jurusan">Pilih Jurusan</label>
												<select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
													<option value="">None</option>
													<option value="Sistem Informasi">Sistem Informasi</option>
													<option value="Teknik Informatika">Teknik Informatika</option>
													<option value="Teknik Komputer">Teknik Komputer</option>
													<option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
												</select>
										</div>

										<div class="form-group">
											<label for="Alamat">Alamat</label>
											<textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required></textarea>
										</div>

										<div class="form-group">
											<label for="Gambar">Gambar</label>
											<input type="file" class="form-control" id="gambar" name="gambar" required>
										</div>

										<div class="form-group">
											<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>

									</form>