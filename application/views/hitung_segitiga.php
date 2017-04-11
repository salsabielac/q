<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Segitiga</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Segitiga</h1>
	<form action="<?php echo site_url('segitiga/hasil');?>" method="POST">
		<label>sisi</label>
		<input type="text" value="" name="sisi"/><br><br>
		<label>alas</label>
		<input type="text" value="" name="alas"/><br><br>
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