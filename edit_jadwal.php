<?php
include 'header.html';
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_jadwal($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Tabel Jadwal</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Data Jadwal</h1>
	<br><br>
	<form form align="center" action="proses.php" method="post"> <strong>
        <label>Id</label>
		<br>
		<input class="form-control" type="number" name="id" value="<?php echo $data->id ?>">
		<br>
		<label>Jadwal Id</label>
		<br>
		<input class="form-control" type="number" name="jadwal_id" value="<?php echo $data->jadwal_id ?>">
		<br>
		<label>kode_dosen</label>
		<br>
		<input class="form-control" type="number" name="kode_dosen" value="<?php echo $data->kode_dosen?>">
		<br>
		<label>hari</label>
		<br>
		<input class="form-control" type="text" name="hari" value="<?php echo $data->hari ?>">
		<br>
		<label>Tahun akademik</label>
		<br>
		<input class="form-control" type="number" name="tahun_akademik" value="<?php echo $data->tahun_akademik ?>">
        <br>
		<label>Semester</label>
		<br>
		<input class="form-control" type="number" name="semester" value="<?php echo $data->semester ?>">
        <br>
		<label>Kode Mata Kuliah</label>
		<br>
		<input class="form-control" type="number" name="kode_mk" value="<?php echo $data->kode_mk ?>">
        <br>
		<label>sesi</label>
		<br>
		<input class="form-control" type="number" name="sesi" value="<?php echo $data->sesi ?>">
        <br>
		<label>Jam Masuk</label>
		<br>
		<input class="form-control" type="time" name="jam_masuk" value="<?php echo $data->jam_masuk ?>"> 
        <br>
		<label>jam Keluar</label>
		<br>
		<input class="form-control" type="time" name="jam_keluar" value="<?php echo $data->jam_keluar ?>">
        <br>
		<label>Kelas</label>
		<br>
		<input class="form-control" type="text" name="kelas" value="<?php echo $data->kelas ?>"> 
        <br>
		<label>ruang</label>
		<br>
		<input class="form-control" type="text" name="ruang" value="<?php echo $data->ruang ?>">
        <br>
		<label>Status</label>
		<br>
		<input class="form-control" type="text" name="Stat" value="<?php echo $data->stat ?>">
        <br>
		<label>Kelas Sesi</label>
		<br>
        <input class="form-control" type="number" name="Kelas_sesi" value="<?php echo $data->kelas_sesi ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="tbljadwal.php">Kembali</a> <button class="btn btn btn-info" type="submit" name="submit_editjadwal">Submit</button> 
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
