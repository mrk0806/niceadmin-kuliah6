<?php


session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

//cek apakah tombol sudah di tekan blm
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href='index.php';
    </script>";
  } else {
    echo " data gagal di tambahkan";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <?php cssdong(); ?>

</head>

<body>
<?php

headerHTML();
aside();

?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Floating labels Form</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" form action="" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control nama" id="floatingName" name="nama" placeholder="Your Name">
                                <label for="floatingName">Your Name</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control nrp" name="nrp" id="floatingNRP" placeholder="NRP">
                                <label for="floatingNRP">NRP</label>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control email" name="email" id="floatingEmail" placeholder="Your Email">
                                <label for="floatingEmail">Your Email</label>
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control jurusan" name="jurusan"id="floatingJurusan" placeholder="Jurusan">
                                <label for="floatingJurusan">JURUSAN</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div>
                            <input type="file" name="gambar" class="form-control gambar" onchange="previewImage()">
                            </div>
                        </div>
                        <div class="col-12">
                          <div>
                          <img src="img/no_photo.jpg" width="120" style="display: block;" class="img-preview">
                          </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- End floating Labels Form -->

                </div>
            </div>
        </div>
    </div>
</section>

</main>
 
</body>
<script src="js/script.js"></script>
<?php jsdong(); ?>

</html>