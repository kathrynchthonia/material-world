<?php get_header(); ?>


  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="container flow-text">
      <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found') ?></p>
    <?php endif; ?>


<?php get_footer(); ?>