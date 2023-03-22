<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Judul</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Tanggal Pinjam</th>
											<th>Tanggal Kembali</th>
											<th>Terlambat</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
										 	$transaksi = $mysqli->query("SELECT * FROM tb_transaksi");
										 	$no = 0;
										 	while( $t = $transaksi->fetch_assoc()){
											$no++;
										 ?>

                                    	<tr>
                                    		<th scope="row"><?= $no; ?></th>
										  	<td><?= $t["judul"]; ?></td>
										  	<td><?= $t["nim"]; ?></td>
										  	<td><?= $t["nama"]; ?></td>
										  	<td><?= $t["tgl_pinjam"]; ?></td>
										  	<td><?= $t["tgl_kembali"]; ?></td>
										  	<td>
										  		<?php

										  		$denda = 5000;

										  		$tgl_deadline = $t['tgl_kembali'];
										  		$tgl_kembali = date('Y-m-d');

										  		$lambat = terlambat($tgl_deadline,$tgl_kembali);
										  		$denda1 = $lambat*$denda;

										  		if ($lambat>0) {
										  			echo"<font color='red'>$lambat hari<br>(Rp. $denda1)</font>";
										  		}else{
										  			echo " ".$lambat." hari";
										  		}


										  		?>
										  	 	
										  	 </td>
										  	<td><?= $t["status"]; ?></td>
										  <?php } ?>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="./laporan/laporan_transaksi_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a>

