<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/icon?family=Material+Icons);
@import url("https://fonts.googleapis.com/css?family=Raleway");


  .wrapper {
  	display: -webkit-box;
  	display: -ms-flexbox;
  	display: flex;
  	-webkit-box-orient: horizontal;
  	-webkit-box-direction: normal;
  	-ms-flex-direction: row;
  	flex-direction: row;
  	-ms-flex-wrap: wrap;
  	flex-wrap: wrap;
  	-webkit-box-align: center;
  	-ms-flex-align: center;
  	align-items: center;
  	-webkit-box-pack: center;
  	-ms-flex-pack: center;
  	/*justify-content: center;*/
  }

  h1 {
  	font-family: inherit;
  	margin: 0 0 .75em 0;
  	color: #728c8d;
  	text-align: center;
  }

  .box {
  	display: block;
  	min-width: 250px;
  	height: 300px;
  	margin: 10px;
  	background-color: white;
  	border-radius: 5px;
  	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  	-webkit-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  	transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  	overflow: hidden;
  }

  .upload-options {
  	position: relative;
  	height: 75px;
  	background-color: cadetblue;
  	cursor: pointer;
  	overflow: hidden;
  	text-align: center;
  	-webkit-transition: background-color ease-in-out 150ms;
  	transition: background-color ease-in-out 150ms;
  }
  .upload-options:hover {
  	background-color: #7fb1b3;
  }
  .upload-options input {
  	width: 0.1px;
  	height: 0.1px;
  	opacity: 0;
  	overflow: hidden;
  	position: absolute;
  	z-index: -1;
  }
  .upload-options label {
  	display: -webkit-box;
  	display: -ms-flexbox;
  	display: flex;
  	-webkit-box-align: center;
  	-ms-flex-align: center;
  	align-items: center;
  	width: 100%;
  	height: 100%;
  	font-weight: 400;
  	text-overflow: ellipsis;
  	white-space: nowrap;
  	cursor: pointer;
  	overflow: hidden;
  }
  .upload-options label::after {
  	content: 'add';
  	font-family: 'Material Icons';
  	position: absolute;
  	font-size: 2.5rem;
  	color: #e6e6e6;
  	top: calc(50% - 2.5rem);
  	left: calc(50% - 1.25rem);
  	z-index: 0;
  }
  .upload-options label span {
  	display: inline-block;
  	width: 50%;
  	height: 100%;
  	text-overflow: ellipsis;
  	white-space: nowrap;
  	overflow: hidden;
  	vertical-align: middle;
  	text-align: center;
  }
  .upload-options label span:hover i.material-icons {
  	color: lightgray;
  }

  .js--image-preview {
  	height: 225px;
  	width: 100%;
  	position: relative;
  	overflow: hidden;
  	background-image: url("");
  	background-color: white;
  	background-position: center center;
  	background-repeat: no-repeat;
  	background-size: cover;
  }
  .js--image-preview::after {
  	content: "photo_size_select_actual";
  	font-family: 'Material Icons';
  	position: relative;
  	font-size: 4.5em;
  	color: #e6e6e6;
  	top: calc(50% - 3rem);
  	left: calc(50% - 2.25rem);
  	z-index: 0;
  }
  .js--image-preview.js--no-default::after {
  	display: none;
  }

  i.material-icons {
  	-webkit-transition: color 100ms ease-in-out;
  	transition: color 100ms ease-in-out;
  	font-size: 2.25em;
  	line-height: 55px;
  	color: white;
  	display: block;
  }

  .drop {
  	display: block;
  	position: absolute;
  	background: rgba(95, 158, 160, 0.2);
  	border-radius: 100%;
  	-webkit-transform: scale(0);
  	transform: scale(0);
  }

  .animate {
  	-webkit-animation: ripple 0.4s linear;
  	animation: ripple 0.4s linear;
  }

  @-webkit-keyframes ripple {
  	100% {
  		opacity: 0;
  		-webkit-transform: scale(2.5);
  		transform: scale(2.5);
  	}
  }

  @keyframes ripple {
  	100% {
  		opacity: 0;
  		-webkit-transform: scale(2.5);
  		transform: scale(2.5);
  	}
  }


        #map {
            height: 500px;
            width: 700px;
        }
    

