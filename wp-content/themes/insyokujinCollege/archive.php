<?php get_header(); ?>
<div id="voice_post" class="postBodyWrap">
    <section class="postArchiveTop post_top">
        <div class="overTxt">
            <p class="over_ttl_en">blog</p>
            <p class="over_txt"><?php single_cat_title(); ?></p>
        </div>
    </section>
    <div class="archive_breadcrumb">
        <?php custom_breadcrumb(); ?>
    </div>
    <div class="blogContentWrap">

        <main id="postArchive" class="postWrap primaryWrap">
            <?php get_template_part('assets/parts/cta-button') ?>
            
            <section class="archiveWrap">
                <div class="archiveBox">
                    <ul class="archiveContent">
                        <?php if (have_posts()):
                            while (have_posts()):
                                the_post(); ?>
                                <li class="blogBox">
                                    <a href="<?php the_permalink() ?>">
                                        <figure>
                                            <span class="thumWrap">
                                                <?php the_post_thumbnail(); ?>
                                            </span>
                                            <figcaption>
                                                <p class="bl_date"><?php the_time('Y年m月d日(D)'); ?></p>
                                                <h3><?php the_title(); ?></h3>
                                                <p class="bl_category"><?php the_category(', '); ?></p>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                            <?php endwhile;
                            ?>
                            <?php the_posts_pagination(); ?>
                        <?php else: ?>
                            <p>まだ記事がありません</p>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>
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