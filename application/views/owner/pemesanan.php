
	<h2>Data Pemesanan</h2><br>
	<?= $this->session->flashdata('message'); ?>
	<table class="table table-bordered table-hover table-responsive table-striped">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama user</th>
				<th style="text-align: center;">No Telepon</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pemesanan as $key => $value): ?>
				
			<tr>
				<td style="text-align: center;"><?php echo $key+1; ?></td>
				<td style="text-align: center;"><?php echo $value->nama_user; ?></td>
				<td style="text-align: center;"><?php echo $value->whatsapp_user; ?></td>
				<td style="text-align: center;">
					<a href="<?php echo base_url(); ?>admin/owner/hapus/<?php echo $value->id_user; ?>" class="btn btn-danger">hapus</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>