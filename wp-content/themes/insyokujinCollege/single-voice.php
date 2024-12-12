<?php get_header(); ?>
<div id="voice_post" class="postBodyWrap">
    <section class="voice_top post_top">
        <div class="overTxt">
            <p class="over_ttl_en">voice</p>
            <p class="over_txt">卒業生の声</p>
        </div>
    </section>
    <?php get_template_part('assets/parts/cta-button') ?>
    <div class="blogContentWrap">
        <main class="voiceWrap primaryWrap">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <section class="topArea">
                <h2><?php echo post_custom('title'); ?></h2>
                <figure class="studentTopImage"><img src="<?php the_field('studentTopImage'); ?>" alt=""></figure>
                <p><?php echo nl2br( post_custom( 'voice_concept' ) ); ?></p>
                <div class="custom_taxonomy"><?php the_taxonomies( $voice ); ?></div>
            </section>
            <section class="voiceStory01">
                <div class="voiceInner">
                    <h3><?php echo post_custom('voiceTitle01'); ?></h3>
                    <figure class="voiceStory01Image"><img src="<?php the_field('studentImage01'); ?>" alt=""></figure>
                    <p class="voiceStory01Txt"><?php echo nl2br( post_custom( 'voiceText01' ) ); ?></p>
                </div>
            </section>
            <section class="voiceStory02">
                <div class="voiceInner">
                    <h3><?php echo post_custom('voiceTitle02'); ?></h3>
                    <figure class="voiceStory02Image"><img src="<?php the_field('studentImage02'); ?>" alt=""></figure>
                    <p class="voiceStory02Txt"><?php echo nl2br( post_custom( 'voiceText02' ) ); ?></p>
                </div>
            </section>
            <section class="voiceStory03">
                <div class="voiceInner">
                    <h3><?php echo post_custom('voiceTitle03'); ?></h3>
                    <figure class="voiceStory03Image"><img src="<?php the_field('studentImage03'); ?>" alt=""></figure>
                    <p class="voiceStory03Txt"><?php echo nl2br( post_custom( 'voiceText03' ) ); ?></p>
                </div>
            </section>
            <section class="voiceMessage">
                <h3>入学を検討しているあなたへ</h3>
                <p class="messageWrap">
                    <?php echo nl2br( post_custom( 'message' ) ); ?></p>
            </section>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </main>
        <aside class="sidebar_right secondaryWrap">
            <div class="asideInner">
                <?php dynamic_sidebar( 'side-widget' ); ?>
            </div>
        </aside>
    </div>
</div><!-- [ /#container ] -->
<?php get_footer(); ?>
