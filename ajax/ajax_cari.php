<?php
// echo "helloworld";
// $key = $_GET['keyword'];
// echo $key;

require '../functions.php';
$mahasiswa = cari($_GET['keyword']); //variable $mahasiswa supaya menimpa yg variable  mahasiswa yg diatasnya
?>

<table border="1" cellpadding="10" cellspasing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>
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
</table>