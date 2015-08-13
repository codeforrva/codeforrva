<?php get_header(); ?>
<article class="page page-<?php the_slug(); ?> container">
  <div class="row">
  <header class="col-md-12"><h1 class="single-header"><?php the_title(); ?></h1></header>
  </div>
  <div class="row">
  <main class="col-md-12">
  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

    // Include the page content template.
    the_content();

  // End the loop.
  endwhile;
  ?>
  </main>
  </div>
</article>
<?php get_footer(); ?>
