<br>
<br>
<br>
<div class="container">
	<div class="row">
	<?php echo form_open_multipart('gallery/save')?>
		<div class="col-md-12">
			<div class="form-group">
				<label for="">File</label>
				<input type="file" name="gambar" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary">
			</div>
		</div>
		<?php echo form_close(); ?>
	
		<?php foreach($show as $data): ?> 	
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title ">Gallery</h3>
					<a href="<?= base_url('index.php/').'gallery/edit/'.$data->id ?>" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;
					<a href="<?= base_url('index.php/').'gallery/hapus/'.$data->id ?>" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-trash"></i></a>
				</div>
				<div class="panel-body">
					<img src="<?php echo base_url('gambar/upload/') ?><?php echo $data->photo ?>" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
</div>