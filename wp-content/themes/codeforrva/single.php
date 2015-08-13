<?php get_header(); ?>
<article class="post container">
<?php  while ( have_posts() ) : the_post(); ?>
<header class="col-md-12">
  <h1 class="single-header"><?php the_title(); ?></h1>
  <p class="byline -has-space">Posted by <?php the_author_posts_link();?> on <?php the_time('F jS, Y'); ?> </p>
</header>
    <div class="col-md-12 post__content">
    <?php print the_content(); ?>
    </div>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>
