<section class="contact">
	<div id="map"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 contact__info">
				<h2 class="contact__info__title">Drop us a line.</h2>
				<p class="contact__info__text">We are always looking for problems to solve and for folks to help build solutions.</p>
			</div>
			<div class="col-md-5 col-md-offset-1 contact__form">
				<?php echo do_shortcode( '[contact-form-7 id="26" title="Footer Contact Form"]' ); ?>
			</div>
		</div>
	</div>
</section>
<footer class="footer">
	<div class="container">
		<img class="footer__logo" src="<?php echo get_stylesheet_directory_uri() . "/dist/img/logo.png"; ?>"><span class="footer__subtitle">a <a href="#">Code For America</a> Brigade</span>
		<ul class="footer__nav">
			<li class="footer__nav__item"><a href="#">Code of Conduct</a></li>
			<li class="footer__nav__item"><a href="#">Code For America</a></li>
			<li class="footer__nav__item"><a href="#">Open Data Portal</a></li>
		</ul>
	</div>
</footer>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- Mapbox JS -->
	<script src='https://api.tiles.mapbox.com/mapbox.js/v2.2.0/mapbox.js'></script>
	<script>
		// Provide your access token
		L.mapbox.accessToken = 'pk.eyJ1IjoiY29kZWZvcnJ2YSIsImEiOiI2Zl90Nk53In0.Z5abzPIO5z45GKyaizMFIg';
		// Create a map in the div #map
		var map = L.mapbox.map('map', 'codeforrva.mfoko7ik', {
			zoomControl: false,
		}).setView([37.538, -77.43], 14);
		map.dragging.disable();
		map.scrollWheelZoom.disable()
	</script>
<?php wp_footer(); ?>
</body>
</html>
