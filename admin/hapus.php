<?php
require 'functions.php';

$id = $_GET ['id'];


if(isset($id)) {
    if(hapus($id) > 0) {
      echo "<script>
      alert('data berhasil dihapus')
      document.location.href = 'admin.php';
      </script>";
    }
    }

?>