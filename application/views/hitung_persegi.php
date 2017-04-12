<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Persegi</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Persegi</h1>
	<form action="<?php echo site_url('persegi/hasil');?>" method="POST">
		<label>sisi</label>
		<input type="text" value="" name="sisi"/><br><br>
		<select name="hitung">
			<option value="luas">luas</option>
			<option value="keliling">keliling</option>
		</select><br/><br/>
		<input type="submit" value="hitung">
	</form>
</body>
</html>