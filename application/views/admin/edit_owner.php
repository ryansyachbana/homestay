<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-1">
			<form action="" method="post">
				<div class="wizard-header"><br>
					<h3 class="wizard-title">
						Edit Data Owner
					</h3>
					<hr>
					<br>
				</div>
				<div class="row">
					<div class="col-sm-12">
					</div>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Nama Owner</label>
								<input name="nama_owner" type="text" class="form-control" required="" value="<?php echo $ambil_owner['nama_owner'] ?>">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Email</label>
								<input name="email" type="text" class="form-control" required="" value="<?php echo $ambil_owner['email'] ?>">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Username</label>
								<input name="username" type="text" class="form-control" required="" value="<?php echo $ambil_owner['username'] ?>">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Alamat</label>
								<input name="alamat_owner" type="text" class="form-control" required="" value="<?php echo $ambil_owner['alamat_owner'] ?>">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">No Telepon</label>
								<input name="whatsapp_owner" type="text" class="form-control" required="" value="<?php echo $ambil_owner['whatsapp_owner'] ?>">
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="wizard-footer">
					<div class="pull-left">
						<!-- <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Lanjut' /> -->
						<button class='btn btn-finish btn-fill btn-danger btn-wd'>Selesai</button>
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>
	</div> 
</div> 