<?php
/*
Template Name: 採用担当の方へ
*/
get_header();
?>

<div id="container">

  <main class="business">

    <section class="business_top post_top">
      <!-- <div class="overTxt">
        <p class="over_ttl_en">RECRUITING</p>
        <p class="over_txt">卒業生を採用したい法人の皆様</p>
      </div> -->
    </section>

    <section class="breadcrumbArea">
      <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>"><span itemprop="name">TOP</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <a itemscope="" itemtype="https://schema.org/WebPage" itemprop="item" tabindex="-1"><span
              itemprop="name">採用担当の方へ</span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section>

    <section class="businessTopArea">
      <h1 class="page__heading">卒業生を採用したい法人の皆様</h1>
      <p class="serif">飲食人大学では、これまで多くの卒業生を輩出してまいりました。<br class="page">自分自身に時間とお金を投資を行い、飲食業界へのキャリアを築いていこうと考えられている、<br
          class="page">素晴らしい想いを持った生徒のキャリアを一緒に作っていきませんか？</p>
      <p class="serif">まずは、下記フォームよりご連絡ください。</p>
    </section>

    <section class="contactForm Form" style="padding-top: 0;">
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
      <script>
        hbspt.forms.create({
          region: "na1",
          portalId: "45509560",
          formId: "4dd6f846-72b0-4cd5-865b-1d13fe1aec45"
        });
      </script>
    </section>

  </main>
</div>

<?php get_footer(); ?>