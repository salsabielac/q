<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lingkaran</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Lingkaran</h1>
	<form action="<?php echo site_url('lingkaran/hasil');?>" method="POST">
		<label>jari-jari</label>
		<input type="text" value="" name="r"/><br><br>
		<select name="hitung">
			<option value="luas">luas</option>
			<option value="keliling">keliling</option>
		</select><br/><br/>
		<input type="submit" value="hitung">
	</form>
</body>
</html>