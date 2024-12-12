<?php get_header(); ?>
<div id="container">

<ul>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<li><?php the_time('Y年m月d日(D)'); ?><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>

</ul>


</div><!-- [ /#container ] -->

<?php get_footer(); ?>