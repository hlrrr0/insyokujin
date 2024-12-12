<?php
/*
Template Name: 寿司職人適性診断
*/
get_header();
?>

<div id="container">

  <main class="contact">

    <section class="tour_top post_top">
      <!-- <div class="overTxt">
        <p class="over_ttl_en"> Trial Session</p>
        <p class="over_txt">体験会</p>
      </div> -->
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
            <span itemprop="name">寿司職人適性診断</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section>

    <section class="contactNotice">
    <h1 class="page__heading">寿司職人適性診断</h1>
      <p class="page">適性診断では、プロ講師と一緒に握り体験などを行い、あなたの向き不向きを診断します。<br class="br-pc">「自分にできるかな」という不安やどんな仕事かなという疑問に答えます。</p>

    </section>
    <section class="contactForm Form">
      <?php echo do_shortcode('[contact-form-7 id="648ea20" title="寿司職人適性診断"]'); ?>
    </section>

    <hr>

    <?php get_template_part('assets/parts/contact-notice') ?>

  </main>

</div>

<?php get_footer(); ?>