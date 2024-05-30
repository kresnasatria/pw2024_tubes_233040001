<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

require '../admin/functions.php';
$guru = query("SELECT * FROM guru");
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin | Daftar Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

  <div class="container">
		<h1>Daftar Guru</h1>

    <a href="tambah.php" class="btn btn-primary">Tambah Data Guru</a>
    <a href="../logout.php" class="btn btn-primary">Logout</a>

		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAMA</th>
      <th scope="col">NO HP</th>
      <th scope="col">Email</th>
      <th scope="col">KELAS</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

<?php $i = 1;
foreach($guru as $gurus) : ?>

    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $gurus['nama_guru']; ?></td>
      <td><?= $gurus['no_hp']; ?></td>
      <td><?= $gurus['email']; ?></td>
      <td><?= $gurus['kelas']; ?></td>
      <td>
        <a href="ubah.php?id=<?= $gurus['id']; ?>" class="badge text-bg-warning text-decoration-none">ubah</a>
        <a href="hapus.php?id=<?= $gurus['id']; ?>" onclick="return confirm('yakin?');" class="badge text-bg-danger text-decoration-none">hapus</a>
      </td>
    </tr>

    <?php $i++; ?>
    <?php endforeach; ?>   
  </tbody>
</table>
	</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>