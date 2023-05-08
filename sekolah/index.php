<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>TEST</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Data <b>Siswa</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#tambahSiswa" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Siswa</span></a>
						<a href="deleteAll.php" class="btn btn-danger"><i class="material-icons">&#xE15C;</i> <span>Hapus Data Siswa</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NIS</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('connect.php');
						$data=mysqli_query($con,"SELECT * FROM siswa");
						$no=0;
					while( $isi=mysqli_fetch_array($data)){
					$no++;
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $isi['nama']; ?></td>
						<td><?php echo $isi['nis'];?></td>
						<td><?php echo $isi['alamat']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $isi['id']; ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="delete.php?id=<?php echo $isi['id']; ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>

<div id="tambahSiswa" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="submit.php">
				<div class="modal-header">						
					<h4 class="modal-title">Tambah Siswa</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>NIS</label>
						<input type="text" name="nis" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat" required></textarea>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
					<input type="submit" class="btn btn-success" value="Tambahkan">
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>