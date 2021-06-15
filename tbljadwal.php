<?php
include 'header.html';
include 'model.php';
$model = new Model();
?>
<!doctype html>
<html lang="en">

<html>
    <head>
    <title> Tabel Jadwal</title>
    </head>
	<br><br><br><br>
    <body>
    <body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Jadwal</h1>			
		<a class="btn btn-sm btn-success" href="create_jadwal.php">Tambah Data</a> 
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr align="center" style="background-color:pink;">
                    <th>id</th>
					<th>jadwal id</th>
                    <th>Kode dosen</th>
					<th>hari</th>
					<th>Tahun akademik</th>
					<th>Semester</th>
					<th>kode Mata Kuliah</th>
                    <th>Sesi</th>
                    <th>Jam Masuk</th>
                    <th>Jam keluar</th>
                    <th>kelas</th>
                    <th>Ruang</th>
                    <th>Status</th>
                    <th>Kelas sesi</th>
					<th>aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_jadwal();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$data->id ?></td>
							<td><?=$data->jadwal_id ?></td>
							<td><?=$data->kode_dosen ?></td>
							<td><?=$data->hari ?></td>
							<td><?=$data->tahun_akademik ?></td>
                            <td><?=$data->semester ?></td>
							<td><?=$data->kode_mk ?></td>
							<td><?=$data->sesi ?></td>
							<td><?=$data->jam_masuk ?></td>
							<td><?=$data->jam_keluar ?></td>
                            <td><?=$data->kelas ?></td>
							<td><?=$data->ruang ?></td>
							<td><?=$data->stat ?></td>
							<td><?=$data->kelas_sesi ?></td>
                            
							<td>
								<a name="edit_mk" id="edit_mk" class="btn btn-sm btn-warning" 
               						 href="edit_jadwal.php?id=<?=$data->id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" 
                					href="proses.php?id=<?=$data->id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="15">Belum ada data pada tabel jadwal.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>