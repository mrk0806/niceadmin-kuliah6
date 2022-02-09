<?php

function aside(){
  echo '
  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>
</ul>
</aside>
<!-- end aside -->
  ';
}

function headerHTML(){
  echo '
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">STMIK BJA</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
</div>
<!-- End Logo -->

<div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div>
<!-- End Search Bar -->

<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
            </a>
        </li>
        <!-- End Search Icon-->

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
            </a>
            <!-- End Notification Icon -->

            <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-exclamation-circle text-warning"></i>
                    <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>30 min. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-x-circle text-danger"></i>
                    <div>
                        <h4>Atque rerum nesciunt</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>1 hr. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-check-circle text-success"></i>
                    <div>
                        <h4>Sit rerum fuga</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>2 hrs. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                        <h4>Dicta reprehenderit</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>4 hrs. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                </li>

            </ul> -->
            <!-- End Notification Dropdown Items -->

        </li>
        <!-- End Notification Nav -->

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
            </a>
            <!-- End Messages Icon -->

            <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                    You have 3 new messages
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                    <a href="#">
                        <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                        <div>
                            <h4>Maria Hudson</h4>
                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                    <a href="#">
                        <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                        <div>
                            <h4>Anna Nelson</h4>
                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                            <p>6 hrs. ago</p>
                        </div>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="message-item">
                    <a href="#">
                        <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                        <div>
                            <h4>David Muldon</h4>
                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                            <p>8 hrs. ago</p>
                        </div>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="dropdown-footer">
                    <a href="#">Show all messages</a>
                </li>

            </ul> -->
            <!-- End Messages Dropdown Items -->

        </li>
        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">'.$_SESSION['username'].'</span>
            </a>
            <!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6>'.$_SESSION['username'].'</h6>
                    <span>Web Designer</span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class="bi bi-question-circle"></i>
                        <span>Need Help?</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>

            </ul>
            <!-- End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->

    </ul>
</nav>
<!-- End Icons Navigation -->

</header>
<!-- End Header -->
  ';
}
function cssdong(){
  echo '
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  ';
}

function jsdong(){
  echo'
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  ';
}

function koneksi()
{
  //#koneksi db & pilih db
  return mysqli_connect('localhost', 'root', '', 'db_aplikasi');
}
function query1($query)
{
  $conn = koneksi(); // ambil function koneksi di atas
  $result = mysqli_query($conn, $query); // variabel $query ambil dari parimeter

  //jika hasil datanya sama dengan 1 pakai mysql num rows
  return mysqli_fetch_assoc($result);
  

}
function query($query)
{
  $conn = koneksi(); // ambil function koneksi di atas
  $result = mysqli_query($conn, $query); // variabel $query ambil dari parimeter

  //jika hasil datanya sama dengan 1 pakai mysql num rows
  // if (mysqli_num_rows($result) == 1) {
  //   return mysqli_fetch_assoc($result);
  // }


  //jika hasil danya banyak jalankan ini
  $rows = []; // array kosong
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row; // row looping akan masuk ke array kosong $rows

  }
  return $rows;

  
}

function upload()
{
  // var_dump($_FILES);
  // die;

  $nama_file = $_FILES['gambar']['name'];
  $type_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  //ketika tidak ada gambar yg di pilih
  if ($error == 4) {
    // echo "
    //   <script>
    //     alert('pilih gambar terlebih dahulu!');
    //   </script>
    // ";
    return "no_photo.jpg";
  }
  //cek extensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  // var_dump($ekstensi_file);
  // die;

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "
      <script>
        alert('yang anda pilih bukan gambar!');
      </script>
    ";
    return false;
  }

  //cek tipe file
  //untuk menghindari script jahat
  // var_dump($type_file);
  // die;
  if ($type_file != 'image/jpeg' && $type_file != 'image/png') {
    echo "
    <script>
      alert('yang anda pilih bukan type gambar!');
    </script>
  ";
    return false;
  }


  //cek ukuran file
  //maksimal 5 mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "
    <script>
      alert('ukuran file terlalu besar!');
    </script>
  ";
    return false;
  }

  //lolos pengecekan siap upload file
  //generate nama file gambar baru
  $nama_file_baru = uniqid();
  // var_dump($nama_file_baru);
  // die;

  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  // var_dump($nama_file_baru);
  // die;

  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);
  return $nama_file_baru;
}
function tambah($data)
{
  // var_dump($data);
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  // $nama = $data['nama'];
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  // $gambar = htmlspecialchars($data['gambar']);


  // upload gambar
  $gambar = upload();

  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO 
      mahasiswa
      VALUES
      (null, '$nama', '$nrp', '$email','$jurusan','$gambar')
      ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  $id = $id['id'];
  //menghapus gambar di folder img
  $mhs = query1("select * from mahasiswa where id = $id");
  if ($mhs['gambar'] != 'no_photo.jpg') {

    unlink('img/' . $mhs['gambar']);
  }
  $query = "DELETE FROM mahasiswa where id=$id";
  // mysqli_query($conn, ) or die(mysqli_error($conn));
  // return mysqli_affected_rows($conn);
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  // var_dump($data);
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  // $nama = $data['nama'];
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'no_photo.jpg') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE mahasiswa SET
      nama = '$nama',
      nrp = '$nrp',
      email = '$email',
      jurusan = '$jurusan',
      gambar = '$gambar'
      WHERE id=$id";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}



function login($data)
{
  $conn = koneksi();
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  //cek dulu usernamenya
  if ($user = query1("Select * from user where username ='$username'")) {
    //cek password
    if (password_verify($password, $user['password'])) {

      $_SESSION['login'] = true;
      $_SESSION['username'] = $username;
      header("location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // var_dump($username);
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "
    <script>
    alert('username / password tidak boleh kosong!');
    document.location.href='registrasi.php';
    </script>
    ";
    return false;
  }

  //jika username sudah ada
  if (query1("SELECT * FROM user WHERE username ='$username'")) {
    echo "
    <script>
    alert('username sudah terdaftar');
    document.location.href='registrasi.php';
    </script>
    ";
    return false;
  }

  //jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "
    <script>
    alert('konfirmasi password tidak sesuai');
    document.location.href='registrasi.php';
    </script>
    ";
    return false;
  }

  //jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "
    <script>
    alert('Password terlalu pendek!');
    document.location.href='registrasi.php';
    </script>
    ";
    return false;
  }

  // jika username dan passwordnya sudah seesuai
  //enskripsi password 
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke table user

  $query = "INSERT INTO user
    VALUES
    (null, '$username', '$password_baru')
  ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

