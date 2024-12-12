<?php
/*
Template Name: お問い合せ
*/
get_header();
?>

<div id="container">

  <main class="contact">

    <section class="contact_top post_top">
      <!-- <div class="overTxt">
        <p class="over_ttl_en">CONTACT</p>
        <p class="over_txt">お問い合わせ</p>
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
            <span itemprop="name">お問い合わせ</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section>

    <section class="contactNotice">
      <h1 class="page__heading">お問い合わせ</h1>
      <p class="page">飲食人大学について、学科・コース内容・費用についてなど、<br class="br-pc">ご相談やご質問がございましたらお気軽にお問い合わせください。</p>
    </section>

    <?php get_template_part('assets/parts/contact-notice') ?>

    <section class="contactForm Form">
      <?php echo do_shortcode('[contact-form-7 id="640" title="お問い合わせ"]'); ?>
    </section>

  </main>
</div>

<?php get_footer(); ?>