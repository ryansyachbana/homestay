
	<h2>Data Homestay</h2>
	<hr>
	<?= $this->session->flashdata('message'); ?>
	<table class="table table-bordered table-hover table-responsive table-striped">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama Homestay</th>
				<th style="text-align: center;">Foto Homestay</th>
				<th style="text-align: center;">Harga Homestay</th>
				<th style="text-align: center;">Tipe Kamar</th>
				<th style="text-align: center;">Alamat Homestay</th>
				<th style="text-align: center;">Latitude</th>
				<th style="text-align: center;">Longitude</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($datahome as $key => $value): ?>
				
			<tr>
				<td style="text-align: center;"><?php echo $key+1; ?></td>
				<td style="text-align: center;"><?php echo $value['nama_homestay'] ?></td>
				<td class="text-center">
					<img src="<?php echo base_url('assets/img/').$value['foto_homestay'] ?>" width="50px" height="50px" class="img-rounded">
				</td>
				<td style="text-align: center;"><?php echo $value['harga_homestay'] ?></td>
				<td style="text-align: center;"><?php echo $value['jumlah_kamar'] ?></td>
				<td style="text-align: center;"><?php echo $value['alamat_homestay'] ?></td>
				<td style="text-align: center;"><?php echo $value['latitude'] ?></td>
				<td style="text-align: center;"><?php echo $value['longitude'] ?></td>
				<td style="text-align: center;">
					<a href="<?php echo base_url(); ?>owner/Datahome/edit/<?php echo $value['id_homestay']; ?>" class="btn btn-info"><i  class="fa fa-edit"></i> edit</a>
					<a href="<?php echo base_url(); ?>owner/Datahome/hapus/<?php echo $value['id_homestay']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
