<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "db_pendaftaran";
$koneksi = mysqli_connect($server,$username,$password,$database);
if ($koneksi->connect_error) {
    echo "gagal tersambung ke database : ".$koneksi->connect_error;
}
 ?>