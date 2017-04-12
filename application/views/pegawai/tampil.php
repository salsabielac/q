<div class="container">
<div class="table-responsive">
<table class="table table-hover">
<tbody>

<tr><th colspan="4">Data Pegawai</th></tr>
	<tr>
		<td>Nama</td>
		<td>NIP</td>
		<td>Tanggal</td>
		<td>Alamat</td>	
	</tr>
	<?php foreach ($biodata_object as $key): ?>
		<tr>
			<td><?php echo $key->nama ?></td>
			<td><?php echo $key->nip ?></td>
			<td><?php echo $key->tanggal."-".$key->bulan."-".$key->tahun ?></td>
			<td><?php echo $key->alamat ?></td>
		</tr>
		<?php endforeach; ?>
</tbody>
</table>
</div>
</div>