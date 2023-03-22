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

?>

<h2> Laporan Anggota </h2>

<table border="1">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Program Studi</th>
		<th>Alamat</th>
	</tr>

	<?php
		$mahasiswa = $mysqli->query("SELECT * FROM tb_anggota ");
		$no = 0;
		while( $m = $mahasiswa->fetch_assoc()){
		$no++;
	?>

	<tr>
        <th scope="row"><?= $no; ?></th>
		<td><?= $m["nim"]; ?></td>
		<td><?= $m["nama"]; ?></td>
		<td><?= $m["jk"]; ?></td>
		<td><?= $m["jurusan"]; ?></td>
		<td><?= $m["alamat"]; ?></td>
										  
		<?php } ?>
        </tr>
</table>