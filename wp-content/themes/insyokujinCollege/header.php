<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(''); ?>【飲食人大学】3ヶ月でプロの調理技術を習得</title>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
  <meta name="keywords" content="飲食人大学,寿司,転職,海外,就職サポート,人材紹介,寿司職人,寿司学校,調理技術習得,修行,中華,中華学校,中華料理人,寿司職人海外,調理,職人" />

  <!--twitter-->
  <meta name="twitter:url" content="#">
  <meta name="twitter:image" content="">

  <!-- favicon -->
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

  <!--font-->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
    rel="stylesheet"> -->

  <!-- swiper css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- slick css -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" /> -->


  <!-- css インライン -->
  <style>
    .mv__title {
      font-size: 70px;
      letter-spacing: 0.05em;
      line-height: 1.2;
      font-weight: 600;
      margin-top: 24px;
    }

    @media screen and (max-width: 768px) {
      .mv__title {
        font-size: 32px;
        line-height: 1.4;
        text-align: right;
        margin-top: 10px;
      }
    }

    .mv__title span {
      font-size: 40px;
    }

    @media screen and (max-width: 768px) {
      .mv__title span {
        font-size: 22px;
      }
    }
  </style>

  <?php get_template_part('assets/parts/measurement-tag-first') ?>

  <!-- swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

  <!-- slick js -->
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    defer></script> -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part('assets/parts/measurement-tag-second') ?>

  <header class="js-header header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__name">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo_wh.png" alt="飲食人大学"
          class="header__logo">
      </a>
      <nav class="header__nav">
        <ul class="header__items">
          <li class="header__item"><a href="<?php echo esc_url(home_url('/#feature')); ?>" class="header__link">特徴</a>
          </li>
          <li class="header__item"><a href="<?php echo esc_url(home_url('/#program')); ?>"
              class="header__link">プログラム内容</a></li>
          <li class="header__item"><a href="<?php echo esc_url(home_url('/#interview')); ?>"
              class="header__link">卒業生の声</a></li>
          <li class="header__item"><a href="<?php echo esc_url(home_url('/#tuition')); ?>"
              class="header__link">学費と支払い方法</a></li>
          <li class="header__item"><a href="<?php echo esc_url(home_url('/#access')); ?>" class="header__link">学校情報</a>
          </li>
          <li class="header__item"><a href="<?php echo esc_url(home_url('/#faq')); ?>" class="header__link">よくあるご質問</a>
          </li>
          <li class="header__item">
            <p class="header__link">コース紹介</p>
            <ul class="header__item-sub course-menu">
              <li>
                <a href="<?php echo esc_url(home_url('sushi-meister03')); ?>" class="course-menu__overseas">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/overseas.png" alt="海外就職コース">
                </a>
              </li>
              <!-- <li>
                <a href="<?php echo esc_url(home_url('chinese-meister')); ?>" class="course-menu__chinese-food">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/chinese-food.png"
                    alt="中華マイスター専科">
                </a>
              </li> -->
            </ul>
          </li>
          <li class="header__item"><a href="<?php echo esc_url(home_url('recruiting')); ?>"
              class="header__link">採用担当の方へ</a></li>
        </ul>
      </nav>
    </div>

    <div class="hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="drawer js-drawer">
      <ul class="drawer__items">
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/')); ?>" class="drawer__link">TOP</a></li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/#feature')); ?>" class="drawer__link">特徴</a></li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/#program')); ?>"
            class="drawer__link">プログラム内容</a></li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/#interview')); ?>"
            class="drawer__link">卒業生の声</a></li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/#tuition')); ?>"
            class="drawer__link">学費と支払い方法</a></li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/#access')); ?>" class="drawer__link">学校情報</a>
        </li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('/#faq')); ?>" class="drawer__link">よくあるご質問</a>
        </li>
        <li class="drawer__item">
          <p class="drawer__link">コース紹介</p>
          <ul class="drawer__item-sub">
            <li>
              <a href="<?php echo esc_url(home_url('sushi-meister03')); ?>"
                class="drawer__link-sub drawer__link-sub--aboard">
                海外就職コース
              </a>
            </li>
            <!-- <li>
              <a href="<?php echo esc_url(home_url('chinese-meister')); ?>"
                class="drawer__link-sub drawer__link-sub--chinese">
                中華マイスター専科
              </a>
            </li> -->
          </ul>
        </li>
        <li class="drawer__item"><a href="<?php echo esc_url(home_url('recruiting')); ?>"
            class="drawer__link">採用担当の方へ</a></li>
      </ul>
      <a href="<?php echo esc_url(home_url('request')); ?>" class="drawer__button">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/document_button.png" alt="資料請求はこちら"
          class="drawer__button-img">
      </a>
    </div>
  </header>