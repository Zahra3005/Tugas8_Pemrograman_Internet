<?php
include 'model.php';
if (isset($_POST['submit_absen'])) {
	$id_absen = $_POST['id_absen']; 
	$tgl_absen = $_POST['tgl_absen'];
	$masuk = $_POST['masuk'];
	$keluar = $_POST['keluar'];
    $kode_dosen = $_POST['kode_dosen'];
    $sesi = $_POST['sesi'];
	$kelas_sesi = $_POST['kelas_sesi'];
	$model = new Model();
	$model->insert_absen($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi);
	header('location:tblabsen.php');
}
if (isset($_POST['submit_editabsen'])) {
	$id_absen = $_POST['id_absen']; 
	$tgl_absen = $_POST['tgl_absen'];
	$masuk = $_POST['masuk'];
	$keluar = $_POST['keluar'];
    $kode_dosen = $_POST['kode_dosen'];
    $sesi = $_POST['sesi'];
	$kelas_sesi = $_POST['kelas_sesi'];
	$model = new Model();
	$model->update_absen($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi);
	header('location:tblabsen.php');
}

if (isset($_GET['id_absen'])) {
	$id_absen = $_GET['id_absen'];
	$model = new Model();
	$model->delete_absen($id_absen);
	header('location:tblabsen.php');
}

//prodi
if (isset($_POST['submit_prodi'])) {
	$kode_prodi = $_POST['kode_prodi']; 
	$nama_prodi = $_POST['nama_prodi'];
	$model = new Model();
	$model->insert_prodi($kode_prodi, $nama_prodi);
	header('location:tblprodi.php');
}

if (isset($_GET['kode_prodi'])) {
	$kode_prodi = $_GET['kode_prodi'];
	$model = new Model();
	$model->delete_prodi($kode_prodi);
	header('location:tblprodi.php');
}

if (isset($_POST['submit_editprodi'])) {
	$kode_prodi = $_POST['kode_prodi']; 
	$nama_prodi = $_POST['nama_prodi'];
	$model = new Model();
	$model->update_prodi($kode_prodi, $nama_prodi);
	header('location:tblprodi.php');
}

//dosen
if (isset($_POST['submit_dosen'])) {
	$kode_dosen = $_POST['kode_dosen']; 
	$nidn = $_POST['nidn'];
	$nipy = $_POST['nipy'];
	$nama_dosen = $_POST['nama_dosen'];
	$kode_prodi = $_POST['kode_prodi']; 
	$model = new Model();
	$model->insert_dosen($kode_dosen, $nidn, $nipy, $nama_dosen, $kode_prodi);
	header('location:tbldosen.php');
}

if (isset($_GET['kode_dosen'])) {
	$kode_dosen = $_GET['kode_dosen'];
	$model = new Model();
	$model->delete_dosen($kode_dosen);
	header('location:tbldosen.php');
}

if (isset($_POST['submit_editdosen'])) {
	$kode_dosen = $_POST['kode_dosen']; 
	$nidn = $_POST['nidn'];
	$nipy = $_POST['nipy'];
	$nama_dosen = $_POST['nama_dosen'];
	$kode_prodi = $_POST['kode_prodi']; 
	$model = new Model();
	$model->update_dosen($kode_dosen, $nidn, $nipy, $nama_dosen, $kode_prodi);
	header('location:tbldosen.php');
}

//jadwal

if (isset($_POST['submit_jadwal'])) {
	$id = $_POST['id']; 
	$jadwal_id = $_POST['jadwal_id'];
	$kode_dosen = $_POST['kode_dosen'];
	$hari = $_POST['hari'];
	$tahun_akademik = $_POST['tahun_akademik']; 
	$semester = $_POST['semester'];
	$kode_mk = $_POST['kode_mk'];  
	$sesi = $_POST['sesi'];
	$jam_masuk = $_POST['jam_masuk'];
	$jam_keluar = $_POST['jam_keluar'];
	$kelas = $_POST['kelas'];
	$ruang = $_POST['ruang'];
	$stat = $_POST['stat'];
	$kelas_sesi = $_POST['kelas_sesi'];
	$model = new Model();
	$model->insert_jadwal($id, $jadwal_id, $kode_dosen, $hari, $tahun_akademik, $semester, $kode_mk, $sesi,
	$jam_masuk, $jam_keluar, $kelas, $ruang, $stat, $kelas_sesi);
	header('location:tbljadwal.php');
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$model = new Model();
	$model->delete_jadwal($id);
	header('location:tbljadwal.php');
}

if (isset($_POST['submit_editjadwal'])) {
	$id = $_POST['id']; 
	$jadwal_id = $_POST['jadwal_id'];
	$kode_dosen = $_POST['kode_dosen'];
	$hari = $_POST['hari'];
	$tahun_akademik = $_POST['tahun_akademik']; 
	$semester = $_POST['semester'];
	$kode_mk = $_POST['kode_mk'];  
	$sesi = $_POST['sesi'];
	$jam_masuk = $_POST['jam_masuk'];
	$jam_keluar = $_POST['jam_keluar'];
	$kelas = $_POST['kelas'];
	$ruang = $_POST['ruang'];
	$stat = $_POST['stat'];
	$kelas_sesi = $_POST['kelas_sesi'];
	$model = new Model();
	$model->update_jadwal($id, $jadwal_id, $kode_dosen, $hari, $tahun_akademik, $semester, $kode_mk, $sesi,
	$jam_masuk, $jam_keluar, $kelas, $ruang, $stat, $kelas_sesi);
	header('location:tbljadwal.php');
}

//mata kuliah
if (isset($_POST['submit_mk'])) {
	$kode_mk = $_POST['kode_mk']; 
	$nama_mk = $_POST['nama_mk'];
	$jumlah_sks = $_POST['jumlah_sks'];
	$semester = $_POST['semester'];
	$kode_prodi = $_POST['kode_prodi']; 
	$model = new Model();
	$model->insert_mk($kode_mk, $nama_mk, $jumlah_sks, $semester, $kode_prodi);
	header('location:tblmk.php');
}

if (isset($_GET['kode_mk'])) {
	$kode_mk = $_GET['kode_mk'];
	$model = new Model();
	$model->delete_mk($kode_mk);
	header('location:tblmk.php');
}

if (isset($_POST['submit_editmk'])) {
	$kode_mk = $_POST['kode_mk']; 
	$nama_mk = $_POST['nama_mk'];
	$jumlah_sks = $_POST['jumlah_sks'];
	$semester = $_POST['semester'];
	$kode_prodi = $_POST['kode_prodi']; 
	$model = new Model();
	$model->update_dosen($kode_mk, $nama_mk, $jumlah_sks, $semester, $kode_prodi);
	header('location:tblmk.php');
}