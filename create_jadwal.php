<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Jadwal</title>
</head>
<br><br><br><br>
<body>

  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Data Jadwal</h1>
	<a class="btn btn-sm btn-warning" href="tbljadwal.php">Kembali</a>
	<br><br>
	<form align="center" action="Proses.php" method="post"> <strong>
		<label>Id</label>
		<br>
		<input class="form-control" type="number" name="id">
		<br>
		<label>Jadwal Id</label>
		<br>
		<input class="form-control" type="number" name="jadwal_id"><br>
		<br>
		<label>kode_dosen</label>
		<br>
		<input class="form-control" type="number" name="kode_dosen">
		<br>
		<label>hari</label>
		<br>
		<input class="form-control" type="text" name="hari">
		<br>
		<label>Tahun akademik</label>
		<br>
		<input class="form-control" type="number" name="tahun_akademik">
        <br>
		<label>Semester</label>
		<br>
		<input class="form-control" type="number" name="semester">
        <br>
		<label>Kode Mata Kuliah</label>
		<br>
		<input class="form-control" type="number" name="kode_mk">
        <br>
		<label>sesi</label>
		<br>
		<input class="form-control" type="number" name="sesi">
        <br>
		<label>Jam Masuk</label>
		<br>
		<input class="form-control" type="time" name="jam_masuk">
        <br>
		<label>jam Keluar</label>
		<br>
		<input class="form-control" type="time" name="jam_keluar">
        <br>
		<label>Kelas</label>
		<br>
		<input class="form-control" type="text" name="kelas">
        <br>
		<label>ruang</label>
		<br>
		<input class="form-control" type="text" name="ruang">
        <br>
		<label>Status</label>
		<br>
		<input class="form-control" type="text" name="Stat">
        <br>
		<label>Kelas Sesi</label>
		<br>
		<input class="form-control" type="number" name="Kelas_sesi"> </strong>
		<br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_jadwal">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>