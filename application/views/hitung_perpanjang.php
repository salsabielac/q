<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Persegi Panjang</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Persegi Panjang</h1>
	<form action="<?php echo site_url('perpanjang/hasil');?>" method="POST">
		<label>panjang</label>
		<input type="text" value="" name="panjang"/><br><br>
		<label>lebar</label>
		<input type="text" value="" name="lebar"/><br><br>
		<select name="hitung">
			<option value="luas">luas</option>
			<option value="keliling">keliling</option>
		</select><br/><br/>
		<input type="submit" value="hitung">
	</form>
</body>
</html>