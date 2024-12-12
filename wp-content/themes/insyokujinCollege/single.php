<?php get_header(); ?>
<div id="single_post" class="postBodyWrap">
  <!-- <section class="post_top single_top">
    <div class="overTxt">
      <p class="over_ttl_en">blog</p>
      <p class="over_txt"><?php single_cat_title(); ?></p>
    </div>
  </section> -->
  <div class="blogContentWrap">
    <main class="singleWrap primaryWrap" id="blog_single">

    <?php get_template_part('assets/parts/cta-button') ?>

      <div class="container">
        <div class="post_content">
          <div class="postArea">
            <?php if (have_posts()): ?>
              <?php while (have_posts()):
                the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                  <div class="article_header">
                    <h2 class="article_title"><?php the_title(); ?></h2>
                    <div class="article_meta">
                      <?php custom_breadcrumb(); ?>
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                    </div>
                  </div>
                  <div class="article_body">
                    <div class="content">
                      <?php the_content(); ?>
                      <?php
                      wp_link_pages(
                        array(
                          'before' => '<div class="pagebreak-links">',
                          'after' => '</div>',
                          'pagelink' => '<span class="page-number">%</span>',
                        )
                      ); ?>
                    </div>
                  </div>
                  <?php dynamic_sidebar('post-under-widget'); ?>
                  <div class="postLinks">
                    <div class="postLink postLink-prev">
                      <?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?>
                    </div>
                    <div class="postLink postLink-next">
                      <?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?>
                    </div>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </main>
    <aside class="sidebar_right secondaryWrap">
      <div class="asideInner">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- /sidebar -->
      </div>
    </aside>
  </div>
</div>
<?php get_footer(); ?>