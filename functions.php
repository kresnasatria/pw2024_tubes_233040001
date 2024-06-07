<?php 

function koneksi () {
  // Koneksi ke database
  $conn = mysqli_connect('localhost', 'root', '','pw2024_tubes_233040001');
  return $conn;
}

function query ($query) {
  // Koneksi ke database
  $conn = koneksi();

  //query isi tabel guru
  $result = mysqli_query ($conn, $query);
  	
  //menyiapkan data guru
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;

}


function tambah($data) 
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama_guru']);
  $description = htmlspecialchars($data['description']);
  $hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);    
  $kelas = htmlspecialchars($data['kelas']); 
  
  // upload gambar
  $gambar = upload();
  if( !$gambar ) {
    return false;
  }

  $query = "INSERT INTO guru
              VALUES (NULL '$nama', $gambar, '$description', '$hp', '$email', '$kelas')
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function upload() {
  $namaFile = $_FILES['gambar'] ['name'];
  $ukuranFile = $_FILES['gambar'] ['size'];
  $error = $_FILES['gambar'] ['error'];
  $tmpName = $_FILES['gambar'] ['tmp_name'];

  // cek apakah todak ada gambar yang tidak diupload
  if( $error == 4 ) {
    echo "<script> 
            alert('pilih gambar terlebih dahulu')
          </script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'avif'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
    echo "<script> 
            alert('yang anda upload bukan gambar')
          </script>";
    return false;
  }

  // cek jika ukuranya terlalu besar 
  if( $ukuranFile > 30000000 ) {
    echo "<script> 
            alert('ukuran gambar terlalu besar')
          </script>";
return false;
  }

  // lolos pengecekan, gambar siap diupload 
  // generate nama gambar baru

  $namaFileBaru = uniqid(); 
  $namaFileBaru .= '.' ;
  $namaFileBaru .= $ekstensiGambar; 

  move_uploaded_file($tmpName, '../img_teachers/' . $namaFile);

  return $namaFile;

}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM guru WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data) 
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $nama_guru = htmlspecialchars($data['nama_guru']);
  $gambarLama = htmlspecialchars($data['gambarLama']);

  // cek apakah user pilih gambar baru atau tidak

  if( $_FILES['gambar'] ['error'] === 4 ) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }
  $gambar = htmlspecialchars($data['gambar']);
  $description = htmlspecialchars($data['description']);
  $no_hp = htmlspecialchars($data['no_hp']);

  $email = htmlspecialchars($data['email']);    
  $kelas = htmlspecialchars($data['kelas']);  

  $query = "UPDATE guru SET
              nama_guru = '$nama_guru',
              gambar = '$gambar',
              description = '$description',
              no_hp = '$no_hp',
              email = '$email',
              kelas = '$kelas'
            WHERE id = $id
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * FROM guru 
             WHERE
            nama_guru = '$keyword'
           ";
  return query($query);  
}


?>
