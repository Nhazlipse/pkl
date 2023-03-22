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
 
 
 <!-- Data Pengunjung -->
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
            <img src="../../assets/img/tambaharsip.png"style="width:27%;">
            </div>

            <!-- card body -->
            <div class="card-body">
                <div class="container">
                <form action="proses_tambah_data.php" method="post">
                <div class="form-group">
                <label for="judul">Nama Pemilik:</Nama></label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                <label for="judul">Masalah:</label>
                <input type="text" class="form-control" id="masalah" name="masalah"
                required>
                </div>

                <div class="form-group">
                 <label for="judul">Jalan:</label>
                    <input type="text" class="form-control" id="jalan" name="jalan" required>
                 </div>

                    <div class="form-group">
                    <label for="kelurahan">Kelurahan:</label>
                    <select class="form-control" name="kelurahan" id="kelurahan">
                
            <?php
            $kelurahanOptions = array(
                'Tamanan', 
                'Sukorame', 
                'Pojok', 
                'Ngampel', 
                'Mrican', 
                'Mojoroto', 
                'Lirboyo', 
                'Gayam', 
                'Dermo', 
                'Campurejo', 
                'Bujel', 
                'Banjar Mlati', 
                'Bandar Lor', 
                'Bandar Kidul'
            );
            
            foreach ($kelurahanOptions as $option) {
                $selected = ($row['kelurahan'] == $option) ? 'selected' : '';
                echo '<option ' . $selected . '>' . $option . '</option>';
            }
        ?>

                </select>
                </div>


<div class="form-group">
    <label for="kecamatan">Kecamatan:</label>
    <select class="form-control" name="kecamatan" id="kecamatan">
        <option value="Kota">Kota</option>
        <option value="Mojoroto">Mojoroto</option>
        <option value="Pesantren">Pesantren</option>
        <option value="Campuran">Campuran</option>
    </select>
</div>


        <div class="form-group">
            <label for="Unit Pengolah">Unit Pengolah:</label>
            <input type="text" class="form-control" id="unit_pengolah" name="unit_pengolah"
                required>
        </div>

        <div class="form-group">
            <label for="judul">No. Rak:</label>
            <input type="text" class="form-control" id="no_rak" name="no_rak" required>
        </div>

        <div class="form-group">
            <label for="judul">No. Box:</label>
            <input type="text" class="form-control" id="no_box" name="no_box" required>
        </div>

        <div class="form-group">
            <label for="judul">Kode Klas:</label>
            <input type="text" class="form-control" id="kode_klas" name="kode_klas"
                required>
        </div>

        <div class="form-group">
            <label for="judul">No. Urut:</label>
            <input type="text" class="form-control" id="no_urut" name="no_urut"
                required>
        </div>

        <div class="form-group">
            <label for="judul">NIPA:</label>
            <input type="text" class="form-control" id="nipa" name="nipa" required>
        </div>

        <div class="form-group">
    <label for="tahun">Tahun:</label>
    <select class="form-control" name="tahun" id="tahun">
        <?php
        $current_year = date('Y');
        for ($i = $current_year; $i >= 1999; $i--) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>
    </select>
</div>

        <div class="form-group">
            <label for="judul">Keterangan:</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan"
                required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="arsip.php" class="btn btn-danger">Cancel</a>
    </form>
</div>

<!-- akhir container -->

</div>
<!-- End of Page Wrapper -->