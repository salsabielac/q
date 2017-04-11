<div class="row">
	<?php foreach($tampil as $data): ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Kartu Tanda Mahasiswa</h3>
		</div>
		<div class="panel-body">
				<div class="form-group">
					<label>Nama</label>
					<input value=<?php echo $data->nama;?> type="text" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input value=<?php echo $data->nim;?> type="text" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label>Tempat, tanggal, lahir</label>
					<input value=<?php echo $data->ttl;?> type="text" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label>Jurusan</label>
					<input value=<?php echo $data->jurusan;?>type="text" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input value=<?php echo $data->alamat;?>type="text" class="form-control" readonly>
				</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>