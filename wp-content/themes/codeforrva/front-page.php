<?php $latest = c4rva_latest_news(); ?>
<?php get_header(); ?>
	<section class="billboard">
		<div class="container">
			<div class="billboard__panel mission">
				<h1 class="mission__title">We use technology to solve social problems.</h1>
				<p class="mission__statement">We are Code for RVA, a Code for America Brigade. We develop partnerships with municipal and community partners in order to collaborate together to better understand where we can make an impact in our community.</p>
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
<?php get_footer(); ?>
