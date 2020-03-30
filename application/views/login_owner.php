<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">

	<title>LUNNO</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
		<div class="logo-container">
			<div class="brand">
				<a href="<?php echo base_url('tuser') ?>" style="color:white;"><h2><strong>BACK</strong></h2></a>
			</div>
		</div>
		<br>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="wizard-container">
						<div class="card wizard-card" data-color="green" id="wizardProfile">
							<form action="" method="post">
								<div class="wizard-header">
									<h2 class="wizard-title">
										Login Owner
									</h2>
									<br>
									<?= $this->session->flashdata('message'); ?>
									<h5>Masukkan informasi tambahan saat anda melakukan register.</h5>
								</div>								                        
								<div class="tab-pane" id="address">
									<div class="row">
										<div class="col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">
											<div class="form-group label-floating">
												<label class="control-label">Username</label>
												<input type="text" name="username" class="form-control">
											</div>
										</div>	                                    
										<div class="col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">
											<div class="form-group label-floating">
												<label class="control-label">Password</label>
												<input type="Password" name="password" class="form-control">
											</div>
										</div>  
									</div>
									<hr style="border-top: 2px solid; border-color: #ecf0f1; width: 400px;padding: 5px;">
									<div class="col-sm-12 text-center" style="margin-bottom: 10px;">
										<p >Belum punya akun ?<a href="<?php echo base_url('downer') ?>"> Register now</a></p>
									</div> 
									<button class='btn btn-primary btn-block' style="font-size: 18px; background-color: #2ecc71;">Masuk</button>
								</div>
							</form>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<div class="footer">
			<div class="container text-center">
				Made<i class="fa fa-brand brand"></i> by <a href="">LUNNO</a>
			</div>
		</div>
	</div> 

</body>

<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>
<script src="assets/js/material-bootstrap-wizard.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>

</html>
