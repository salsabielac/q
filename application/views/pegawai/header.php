<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Salsabiela Cahyahaq</title>
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">CRUD CI Bootstrap</a>
		<ul class="nav navbar-nav">
			<li>
				<a href="<?php echo base_url('index.php/pegawai')?>">Data Pegawai</a>
			</li>
			<li>
				<a href="<?php echo base_url('index.php/pegawai/create')?>">Tambah Data</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>
	</div>
</div>