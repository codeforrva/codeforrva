<!DOCTYPE html>
<html>
<head>
	<title>Code For RVA</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Vollkorn:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Mapbox CSS -->
	<link href='https://api.tiles.mapbox.com/mapbox.js/v2.2.0/mapbox.css' rel='stylesheet' />
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="container">
			<a href="/"><img class="header__logo" src="/wp-content/themes/codeforrva/img/logo.png"></a>
			<?php c4rva_nav_menu(); ?>
		</div>
	</header>
