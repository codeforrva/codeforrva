<?php get_header(); ?>
<article class="page page__news container">
  <div class="row">
  <header class="col-md-12"><h1 class="single-header"><?php the_title(); ?></h1></header>
  </div>

  <ul class="media-list news-items">
  <?php $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  	<li class="news-item">
  		<h3 class="news-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p class="byline">Posted by <?php the_author_posts_link();?> on <?php the_time('F jS, Y'); ?> </p>
      <p><?php the_excerpt(); ?></p>
  	</li>
  <?php endforeach;
  wp_reset_postdata();?>
  </ul>



</article>
<?php get_footer(); ?>
