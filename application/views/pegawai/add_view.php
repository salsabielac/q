<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo form_open_multipart('pegawai/create');?>
	<legend>Tambah Data Pegawai</legend>
	<?php echo validation_errors();?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
		<label for="">NIP</label>
		<input type="text" name="nip" class="form-control" id="nip" placeholder="NIP">
		<label for="">Tanggal Lahir</label>
		<input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal Lahir">
		<label for="">Alamat</label>
		<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
		<label for="">Foto</label>
		<input type="file" name="userfile" size="20" >
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close();?>
</form>
		</div>
	</div>
</div>