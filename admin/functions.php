<?php 

function koneksi () {
  // Koneksi ke database
  $conn = mysqli_connect('localhost', 'root', '','tabelguru');
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
  $hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);    
  $kelas = htmlspecialchars($data['kelas']);  

  $query = "INSERT INTO guru
              VALUES (null, '$nama', '$hp', '$email', '$kelas')
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
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
  $no_hp = htmlspecialchars($data['no_hp']);
  $email = htmlspecialchars($data['email']);    
  $kelas = htmlspecialchars($data['kelas']);  

  $query = "UPDATE guru SET
              nama_guru = '$nama_guru',
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