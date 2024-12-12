<?php
/*
Template Name: (wip)サンクスページ台湾校LP
*/
?>

<?php get_header(); ?>

<div id="container" <?php if (is_page('lpa')) { echo 'style="margin-top: 0;"'; } ?>>


  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; endif; ?>

</div><!-- [ /#container ] -->

<?php get_footer(); ?>