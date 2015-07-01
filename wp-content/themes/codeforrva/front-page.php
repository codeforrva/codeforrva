<?php get_header(); ?>
	<section class="billboard">
		<div class="container">
			<div class="billboard__panel billboard__next-meetup">
<?php c4rva_show_widget_area("next_meetup"); ?>
			</div>
			<a class="billboard__button" href="#">Learn More</a>
		</div>
	</section>
	<section class="triptych">
		<div class="container">
			<div class="triptych__panel col-md-4">
<?php c4rva_show_widget_area("triptych_left"); ?>
			</div>
			<div class="triptych__panel col-md-4">
<?php c4rva_show_widget_area("triptych_center"); ?>
			</div>
			<div class="triptych__panel col-md-4">
<?php c4rva_show_widget_area("triptych_right"); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>