</style>

<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-1">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="wizard-header"><br>
					<h3 class="wizard-title" style="color: #16a085; font-weight: bold;">
						Daftarkan Homestay Anda
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
								<label class="control-label">Nama Homestay</label>
								<input name="nama_homestay" type="text" class="form-control" required="">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Harga Permalam</label>
								<input name="harga_homestay" type="text" class="form-control" required="">
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Pilih Tipe Kamar</label>
								<select class="form-control" name="jumlah_kamar" required="" >
									<option disabled="" selected=""></option>
									<option  value="sendiri">Sendiri</option>
									<option  value="keluarga">Keluarga</option>
									<option  value="group">Group</option>
								</select>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Pilih Destinasi Wisata</label>
								<select class="form-control" name="id_destinasi_wisata" required="">
									<option disabled="" selected=""></option>
									<?php foreach ($destinasi as $key => $value): ?>
										<option value="<?php echo $value['id_destinasi_wisata'] ?>"><?php echo $value['nama_destinasi']?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Pilih kategori Homestay</label>
								<select class="form-control" name="id_kategori_homestay" required="" >
									<option disabled="" selected=""></option>
									<?php foreach ($kategori_homestay as $key => $value): ?>
										<option value="<?php echo $value['id_kategori_homestay'] ?>"><?php echo $value['nama_kategori_homestay'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Alamat Homestay</label>
								<textarea class="form-control" name="alamat_homestay"  placeholder="" rows="4" required=""></textarea>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="tab-pane" id="description">
					<div class="row">
						<h4 class="info-text" style="color: #16a085; font-weight: bold;"> Masukkan deskripsi singkat homestay anda</h4>
						<br>
						<div class="col-sm-7 col-sm-offset-1">
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea class="form-control" name="deskripsi_homestay"  placeholder="" rows="6"></textarea>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="control-label">Contoh</label>
								<p class="description">"fasilitas homestay, dll."</p>
							</div>
						</div>
					</div>
				</div>
				<br><br>

        <h4 style="color: #16a085; font-weight: bold;">Pilih lokasi homestay</h4>
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
        <br>

				<div class="row">
					<div class="col-sm-12" style="padding: 0">
						<h4 style="color: #16a085; font-weight: bold;">Masukkan Foto Homestay Anda</h4>
						<div class="col-sm-8">
							<!-- <div class="wrapper"> -->
								<div class="box">
									<div class="js--image-preview"></div>
									<div class="upload-options">
										<label>
											<input type="file" name="foto_homestay" class="image-upload" accept="image/*" />
										</label>
									</div>
								</div>
							<!-- </div> -->
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

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >function initImageUpload(box) {
	let uploadField = box.querySelector('.image-upload');

	uploadField.addEventListener('change', getFile);

	function getFile(e){
		let file = e.currentTarget.files[0];
		checkType(file);
	}

	function previewImage(file){
		let thumb = box.querySelector('.js--image-preview'),
		reader = new FileReader();

		reader.onload = function() {
			thumb.style.backgroundImage = 'url(' + reader.result + ')';
		}
		reader.readAsDataURL(file);
		thumb.className += ' js--no-default';
	}

	function checkType(file){
		let imageType = /image.*/;
		if (!file.type.match(imageType)) {
			throw 'Datei ist kein Bild';
		} else if (!file){
			throw 'Kein Bild gewählt';
		} else {
			previewImage(file);
		}
	}

}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for(let i = 0; i < boxes.length; i++) {if (window.CP.shouldStopExecution(1)){break;}
	let box = boxes[i];
initDropEffect(box);
initImageUpload(box);
}
window.CP.exitedLoop(1);




/// drop-effect
function initDropEffect(box){
	let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
  	area = e.currentTarget
    // create drop
    if(!drop){
    	drop = document.createElement('span');
    	drop.className = 'drop';
    	this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
}
}

//# sourceURL=pen.js
</script>
