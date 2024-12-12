<?php
/*
Template Name: 無料相談
*/
get_header();
?>

<div id="container">

  <main class="contact">

    <section class="trial_top post_top">
      <!-- <div class="overTxt">
        <p class="over_ttl_en">Free Consultation</p>
        <p class="over_txt">無料相談</p>
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
            <span itemprop="name">無料相談</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section>

    <section class="contactNotice">
      <h1 class="page__heading">無料相談</h1>
      <p class="page">
        飲食人大学について、現役講師がWEB会議システムを利用してご相談に乗ります。<br
          class="br-pc">具体的なコース内容、卒業後の進路などお気軽にご相談ください。<br>お申し込み後、事務局よりWEB会議システムのURLをお送りします。
      </p>
    </section>
    <section class="contactForm Form">
      <?php echo do_shortcode('[contact-form-7 id="2059" title="オンライン相談"]'); ?>
    </section>

    <hr>

    <?php get_template_part('assets/parts/contact-notice') ?>

  </main>

</div>

<?php get_footer(); ?>