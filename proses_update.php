<?php  
include "koneksi.php";

$nim = $_POST['nim_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$semester = $_POST['semester'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$phone = $_POST['no_hp'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$status = $_POST['status'];

$update = "UPDATE tbl_mhs SET nim_mahasiswa='$nim',nama_mahasiswa='$nama',semester='$semester',
jurusan='$jurusan',alamat='$alamat',no_hp='$phone',email='$email',jenis_kelamin='$jk',status_mahasiswa='$status' where nim_mahasiswa='$nim'";

if (mysqli_query($koneksi, $update)) {
	header("location:data_mahasiswa.php");
}else{
	echo "Ada yang ERROR nihh,". mysqli_error($koneksi);
}