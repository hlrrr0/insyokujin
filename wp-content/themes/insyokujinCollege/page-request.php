<?php
/*
Template Name: 資料請求
*/
get_header();
?>

<div id="container">

    <main class="contact">

        <section class="request_top">
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/post/request-top.jpg"
                    media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/post/request-top_sp.jpg" alt="">
            </picture>
        </section>

        <section class="breadcrumbArea">
            <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                        <span itemprop="name">TOP</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <a itemscope="" itemtype="https://schema.org/WebPage" itemprop="item" tabindex="-1">
                        <span itemprop="name">資料請求</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </section>

        <!-- <section class="contactNotice">
            <h1 class="page__heading">資料請求</h1>
            <p class="page">飲食人大学について、学科・コース内容・費用についてなど、<br class="br-pc">ご相談やご質問がございましたらお気軽にお問い合わせください。</p>
        </section> -->
        <section class="contactForm Form" style="border: none; padding-top: 0">
            <?php echo do_shortcode('[contact-form-7 id="641" html_class="h-adr" title="資料請求"]'); ?>
        </section>

    </main>

</div>

<?php get_footer(); ?>