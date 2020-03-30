
	<h2 style="color: #16a085; font-weight: bold;">Data User</h2>
	<hr>
	<br>
	<table class="table table-bordered table-hover table-responsive table-striped">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama User</th>
				<th style="text-align: center;">Email</th>
				<th style="text-align: center;">Username</th>
				<th style="text-align: center;">No Telepon</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($user as $key => $value): ?>
				
			<tr>
				<td style="text-align: center;"><?php echo $key+1; ?></td>
				<td style="text-align: center;"><?php echo $value['nama_user'] ?></td>
				<td style="text-align: center;"><?php echo $value['email'] ?></td>
				<td style="text-align: center;"><?php echo $value['username'] ?></td>
				<td style="text-align: center;"><?php echo $value['whatsapp_user'] ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
