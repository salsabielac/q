<br><br><br><br>
<div class="container">
<div class="table-responsive">
<table class="table table-hover">
<tbody>
<tr><th colspan="4">Visitor Data</th></tr>
	<tr>
		<td>Name</td>
		<td>Address</td>
		<td>Email</td>
		<td>Telephone</td>
		<td>Destination</td>
		<td>Plans</td>	
	</tr>
	<?php foreach ($destination_object as $key): ?>
		<tr>
			<td><?php echo $key->name ?></td>
			<td><?php echo $key->address ?></td>
			<td><?php echo $key->email ?></td>
			<td><?php echo $key->telephone ?></td>
			<td><?php echo $key->destination ?></td>
			<td><?php echo $key->plans ?></td>

			<td><a href="<?=site_url()?>/babon/update/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			<td><a href="<?=site_url()?>/babon/delete/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class=" glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
