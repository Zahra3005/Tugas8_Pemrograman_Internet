<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<html>
    <head>
    <title> Tabel Mata Kuliah</title>
    </head>
	<br><br><br><br>
    <body>
    <body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Mata Kuliah</h1>		
		<a class="btn btn-sm btn-success" href="create_mk.php">Tambah Data</a> 
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr align="center" style="background-color:pink;">
					<th>Kode Mata Kuliah</th>
					<th>Nama Mata kuliah</th>
					<th>Jumlah SKS</th>
					<th>Semester</th>
					<th>kode prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_mk();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$data->kode_mk ?></td>
							<td><?=$data->nama_mk ?></td>
							<td><?=$data->jumlah_sks ?></td>
							<td><?=$data->semester ?></td>
							<td><?=$data->kode_prodi ?></td>
							<td>
								<a name="edit_mk" id="edit_mk" class="btn btn-sm btn-warning" 
                					href="edit_mk.php?kode_mk=<?=$data->kode_mk ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" 
              				  		href="proses.php?kode_mk=<?=$data->kode_mk ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="9">Belum ada data pada tabel mata kuliah.</td>
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