<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-1">
			<form action="" method="post">
				<div class="wizard-header"><br>
					<h3 class="wizard-title" style="color: #16a085; font-weight: bold;">
						Daftarkan Destinasi
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
								<label class="control-label">Nama Destinasi</label>
								<input name="nama_destinasi" type="text" class="form-control" required="">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<!-- <div class="form-group label-floating"> -->
								<label class="control-label">Foto Destinasi</label>
								<input name="foto_destinasi" type="file" class="form-control" required="">
							<!-- </div> -->
						</div>
						<br>
						<br>
						<h4 style="color: #16a085; font-weight: bold;">Pilih lokasi destinasi</h4>
						<header>
							<button class="start-hack hidden">Hack it now !</button>
							<button class="stop-hack hidden">Disable hack</button>
						</header>						

						<div id="latmoved"></div>
						<div id="longmoved"></div>

						<div style="padding:10px">
							<div id="map"></div>
						</div>
						<br>
						<div class="input-group" >
							<span class="input-group-addon" >
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Latitude</label>
								<!-- <input name="latitude" type="text" class="form-control" required="" > -->
								<div type="number" name="latitude" id="latclicked" class="form-control"></div>
							</div>
						</div>
						<div class="input-group" >
							<span class="input-group-addon" >
							</span>
							<div class="form-group label-floating" >
								<label class="control-label">Longitude</label>
								<!-- <input name="longitude" type="text" class="form-control" required="" > -->
								<div name="longitude" id="longclicked" class="form-control"></div>
							</div>
						</div>
						<h4 style="color: #16a085; font-weight: bold;">Copy latitude dan  longitude diatas dan  masukkan pada form dibawah</h4>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Latitude</label>
								<input name="latitude"  class="form-control" required="">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Longitude</label>
								<input name="longitude"  class="form-control" required="">
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="wizard-footer">
					<div class="pull-right">
						<!-- <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Lanjut' /> -->
						<button class='btn btn-finish btn-fill btn-danger btn-wd'>Selesai</button>
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>
	</div> 
</div> 