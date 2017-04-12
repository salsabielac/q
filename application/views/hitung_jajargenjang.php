<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jajar Genjang</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Jajar Genjang</h1>
	<form action="<?php echo site_url('jajargenjang/hasil');?>" method="POST">
		<label>alas</label>
		<input type="text" value="" name="alas"/><br><br>
		<label>tinggi</label>
		<input type="text" value="" name="tinggi"/><br><br>
		<label>sisi miring</label>
		<input type="text" value="" name="siring"/><br><br>
		<select name="hitung">
			<option value="luas">luas</option>
			<option value="keliling">keliling</option>
		</select><br/><br/>
		<input type="submit" value="hitung">
	</form>
</body>
</html>