<?php 
  $id = $_GET["id"];
  $details = $mysqli->query("SELECT * FROM tb_anggota WHERE id ='$_GET[id]'");
  $d = mysqli_fetch_array($details);

 ?>

<div class="row" style="margin-top: 20px;">
  <div class="col-md-8">
  <div class="container">
    <div class="row justify-content-center">
      <a href="?page=anggota" class="btn btn-default" style="margin-left: 20px;">kembali</a></button>
        <h2 class="bg-light p-2 rounded  text-center text-dark" style="color: black;"> Data Anggota Perpustakaan </h2>
        <hr class="my-3">
        <div class="text-center">
          <img src="images/anggota/<?= $d["gambar"]; ?>" width="200" class="img-thumnail mt-3"> 
        </div>
        <h6 class="text-dark text-center mt-3" style="font-size: 16px; margin-top: 20px;">NIM  : <?= $d["nim"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">Nama  : <?= $d["nama"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">Jenis Kelamin  : <?= $d["jk"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">Program Studi  : <?= $d["jurusan"]; ?></h6>
        <h6 class="text-dark text-center" style="font-size: 16px;">Alamat  : <?= $d["alamat"]; ?></h6>
      </div>
    </div>
  </div>
  