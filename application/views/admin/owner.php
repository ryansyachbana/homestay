
	<h2 style="color: #16a085; font-weight: bold;">Data Owner</h2>
	<hr>
	<br>
	<?= $this->session->flashdata('message'); ?>
	<table class="table table-bordered table-hover table-responsive table-striped">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama Owner</th>
				<th style="text-align: center;">Email</th>
				<th style="text-align: center;">Username</th>
				<th style="text-align: center;">Alamat</th>
				<th style="text-align: center;">No Telepon</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($owner as $key => $value): ?>
				
			<tr>
				<td style="text-align: center;"><?php echo $key+1; ?></td>
				<td style="text-align: center;"><?php echo $value['nama_owner'] ?></td>
				<td style="text-align: center;"><?php echo $value['email'] ?></td>
				<td style="text-align: center;"><?php echo $value['username'] ?></td>
				<td style="text-align: center;"><?php echo $value['alamat_owner'] ?></td>
				<td style="text-align: center;"><?php echo $value['whatsapp_owner'] ?></td>
				<td style="text-align: center;">
					<!-- <a href="<?php echo base_url(); ?>admin/owner/edit/<?php echo $value['id_owner']; ?>" class="btn btn-info"><i class="fa fa-edit"></i> edit</a> -->
					<a href="<?php echo base_url(); ?>admin/owner/hapus/<?php echo $value['id_owner']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> hapus</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
