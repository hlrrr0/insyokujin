<?php get_header(); ?>

<div id="container">
  <div class="site_content_contain">
    <div class="site_content_wrap">
      <!-- <section class="mv_area">
          <p>BLOG LIST</p>
        </section> -->
      <div class="site_content_area">
        <main class="primary site-main" id="main">
          <?php if (have_posts()): ?>
            <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
              echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
              echo '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件'; // 検索キーワードと該当件数を表示
            }
            ?>
            <?php while (have_posts()):
              the_post(); ?>
              <div class="article_list">
                <article>
                  <div class="entry-list-content">
                    <h3 class="entry-title">
                      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="entry-category">
                      <?php the_category(); ?>
                    </div>
                    <p class="entry-desc"><?php echo get_the_excerpt(); ?></p>

                    <div class="entry-meta">
                      <?php the_time('Y年m月d日(D)'); ?>
                    </div>
                  </div>
                  <div class="entry-list-thumnail">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </article>
              </div>
            <?php endwhile; ?>

          <?php else: ?>
            検索されたキーワードにマッチする記事はありませんでした
          <?php endif; ?>

          <?php get_template_part('assets/parts/request-foot') ?>
        </main>

        <!-- sidebar -->
        <!-- <?php get_sidebar(); ?> -->
        <!-- /sidebar -->
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>