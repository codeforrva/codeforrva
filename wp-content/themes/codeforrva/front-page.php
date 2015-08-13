<?php $latest = c4rva_latest_news(); ?>
<?php get_header(); ?>
	<section class="billboard">
		<div class="container">
			<div class="billboard__panel mission">
				<h1 class="mission__title">We solve problems through data and technology.</h1>
				<p class="mission__statement">We are Code for RVA, a Code for America Brigade. We develop partnerships with municpal leaders, nonprofits, schools, and community members to better understand and serve our city.</p>
				<a class="button -clear" href="#map">Work with us.</a>
			</div>
			<?php if(!empty($latest)):?>
			<div class="billboard__panel news">
					<h3 class="news__title">Latest News</h3>
					<a href="<?php print get_permalink($latest["ID"]);?>" class="news__headline"><?php print $latest['post_title']; ?></a>
					<p class="news__summary"><?php print $latest['post_excerpt']; ?></p>
			</div>
			<?php endif;?>
			<div class="billboard__panel next-meetup">
					<?php c4rva_show_widget_area("next_meetup"); ?>
			</div>
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
	<script type="text/javascript">
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
		});
	</script>
<?php get_footer(); ?>
