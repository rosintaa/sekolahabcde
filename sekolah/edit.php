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
    <?php
        include('connect.php');
        $id=$_GET ['id'];
        $data=mysqli_query($con,"SELECT * FROM siswa WHERE id='$id'");
        $isi=mysqli_fetch_array($data);
    ?>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $isi['id'];?>">
        <div class="modal-header">						
            <h4 class="modal-title">Ubah Siswa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">					
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required  value="<?php echo $isi['nama'];?>">
            </div>
            <div class="form-group">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control" required  value="<?php echo $isi['nis'];?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" required><?php echo $isi['alamat'];?></textarea>
            </div>					
        </div>
        <div class="modal-footer">
            <a href="index.php" class="btn btn-default" role="button">Batal</a>
            <input type="submit" class="btn btn-info" value="Save">
        </div>
    </form>
</div>

</body>
</html>