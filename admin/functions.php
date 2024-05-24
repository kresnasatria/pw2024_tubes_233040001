<?php 

function koneksi () {
  // Koneksi ke database
  $conn = mysqli_connect('localhost', 'root', '','tabelguru_233040001');
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
  $Email = htmlspecialchars($data['email']);    
  $kelas = htmlspecialchars($data['kelas']);  

  $query = "INSERT INTO guru
              VALUES (null, '$nama', '$hp', '$Email', '$kelas')
           ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


?>