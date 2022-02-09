<?php

session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
require 'functions.php';
$mahasiswa = query("Select * from mahasiswa");

//ketika tombol caari di klik

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <?php cssdong(); ?>
</head>

<body>
  
<?php

headerHTML();
aside();

?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Mahasiswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Mahasiswa</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Mahasiswa</h5>
              <p><a href="tambah.php">Tambah Daftar Mahasiswa</a></p>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 
                
                <tbody>
                <?php if (empty($mahasiswa)) : ?>
                    <tr>
                      <td colspan="4">
                        <p style="color:red; font-style:italic;">Data mahasiswa tidak ditemukan</p>
                      </td>
                    </tr>
                  <?php endif; ?>
               
                <?php $i = 1;
                foreach ($mahasiswa as $m) : ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><img src="img/<?= $m['gambar']; ?>" width="70px"></td>
                    <td><?= $m['nama']; ?></td>
                    <td>
                      <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
               
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  
  <script src="js/script.js"></script>
  <?php jsdong(); ?>
</body>

</html>