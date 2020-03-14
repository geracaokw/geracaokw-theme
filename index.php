<?php 
  get_header();
?>

<main class="main" role="main">
  <article class="post">
    <?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>