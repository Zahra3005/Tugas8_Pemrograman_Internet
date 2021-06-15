<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Absen</title>
</head>
<br><br><br><br>
<body>

  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Data Mata Kuliah</h1>
	<a class="btn btn-sm btn-warning" href="tblmk.php">Kembali</a>
	<br><br>
	<form align="center" action="Proses.php" method="post"> <strong>
		<label>Kode Mata Kuliah</label>
		<br>
		<input class="form-control" type="number" name="kode_mk">
		<br>
		<label>Nama Mata Kuliah</label>
		<br>
		<input class="form-control" type="text" name="nama_mk">
		<br>
		<label>Jumlah SKS</label>
		<br>
		<input class="form-control" type="number" name="jumlah_sks">
		<br>
		<label>Semester</label>
		<br>
		<input class="form-control" type="number" name="semester">
		<br>
		<label>Kode Prodi</label>
		<br>
		<input class="form-control" type="number" name="kode_prodi"> </strong>
		<br>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_mk">Submit</button>
		
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