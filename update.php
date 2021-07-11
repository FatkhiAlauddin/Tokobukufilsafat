<?php
    include './config.php';

    $id = $_POST['id'];
    $nama = $_POST['nama buku'];
    $nim = $_POST['harga buku'];
    $alamat = $_POST['jenis buku'];

    mysqli_query($koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");
    header("location:index.php");
?>