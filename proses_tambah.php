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
$namaFile	= $_FILES['foto']['name'];
$dirTmp		= $_FILES['foto']['tmp_name'];

$folder		="gambar/".$namaFile;

$upload		= move_uploaded_file($dirTmp, $folder);

$simpan = "INSERT INTO tbl_mhs (nim_mahasiswa,nama_mahasiswa,semester,jurusan,alamat,no_hp,email,jenis_kelamin,status_mahasiswa,foto) 
VALUES ('$nim','$nama','$semester','$jurusan','$alamat','$phone','$email','$jk','$status','$folder')";

if($upload) {
	mysqli_query($koneksi, $simpan);
	echo "<script language='JavaScript'>
	alert('Data Berhasil Di Simpan');
	document.location = 'data_mahasiswa.php'
	</script>";
}else{
	echo "Gagal Upload". mysqli_error($simpan);
}