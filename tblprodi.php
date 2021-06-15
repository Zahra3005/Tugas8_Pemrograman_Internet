<?php
include 'header.html';
include 'model.php';
$model = new Model();
$index = 1;
?>

<html>
    <head>
    <title> Tabel Data Keseluruhan</title>
    </head>
	<br><br><br><br>
    <body>
    <body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Keseluruhan </h1>	
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr align="center" style="background-color:yellow;">	
					<th>No.</th>
					<th>Nama Mata Kuliah</th>
					<th>Kode Dosen</th>
					<th>Ruang</th>
				</tr>
				<tr align="center" style="background-color:white;">	
					<th>1</th>
					<th>Pemrograman Web</th>
					<th>1111</th>
					<th>1</th>
				</tr>
				<tr align="center" style="background-color:white;">	
					<th>2</th>
					<th>RPL</th>
					<th>2222</th>
					<th>2</th>
				</tr>
				<tr align="center" style="background-color:white;">	
					<th>3</th>
					<th>ANSI</th>
					<th>3333</th>
					<th>3</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model->tampil_prodi();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$index++ ?></td>
							<td><?=$data->kode_prodi ?></td>
							<td><?=$data->nama_prodi ?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_prodi.php?kode_prodi=<?=$data->kode_prodi ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?kode_prodi=<?=$data->kode_prodi ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>