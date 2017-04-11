<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trapesium</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Trapesium</h1>
	<form action="<?php echo site_url('trapesium/hasil');?>" method="POST">
		<label>s1</label>
		<input type="text" value="" name="s1"/><br><br>
		<label>s2</label>
		<input type="text" value="" name="s2"/><br><br>
		<label>tinggi</label>
		<input type="text" value="" name="tinggi"/><br><br>
		<select name="hitung">
			<option value="luas">luas</option>
			<option value="keliling">keliling</option>
		</select><br/><br/>
		<input type="submit" value="hitung">
	</form>
</body>
</html>