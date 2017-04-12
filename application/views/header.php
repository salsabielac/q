<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Salsabiela Cahyahaq</title>
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('bower_components/wow/css/libs/animate.css') ?>">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Visit Indonesia</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="<?php echo base_url('index.php/babon/home') ?>">Home</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Destination<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('index.php/babon/labuan') ?>">Labuan Bajo</a></li>
						<li><a href="<?php echo base_url('index.php/babon/lombok') ?>">Lombok</a></li>
						<li><a href="<?php echo base_url('index.php/babon/ubud') ?>">Ubud</a></li>
						<li><a href="<?php echo base_url('index.php/babon/uluwatu') ?>">Uluwatu</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Holiday Types<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('index.php/babon/culture') ?>">Culture</a></li>
						<li><a href="<?php echo base_url('index.php/babon/florafauna') ?>">Flora and Fauna</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url('index.php/babon/contact') ?>">Contact</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/babon/tampil')?>">Visitor Data</a>
				</li>
				<li>
					<a href="<?php echo base_url ('index.php/gallery')?>">Galeri</a>
				</li>				
			</ul>
		</div>
	</nav>

	<br>
	<br>	