<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Layang-layang</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Layang-layang</h1>
	<form action="<?php echo site_url('layangan/hasil');?>" method="POST">
		<label>diagonal1</label>
		<input type="text" value="" name="d1"/><br><br>
		<label>diagonal2</label>
		<input type="text" value="" name="d2"/><br><br>
		<select name="hitung">
			<option value="luas">luas</option>
			<option value="keliling">keliling</option>
		</select><br/><br/>
		<input type="submit" value="hitung">
	</form>
</body>
</html>