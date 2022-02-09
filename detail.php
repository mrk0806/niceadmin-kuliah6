<?php


session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}


require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id']; //ambil id dari URL

$m = query1("Select * from mahasiswa where id =$id"); //query mahasiswa berdasarkan id yg diambil dari URL
// var_dump($m['nama']); //cek test munculkan data

//cek apakah tombol hapus di tekan
if (isset($_POST['hapus'])) {
if (hapus($_POST) > 0) {
  echo "<script>
    alert('data berhasil dihapus');
    document.location.href='index.php';
  </script>";
} else {
  echo "data gagal dihapus";
}
}


//cek apakah tombol ubah di tekan blm
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('data berhasil diubah');
      document.location.href='detail.php?id=".$id."';
    </script>";
  } else {
    echo " data gagal diubah";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
  <?php cssdong(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>

<?=headerHTML();aside();?>

<main id="main" class="main">
<div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="img/<?= $m['gambar']; ?>" alt="Profile" >
              <h2><?= strtok($m['nama'], " ");; ?></h2>
              <h3> <?= $m['email']; ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-xl-8">

        <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?= $m['nama']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NRP</div>
                    <div class="col-lg-9 col-md-8"> <?= $m['nrp']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jurusan</div>
                    <div class="col-lg-9 col-md-8"><?= $m['jurusan']; ?></div>
                  </div>

                    <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= $m['email']; ?></div>
                  </div>

                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form form action="" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $m['id']; ?>">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
                        <img src="img/<?= $m['gambar']; ?>" alt="Profile" class="img-preview">
                        <div class="pt-2">
                          <a id="upfile1" href="#" class="btn btn-primary btn-sm" title="Upload new profile image"> <i   class="bi bi-upload"> </i> Ubah Foto
                        </a>
                        <input id="file1" type="file" name="gambar" class="gambar" onchange="previewImage()" style="display:none;">
                          <!-- <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" value="<?= $m['nama']; ?>" type="text" class="form-control" id="fullName" >
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" value="<?= $m['email']; ?>" type="text" class="form-control" id="email" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jurusan" class="col-md-4 col-lg-3 col-form-label">Jurusan</label>
                      <div class="col-md-8 col-lg-9">
                        <input  name="jurusan" value="<?= $m['jurusan']; ?>" type="text" class="form-control" id="jurusan" value="Web Designer">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="NRP" class="col-md-4 col-lg-3 col-form-label">NRP</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nrp" value="<?= $m['nrp']; ?>" type="text" class="form-control" id="Country" >
                      </div>
                    </div>

                   

                    <div class="text-center">
                      <button type="submit" name="ubah" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                <div class="tab-pane fade pt-3" id="profile-settings">
                  
                                  <div class="row mb-3">
                                  <div class="pt-2">
                                    
                                  
                                  <form action="" method="POST" enctype="multipart/form-data">
                                  <input type="hidden" name="id" value="<?= $m['id']; ?>">
                                  <button type="submit" name="hapus" onclick="return confirm('apakah anda yakin?')" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i> Hapus Data</a>
                                  </form>
                                  
                                  </div>
                  </div>
                </div>

        </div>
  </div>
</section>
</main>


<script src="js/script.js"></script>
  <?php jsdong(); ?>
  
  <script>
    $("#upfile1").click(function() {
    $("#file1").trigger('click');
});
  </script>
</body>

</html>