<br>
<br>
<?php $this->load->view('pegawai/header');?>
<div class="row">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
		<?php echo form_open('pegawai/update/'.$this->uri->segment(3)); ?>
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="bold">EDIT PEGAWAI</h3>
				<?php echo validation_errors();?>
				<hr>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" value="<?php echo $pegawai[0]->nama?>" class="form-control" placeholder="Nama">
				</div>
				<div class="form-group">
					<label>NIP</label>
					<input type="text" name="nip" value="<?php echo $pegawai[0]->nip?>" class="form-control" placeholder="NIP">
				</div>
				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" name="tanggal" value="<?php echo $pegawai[0]->tanggal?>" class="form-control" placeholder="Tanggal">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" value="<?php echo $pegawai[0]->alamat?>" class="form-control" placeholder="Alamat">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default">Submit</button>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>