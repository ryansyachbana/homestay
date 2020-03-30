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
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-profile.jpg')">
		<div class="logo-container">
			<div class="brand">
				<a href="<?php echo base_url('landing') ?>" style="color:white;"><h2><strong>BACK</strong></h2></a>
			</div>
		</div>
		<br>

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="wizard-container">
						<div class="card wizard-card" data-color="green" id="wizardProfile">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="wizard-header">
									<h3 class="wizard-title">
										Daftar Akun Anda
									</h3>
									<h5>Informasi ini akan memberitahu kami tentang anda.</h5>
								</div>
								<div class="wizard-navigation">
									<ul>
										<li><a href="#about" data-toggle="tab">Data Diri</a></li>
										<li><a href="#address" data-toggle="tab">Details</a></li>
									</ul>
								</div>

								<div class="tab-content">
									<div class="tab-pane" id="about">
										<div class="row">
											<h4 class="info-text"> Mari mulai dengan informasi dasar (dengan validasi)</h4>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="<?php echo base_url('assets/img/default-avatar.png') ?>" class="picture-src" id="wizardPicturePreview" title=""/>
														<input type="file" name="foto_user" id="wizard-picture" value="default-avatar.png">
													</div>
													<h6>pilih gambar</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Nama <small>(harus diisi)</small></label>
														<input name="nama_user" type="text" class="form-control" required="">
													</div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">call</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">No Telepon <small>(harus diisi)</small></label>
														<input name="whatsapp_user" type="text" class="form-control" required="">
													</div>
												</div>		                                    	
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Email <small>(harus diisi)</small></label>
														<input name="email" type="email" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>		                        
									<div class="tab-pane" id="address">
										<div class="row">
											<div class="col-sm-12 col-sm-offset-0">
												<h4 class="info-text"> Informasi tambahan ini digunakan saat anda Login </h4>
											</div>
											<div class="col-sm-6 col-sm-offset-3">
												<div class="form-group label-floating">
													<label class="control-label">Username</label>
													<input type="text" name="username" class="form-control">
												</div>
											</div>
											<div class="col-sm-6 col-sm-offset-3">
												<div class="form-group label-floating">
													<label class="control-label">Password</label>
													<input type="Password" name="password" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wizard-footer">
									<div class="pull-right">
										<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='lanjut' value='Lanjut' />
										<!-- <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='selesai' value='Selesai' /> -->
										<button class='btn btn-finish btn-fill btn-success btn-wd'>Selesai</button>
									</div>
									<div class="pull-left">
										<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='kembali' value='Kembali' />
									</div>
									<div class="clearfix"></div>
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
