<?php
/*
Template Name: オンライン学校説明会
*/
get_header();
?>

<div id="container">

  <main class="contact">

    <section class="tour_top post_top">
      <!-- <div class="overTxt">
        <p class="over_ttl_en">Online School Information Session</p>
        <p class="over_txt">オンライン学校説明会</p>
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
            <span itemprop="name">オンライン学校説明会</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section>

    <section class="contactNotice">
      <h1 class="page__heading">オンライン学校説明会</h1>
      <p class="page">飲食人大学について、学科・コース内容・費用についてなど<br class="br-pc">ご相談やご質問がございましたらお気軽にお問い合わせください。</p>
    </section>

    <section class="contactForm Form">
      <?php echo do_shortcode('[contact-form-7 id="642" title="学校説明会"]'); ?>
    </section>

    <hr>

    <?php get_template_part('assets/parts/contact-notice') ?>

  </main>

</div>

<?php get_footer(); ?>