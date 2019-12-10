<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$nim_mahasiswa   = $_GET['nim_mahasiswa'];
// query SQL untuk insert data
$delete="DELETE from tbl_mhs where nim_mahasiswa='$nim_mahasiswa'";
mysqli_query($koneksi, $delete);
// mengalihkan ke halaman index.php
header("location:data_mahasiswa.php");
?>