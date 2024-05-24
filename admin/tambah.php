<?php
require '../admin/functions.php';
//jika tombol tambah di klik
if(isset($_POST['tambah'])){
    // jika data berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo"<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
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
    <H1>Form Tambah Data Guru</H1>

    <form action="" method="POST">
        <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
        </div>
    <div class="mb-3">
    <label for="nim" class="form-label">No HP</label>
    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
    <div class="mb-3">
    <label for="nim" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email"required>
        </div>
    <div class="mb-3">
    <label for="jurusan" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>