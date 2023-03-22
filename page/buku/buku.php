<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}
require_once '../../Database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One-IT</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- framework bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <script src="../../assets/js/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/locales/bootstrap-datepicker.id.min.js"></script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">One It Library</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today : <?php $d=date('d-m-Y'); echo "$d"; ?>  &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?home.php"><i class="fa fa-home fa-2x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  href="?page=anggota"><i class="fa fa-users fa-2x"></i> Data</a>
                    </li>

                    <li>
                        <a  href="?page=buku"><i class="fa fa-book fa-2x"></i> Data Vendor</a>
                    </li>



                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Tombol Tambah Data -->
<div class="tambahdata">
<a href="tambah.php" class="btn btn-primary">Tambah Data</a><br><br>

<!-- buat kolom -->
<div class="table-responsive">
<table id="dataTable1" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
        <th class="text-center">No<br><br></th>
        <th class="text-center">Nama Perusahaan</th>
        <th class="text-center">Alamat Perusahaan</th>
        <th class="text-center">No Fax</th>
        <th class="text-center">No Telp</th>
        <th class="text-center">Alamat Email</th>
        <th class="text-center">Direktur</th>
        <th class="text-center">No Rekening</th>
        <th class="text-center">Bank</th>
        <th class="text-center">Kantor Bank</th>
        <th class="text-center">Atas Nama</th>
        <th class="text-center">Ket Akta Pendirian</th>
        <th class="text-center">No DPT</th>
        <th class="text-center">No SAPV</th>
        <th class="text-center">No NPWP</th>
        <th class="text-center">Action</th>
    </tr>
</thead>
<!-- deklarasikan dan panggil koneksi database untuk memanggil data dari tb_dataarsip-->
<tbody>
<?php

// untuk menampilkan data yang di tampilkan pada setiap pagenya adalah 10 data menggunakan fungsi sql (DESC LIMIT)
 $query = "SELECT * FROM t_vendor ORDER BY id_vendor";
 $tampil = $koneksi->query($query);
 $no = 1;
while ($data = mysqli_fetch_array($tampil)) {
?>

<!-- mendeskripsikan data sesuai pada kolom yang di perlukan -->
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td><?= $data['Nama_Perusahaan'] ?></td>
        <td><?= $data['Alamat_Perusahaan'] ?></td>
        <td><?= $data['NoFax'] ?></td>
        <td><?= $data['NoTelp'] ?></td>
        <td><?= $data['Alamat_Email'] ?></td>
        <td><?= $data['Direktur'] ?></td>
        <td><?= $data['NoRekening'] ?></td>
        <td><?= $data['Bank'] ?></td>
        <td><?= $data['Kantor_Bank'] ?></td>
        <td><?= $data['Atas_Nama'] ?></td>
        <td><?= $data['Ket_Akta_Pendirian'] ?></td>
        <td><?= $data['NoDPT'] ?></td>
        <td><?= $data['NoSAPV'] ?></td>
        <td><?= $data['NoNPWP'] ?></td>
        <td>

    <!-- buat tombol edit hapus -->
    <a href="edit.php?id_vendor=<?= $data['id_vendor'] ?>"
        class="btn btn-warning btn-sm d-sm-inline-block mb-3 mb-sm-1"><i
            class="fa fa-edit"></i>Edit</a>
    <a href="hapusdata.php?id_vendor=<?= $data['id_vendor'] ?>"
        class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1"
        onclick="return confirm('Yakin ingin menghapus data ini?')"><i
            class="fa fa-trash"></i>Hapus</a>

        </td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
</div>
</div>
</div>