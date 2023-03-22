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

        $filename = "buku_excel-(".date('d-m-Y').").xls";

        header("content-disposition: attachment; filename=$filename");
        header("content-type: application/vdn.ms-excel");

?>

<h2> Laporan Anggota </h2>

<table border="1">
	<tr>
		<<th>No </th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Buku</th>
	</tr>

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
										  
		<?php } ?>
        </tr>
</table>