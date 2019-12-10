
<!DOCTYPE html>
<html>
<head>
	<title>Siska UBG</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SISKA_UBG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_mahasiswa.php">Data Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_nilai.html">Petikan Nilai</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container">
	<h4 style="text-align: center;">DAFTAR MAHASISWA</h4>
	<div class="table-responsive">
		<a href="tambah_mahasiswa.html" style="float: right;" class="btn btn-dark">Tambah Mahasiswa</a>
		
	
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nim Mahasiswa</th>
				<th>Nama Mahasiswa</th>
				<th>Semeter</th>
				<th>Jurusan</th>
				<th>Alamat</th>
				<th>No. HP</th>
				<th>E-Mail</th>
				<th>Jenis Klamin</th>
				<th>Status Mahasiswa</th>
				<th>Tools</th>
			</tr>
		</thead>
		<?php
		include "koneksi.php";
		$tampil = "SELECT * FROM tbl_mhs";
		$mhs = mysqli_query($koneksi, $tampil);
		$no = 1;
		foreach ($mhs as $mahasiswa){
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $mahasiswa['nim_mahasiswa']; ?></td>
				<td><?php echo $mahasiswa['nama_mahasiswa']; ?></td>
				<td><?php echo $mahasiswa['semester']; ?></td>
				<td><?php echo $mahasiswa['jurusan']; ?></td>
				<td><?php echo $mahasiswa['alamat']; ?></td>
				<td><?php echo $mahasiswa['no_hp']; ?></td>
				<td><?php echo $mahasiswa['email']; ?></td>
				<td><?php echo $mahasiswa['jenis_kelamin']; ?></td>
				<td><?php echo $mahasiswa['status_mahasiswa']; ?></td>
				<td>
					<a href="edit.php?nim_mahasiswa=<?php echo $mahasiswa['nim_mahasiswa'];?>" type="button" class="btn btn-warning btn-sm">EDIT</a>
					
					<a href="proses_delete.php?nim_mahasiswa=<?php echo $mahasiswa['nim_mahasiswa'];?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('yakin mau di hapus?')">HAPUS</a>
				</td>
			</tr>
			<?php
			$no++;
			
		}
		?>

		
	</table>
	</div>
</div>

</body>
</html>