<!DOCTYPE html>
<html>
<head>
	<title>LUNNO</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
	<div class="container" style="padding-top: 100px;">
		<div class="col-md-6 col-md-offset-3">
			<h1 style="text-align: center;"><strong>TAMBAH DATA</strong></h1>
			<br>
			<form method="POST">
				<div class="form-group">	
					<label>Nama</label>
					<input type="text" class="form-control" name="Nama">
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input type="text" class="form-control" name="NIM">
				</div>
				<div class="form-group">
					<label>Nilai UTS</label>
					<input type="input" class="form-control" name="nilai_uts">
				</div>
				<button class="btn btn-success btn-block">simpan</button>
			</form>
		</div>
	</div>
</body>
</html>