<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LUNNO</title>

	<link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link rel="stylesheet"  href="<?php echo base_url('assets/admin/css/css.css') ?>">
	<link rel="stylesheet"  href="<?php echo base_url('assets/admin/css/admin.css') ?>">

</head>
<body style="background-color: #95a5a6">
	<div class="container" style="padding-top: 50px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Login Admin</h3>
					</div>					
					<div class="panel-body">						
						<form class="user" method="post" action="">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<button class="btn btn-danger btn-block">Log In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>  

</body>
</html>