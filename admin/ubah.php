<?php
require 'functions.php';

$id = $_GET['id'];
$gurus = query("SELECT * FROM guru WHERE id = $id")[0];




//jika tombol ubah di klik
if(isset($_POST['ubah'])){
    // jika data berhasil diubah
    if(ubah($_POST) > 0) {
        echo"<script>
                alert('data berhasil diubah');
                document.location.href = 'admin.php';
            </script>";
    }
}


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

    <div class="container col-8">
    <H1>Form Ubah Data Guru</H1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $gurus['id']; ?>">
        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama_guru" name="nama_guru" required value="<?= $gurus['nama_guru'];?>">
        </div>
    <div class="mb-3">
    <label for="nim" class="form-label">No Hp</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" required value="<?= $gurus['no_hp'];?>">
        </div>
    <div class="mb-3">
    <label for="nim" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email"required value="<?= $gurus['email'];?>">
        </div>
    <div class="mb-3">
    <label for="jurusan" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" required value="<?= $gurus['kelas'];?>">
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>