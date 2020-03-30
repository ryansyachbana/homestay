
	<h2 style="color: #16a085; font-weight: bold;">Data Destinasi</h2>
	<hr>
	<a href="<?php echo base_url('admin/destinasi/tambah') ?>" class="btn btn-success btn-lg"><i class="fa fa-user-plus"></i> Tambah Data</a><br><br>
	<?= $this->session->flashdata('message'); ?>
	<table class="table table-bordered table-hover table-responsive table-striped">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama Destinasi</th>
				<th style="text-align: center;">Foto Destinasi</th>
				<th style="text-align: center;">Latitude</th>
				<th style="text-align: center;">Longitude</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($destinasi as $key => $value): ?>
				
			<tr>
				<td style="text-align: center;"><?php echo $key+1; ?></td>
				<td style="text-align: center;"><?php echo $value['nama_destinasi'] ?></td>
				<td class="text-center">
					<img src="<?php echo base_url('assets/img/').$value['foto_destinasi'] ?>" width="50px" height="50px" class="img-rounded">
				</td>
				<!-- <td style="text-align: center;"><?php echo $value['foto_destinasi'] ?></td> -->
				<td style="text-align: center;"><?php echo $value['latitude'] ?></td>
				<td style="text-align: center;"><?php echo $value['longitude'] ?></td>
				<td style="text-align: center;">
					<a href="<?php echo base_url(); ?>admin/destinasi/edit/<?php echo $value['id_destinasi_wisata']; ?>" class="btn btn-info"><i  class="fa fa-edit"></i> edit</a>
					<a href="<?php echo base_url(); ?>admin/destinasi/hapus/<?php echo $value['id_destinasi_wisata']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
