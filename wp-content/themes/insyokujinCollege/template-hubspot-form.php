<?php
/*
Template Name: HubSpotフォーム
*/
get_header();
?>

<style>
  /* HubSpotフォーム用のスタイル */
  .hubspot-form-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
  }

  .hubspot-form-container h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
  }

  .hubspot-form-wrapper {
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  /* HubSpotフォームの幅を制限 */
  .hubspot-form-wrapper .hs-form {
    max-width: 100%;
  }

  .hubspot-form-wrapper .hs-form-field {
    margin-bottom: 20px;
  }

  /* 右下のCTAボタンを非表示 */
  .cta-button,
  .fixed-cta-button,
  [class*="cta-button"] {
    display: none !important;
  }

  @media (max-width: 768px) {
    .hubspot-form-container {
      padding: 20px 15px;
    }

    .hubspot-form-wrapper {
      padding: 20px;
    }

    .hubspot-form-container h1 {
      font-size: 24px;
    }
  }
</style>

<div id="container" style="margin-top: 0;">

  <main class="hubspot-form-page">

    <!-- <section class="breadcrumbArea">
      <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
            <span itemprop="name">TOP</span></a>
          <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <a itemscope="" itemtype="https://schema.org/WebPage" itemprop="item" tabindex="-1">
            <span itemprop="name"><?php the_title(); ?></span></a>
          <meta itemprop="position" content="2">
        </li>
      </ol>
    </section> -->

    <div class="hubspot-form-container">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
        
        <!-- <h1><?php the_title(); ?></h1> -->
        
        <div class="hubspot-form-wrapper">
          <?php the_content(); ?>
        </div>

      <?php endwhile; endif; ?>
    </div>

  </main>

</div><!-- [ /#container ] -->

<?php get_footer(); ?>
