<?php get_header(); ?>

<main>

<?php 
  if(have_posts()):
    while(have_posts()) : the_post();
?>
  <div class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-meta">
      <span class="post-date"><?php the_time('Y年n月j日'); ?> @<?php the_time('g:i a'); ?></span>
      <span class="post-categories"><?php the_category(','); ?></span>
    </p>
    <?php the_excerpt(); ?>
  </div>
  <?php 
    endwhile; 
  else:
  ?>
  <div class="post">
      <h2>no articles</h2>
      <p>no articles</p>
  </div>
<?php 
  endif;
?>
<?php the_posts_pagination(); ?>
</main>

<?php get_footer(); ?>