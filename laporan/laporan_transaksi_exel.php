<?php

		$host="localhost";
        $user="root";
        $pass="";
        $database="db_perpustakaan";
        $mysqli= new mysqli ($host,$user,$pass,$database);
        //Object Oriented Style $mysqli -> new mysqli(host, username, password, dbname, port, socket)

                //check connection
                if ($mysqli -> connect_errno) {
                    trigger_error("Failed to connect to MYSQL: " . $mysqli, E_USER_NOTICE);
                    //trigger_error(message, type)
                }

        $filename = "anggota_excel-(".date('d-m-Y').").xls";

        header("content-disposition: attachment; filename=$filename");
        header("content-type: application/vdn.ms-excel");

?>]

									<h2> Laporan Transaksi </h2>

									<table border="1">
										<tr>
                                            <th>No</th>
											<th>Judul</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Tanggal Pinjam</th>
											<th>Tanggal Kembali</th>
											<th>Status</th>

                                        </tr>

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
										  	<td><?= $t["status"]; ?></td>
										<?php } ?>
                                    	</tr>
</table>