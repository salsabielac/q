<br>
<br>
<?php $this->load->view('header');?>
<div class="row">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
		<?php echo form_open('babon/update/'.$this->uri->segment(3)); ?>
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="bold">EDIT VISITOR DATA</h3>
				<?php echo validation_errors();?>
				<hr>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" value="<?php echo $destination[0]->name?>" class="form-control" placeholder="Name">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" value="<?php echo $destination[0]->address?>" class="form-control" placeholder="Address">
				</div>
				<div class="form-group">
					<label>E-Mail</label>
					<input type="text" name="email" value="<?php echo $destination[0]->email?>" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<label>Telephone</label>
					<input type="text" name="telephone" value="<?php echo $destination[0]->telephone?>" class="form-control" placeholder="Telephone">
				</div>
				<div class="form-group">
					<label>Destination</label>
					<select name="destination" value="<?php echo $destination[0]->destination?>" class="form-control">
						<option value="labuanbajo">Labuan Bajo</option>
						<option value="lombok">Lombok</option>
						<option value="ubud">Ubud</option>
						<option value="uluwatu">Uluwatu</option>
					</select>
				</div>
				<div class="form-group">
					<label>Travel Plans</label>
					<textarea name="plans" value="<?php echo $destination[0]->plans?>" class="form-control" rows=5 placeholder="Tell us about your travel plans!"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">START MY JOURNEY</button>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>