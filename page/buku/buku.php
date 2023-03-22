<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th># </th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Jumlah Buku</th>
                                            <!--<th>ISBN</th>-->
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $buku = $mysqli->query("SELECT * FROM tb_buku ");
                                            $no = 0;
                                            while( $b = $buku->fetch_assoc()){
                                            $no++;
                                         ?>

                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $b["judul"]; ?></td>
                                            <td><?= $b["pengarang"]; ?></td>
                                            <td><?= $b["penerbit"]; ?></td>
                                            <td><?= $b["tahun_terbit"]; ?></td>
                                            <td><?= $b["jumlah_buku"]; ?></td>
                                            <!--<td><?= $b["isbn"]; ?></td>-->
                                            <td><img src="images/buku/<?= $b["gambar"]; ?>" height="100"></td>
                                            <td>
                                                <a href="?page=buku&aksi=edit&id=<?php echo $b['id'];?>" class="btn btn-info">Edit </a>
                                                <a href="?page=buku&aksi=delete&id=<?php echo $b['id'];?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini?');">Hapus </a>
                                            </td>
                                          <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>

                                 </div>
                            <a href="./laporan/laporan_buku_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>