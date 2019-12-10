<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
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
    <h3 style="text-align: center;">Form Edit Data</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['nim_mahasiswa'];
    $update = "SELECT * FROM tbl_mhs WHERE nim_mahasiswa='$id'";
    $data = mysqli_query($koneksi,$update);
    // membuat data jurusan menjadi dinamis dalam bentuk array
    $jurusan    = array('--pilih jurusan--','S1 ILKOM','S1 DKV','D3 MI','D3 RPL');
    // membuat function untuk set aktif radio button
    function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
    while ($d = mysqli_fetch_array($data)) {
        ?>
  
		<div class="col-sm-6">
		<form  method="POST" action="proses_update.php">
        <div class="row">
          <div class="col-sm-6">
            <label>Nim Mahasiswa</label>
          </div>
          <div class="col-sm-6">
            <input type="number" name="nim_mahasiswa" class="form-control" maxlength="10" value="<?php echo $d['nim_mahasiswa']; ?>" disabled>
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Nama Mahasiswa</label>
          </div>
          <div class="col-sm-6">
            <input type="text" name="nama_mahasiswa" class="form-control" value="<?php echo $d['nama_mahasiswa']; ?>">
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Jurusan</label>
          </div>
          <div class="col-sm-6">
            <select name="jurusan" value="<?php echo $d['jurusan'];?>">
                            <?php
                            foreach ($jurusan as $j){
                                echo "<option value='$j' ";
                                echo $d['jurusan']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
            </select>
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Semester</label>
          </div>
          <div class="col-sm-6">
            <input type="text" name="semester" class="form-control" value="<?php echo $d['semester']; ?>">
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Alamat</label>
          </div>
          <div class="col-sm-6">
            <textarea name="alamat" class="form-control"><?php echo $d['alamat']; ?></textarea>
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>No Hp</label>
          </div>
          <div class="col-sm-6">
            <input type="number" name="no_hp" class="form-control" maxlength="13" value="<?php echo $d['no_hp']; ?>">
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Email</label>
          </div>
          <div class="col-sm-6">
            <input type="email" name="email" class="form-control" value="<?php echo $d['email']; ?>">
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Jenis Kelamin</label>
          </div>
          <div class="col-sm-6">
            <input type="radio" name="jk" value="Laki-Laki" <?php echo active_radio_button("Laki-Laki", $d['jenis_kelamin'])?>> Laki-Laki
            <input type="radio" name="jk" value="Perempuan" <?php echo active_radio_button("Perempuan", $d['jenis_kelamin'])?>> Perempuan
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <label>Status Mahasiswa</label>
          </div>
          <div class="col-sm-6">
            <input type="radio" name="status" value="Aktif" <?php echo active_radio_button("Aktif", $d['status_mahasiswa'])?>> Aktif
            <input type="radio" name="status" value="Tidak Aktif" <?php echo active_radio_button("Tidak Aktif", $d['status_mahasiswa'])?>> Tidak Aktif
          </div>
        </div>

         <div class="row">
          <div class="col-sm-6">
            <button class="btn btn-primary btn-block" href="data_mahasiswa.php">
              SIMPAN PERUBAHAN
            </button>
    </div>
        </div>

        

      </form>
		</div>
		
    <?php
    }
    ?>
        
</div>
</body>
</html>