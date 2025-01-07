<?php
/*
Template Name: オープンキャンパス
*/
get_header();
?>

<div id="container">

  <main class="contact">

    <section class="trial_top post_top">
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
            <span itemprop="name">オープンキャンパス</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section>

    <section class="contactNotice">
      <h1 class="page__heading">オープンキャンパス</h1>
      <p class="page">説明会・授業見学・相談・質問・試食をたった3時間で完結できるイベントです！
        <br class="br-pc">現役受講生が実際に握ったお寿司の試食も可能！</p>
    </section>

    <section class="contactForm Form">
      <?php echo do_shortcode('[contact-form-7 id="c133470" title="オープンキャンパス"]'); ?>
    </section>

    <hr>

    <?php get_template_part('assets/parts/contact-notice') ?>

  </main>

</div>

<?php get_footer(); ?>