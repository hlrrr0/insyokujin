<?php
/*
Template Name: 台湾校LP
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <!-- meta情報 -->
    <title>飲食人大学 | 台灣 台北校</title>
    <meta name="description" content="" />
    <meta name="keywords" content="飲食人大学,寿司,転職,海外,就職サポート,人材紹介,寿司職人,寿司学校,調理技術習得,修行,中華,中華学校,中華料理人,寿司職人海外,調理,職人" />

    <!--twitter-->
    <meta name="twitter:url" content="#">
    <meta name="twitter:image" content="">

    <!-- favicon -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
        rel="stylesheet">

    <?php get_template_part('assets/parts/measurement-tag-first') ?>

    <?php wp_head(); ?>

    <style>
        @charset "UTF-8";

        html {
            font-size: 16px;
        }

        body {
            font-family: "Noto Sans JP", serif;
        }

        a[href^="tel:"] {
            pointer-events: none;
        }

        @media screen and (max-width: 768px) {
            a[href^="tel:"] {
                pointer-events: auto;
            }
        }

        a {
            transition: all 0.3s;
        }

        a:hover {
            filter: brightness(1.2);
            opacity: 1.0;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* Remove default padding */
        ul,
        ol {
            padding: 0;
        }

        /* Remove default margin */
        body,
        h1,
        h2,
        h3,
        h4,
        p,
        ul,
        ol,
        figure,
        blockquote,
        dl,
        dd {
            margin: 0;
        }

        /* Set core root defaults */
        html {
            scroll-behavior: smooth;
        }

        /* Set core body defaults */
        body {
            min-height: 100vh;
            text-rendering: optimizeSpeed;
            line-height: 1.5;
        }

        /* Remove list styles on ul, ol elements with a class attribute */
        ul,
        ol {
            list-style: none;
        }

        /* A elements that don't have a class get default styles */
        a:not([class]) {
            -webkit-text-decoration-skip: ink;
            text-decoration-skip-ink: auto;
        }

        a {
            text-decoration: none;
        }

        /* Make images easier to work with */
        img {
            max-width: 100%;
            display: block;
            width: 100%;
        }

        /* Natural flow and rhythm in articles by default */
        article>*+* {
            margin-top: 1em;
        }

        /* Inherit fonts for inputs and buttons */
        input,
        button,
        textarea,
        select {
            font: inherit;
        }

        /* Blur images when they have no alt attribute */
        img:not([alt]) {
            filter: blur(10px);
        }

        /* フォームリセット */
        input,
        button,
        select,
        textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            border-radius: 0;
            font: inherit;
            outline: none;
        }

        textarea {
            resize: vertical;
        }

        input[type=submit],
        input[type=button],
        label,
        button,
        select {
            cursor: pointer;
        }

        select::-ms-expand {
            display: none;
        }

        /* ====================================================================
# main contents
==================================================================== */
        .main {
            background-color: #BBA15B;
            position: relative;
        }

        .pc-header__cloud {
            position: relative;
        }

        @media screen and (max-width: 768px) {
            .pc-header__cloud {
                display: none;
            }
        }

        .pc-header__cloud-left {
            position: fixed;
            top: 564px;
            left: 0;
            max-width: 504px;
        }

        .pc-header__cloud-right {
            position: fixed;
            top: 0;
            right: 0;
            max-width: 458px;
        }

        .main-wrapper {
            max-width: 375px;
            margin: 0 auto;
            background-color: #FBF9F4;
            position: relative;
        }

        .pc-header__logo {
            width: 269px;
            position: fixed;
            left: calc(50% - 454px);
            transform: translateX(-50%);
            top: 60px;
        }

        @media screen and (max-width: 768px) {
            .pc-header__logo {
                display: none;
            }
        }

        .pc-header__cta {
            position: fixed;
            left: calc(50% + 455px);
            transform: translateX(-50%);
            top: 607px;
            width: 474px;
        }

        @media screen and (max-width: 768px) {
            .pc-header__cta {
                display: none;
            }
        }

        .main-images__item {
            padding-top: 60px;
        }

        .header__cta-btn {
            max-width: 375px;
        }

        @media screen and (max-width: 768px) {
            .js-header__cta-btn.fixed {
                z-index: 999;
                position: fixed;
                bottom: 0;
            }
        }

        .access-link {
            display: inline-block;
            position: relative;
            margin: 16px 20px 0;
            color: #A68F54;
            border-bottom: 1px solid;
            font-size: 12px;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.05em;
        }

        .access-link::after {
            content: "";
            background: url(../wp-content/themes/insyokujinCollege/assets/img/taiwan_lp/link-icon.svg) no-repeat center/cover;
            position: absolute;
            left: 105%;
            top: 50%;
            transform: translateY(-50%);
            width: 13px;
            height: 13px;
        }

        /* CTA
------------------------------------------------------------- */
        .cta-section {
            position: relative;
        }

        .cta-section__bg {
            margin-top: 60px;
        }

        .cta-section__btn {
            width: 326px;
            position: absolute;
            bottom: 56px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* ====================================================================
# footer
==================================================================== */
        .footer-lp {
            background-color: #BBA15B;
        }

        .footer-lp__inner {
            background-color: #FBF9F4;
            max-width: 375px;
            margin: 0 auto;
        }

        .footer-lp__logo {
            width: 180px;
            margin: 0 auto;
        }

        .footer-lp__button a {
            display: inline-block;
            max-width: 240px;
            width: 100%;
            min-width: 160px;
            font-size: 24px;
            font-weight: 700;
            line-height: 1.5;
            letter-spacing: 0.04em;
            color: #fff;
            padding: 18px 0;
            text-align: center;
        }

        .footer-lp__button.footer-lp__button--request a {
            margin-top: 45px;
        }

        .footer-lp__button.footer-lp__button--contact a {
            margin-top: 25px;
        }

        .footer-lp__sns-wrap {
            margin-top: 40px;
            text-align: center;
        }

        .footer-lp__sns-title {
            font-size: 16px;
            font-weight: 500;
            font-family: "Noto Serif JP", serif;
            line-height: 1;
            letter-spacing: 0.05em;
        }

        .footer-lp__sns {
            display: flex;
            margin-top: 15px;
            justify-content: center;
        }

        .footer-lp__sns-icon {
            width: 26px;
        }

        .footer-lp__sns-icon:first-child {
            margin-right: 20px;
        }

        .footer-lp-menu {
            display: block;
            text-align: center;
            margin-top: 30px;
        }

        .footer-lp-menu__top a {
            font-size: 21px;
            font-weight: 700;
            font-family: "Noto Serif JP", serif;
            line-height: 1;
            letter-spacing: 0.05em;
            color: #000;
        }

        @media screen and (max-width: 768px) {
            .footer-lp-menu__top a {
                font-size: 18px;
            }
        }

        .footer-lp-menu__item {
            margin-top: 30px;
        }

        .footer-lp-menu__item ul li {
            margin-top: 20px;
        }

        .footer-lp-menu___link {
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            letter-spacing: 0.05em;
            color: #000;
        }

        @media screen and (max-width: 768px) {
            .footer-lp-menu___link {
                font-size: 16px;
            }
        }

        .footer-lp-menu___link.footer-lp-menu___link--sub {
            font-size: 16px;
            font-weight: 500;
            font-family: "Noto Serif JP", serif;
        }

        .footer-lp__company {
            margin-top: 40px;
            text-align: center;
        }

        .footer-lp__company-info {
            font-weight: 400;
            line-height: 1;
            letter-spacing: 0.05em;
            font-family: "Noto Serif JP", serif;
            color: #000;
            padding: 0 15px;
            font-size: 14px;
            display: block;
            margin-top: 20px;
        }

        .footer-lp__foot {
            background-color: #000;
            text-align: center;
            padding: 10px 18px;
            margin-top: 25px;
        }

        .footer-lp__copyright {
            font-size: 10px;
            letter-spacing: 0.05em;
            line-height: 1;
            font-weight: 400;
            color: #fff;
        }



        /* ======================================
        コンタクトフォーム　フォームパーツ
        ======================================== */
        input,
        button,
        textarea,
        select {
            border: 0;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        textarea {
            width: 100%;
            border: solid 1px #ccc;
            border-radius: 5px;
            height: 30px;
            line-height: 30px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        textarea {
            border: solid 1px #ccc;
            border-radius: 5px;
            height: 120px;
            line-height: 1.45em;
            padding: 3px;
            resize: vertical;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .contact__heading {
            text-align: center;
            font-family: "Noto Serif JP", serif;
            font-size: 24px;
        }

        .contact .contactForm {
            width: 100%;
            margin: 0;
            border: none;
        }

        .contactForm {
            padding: 100px 20px;
        }

        .contactForm table {
            width: 100%;
        }

        .contactForm tr {
            border-bottom: solid 1px #eaf4fc;
        }

        .contactForm th span.must {
            font-size: 12px;
            color: #b01f24;
        }

        .contactForm th p.dateNote {
            display: block;
            font-size: 12px;
            font-weight: 300;
            color: #333;
        }

        .contactForm td ul.dateDetailWrap li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contactForm td ul.dateDetailWrap li p.dateDetailBox {
            color: #191212;
            margin-right: 20px;
        }

        .contactForm td ul.dateDetailWrap li+li {
            margin-top: 20px;
        }

        .contactForm td ul.dateDetailWrap li input[type="date"] {
            min-width: 240px;
        }

        .contactForm input[type="checkbox"] {
            border: solid 1px #485e82;
            width: 18px;
            height: 18px;
            border-radius: 3px;
            padding: 2px;
        }

        .contactForm input[type="checkbox"]:checked::before {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 2px;
            background: #B01F24;
        }

        .contactForm input[type="radio"] {
            border: solid 1px #485e82;
            width: 18px;
            height: 18px;
            border-radius: 20px;
            padding: 2px;
            margin: 0;
        }

        .contactForm input[type="radio"]:checked::before {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 20px;
            background: #B01F24;
        }

        .formTerms {
            width: 94%;
            height: 240px;
            overflow-y: scroll;
            border: solid 1px #ccc;
            padding: 30px 20px;
            margin: 60px auto 0;
        }

        .formTerms dt {
            font-size: 21px;
            font-weight: 500;
            text-align: center;
            letter-spacing: .15em;
        }

        .contact .formTerms dd p {
            text-align: left;
            font-size: 14px;
            line-height: 2.4em;
        }

        .formTerms ol {
            padding-left: 3em;
        }

        .formTerms ol li {
            list-style: decimal;
            font-size: 14px;
            color: #333;
        }

        .formTerms ol li:first-line {
            padding-left: -1em;
        }

        .contact .formTerms dd h3,
        .contact .formTerms dd h4 {
            color: #B01F24;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.1em;
            margin-top: 20px;
        }

        .contact .formTerms .termAddress {
            background: #F4ECE1;
            padding: 30px 20px;
            line-height: 1.45em;
        }

        .contact .formTerms dd h4 {
            text-align: center;
        }

        .contact .formTerms dd address {
            font-size: 14px;
            font-style: normal;
            text-align: center;
            line-height: 1.15em;
            margin-top: 30px;
        }

        .formbody .submitNote {
            font-size: 12px;
            color: #B01F24;
            text-align: center;
            line-height: 1.15em;
            margin-top: 40px;
        }

        input[type="submit"] {
            display: block;
            width: 80%;
            max-width: 210px;
            height: 50px;
            line-height: 50px;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            background: #B01F24;
            color: #fff;
            letter-spacing: 0.1em;
            border-radius: 15px;
            margin: 20px auto 0;
        }

        .contactForm th {
            margin-top: 20px;
            display: block;
            width: 100%;
            text-align: left;
            font-size: 14px;

            background: #F4ECE1;
            font-weight: 500;
            padding: 10px 20px 10px 15px;
        }

        .contactForm td {
            display: block;
            width: 100%;
            padding: 8px 0;
        }

        .formTerms {
            margin-top: 25px;
            padding: 2em 1em;
        }

        .contact .formTerms dd p {
            font-size: 13px;
            line-height: 2.1em;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var header = document.querySelector('.js-header__cta-btn');
            var heroSection = document.querySelector('.js-hero');
            var heroBottom;

            window.addEventListener('scroll', function () {
                heroBottom = heroSection.offsetHeight;
                if (window.scrollY > heroBottom) {
                    header.classList.add('fixed');
                } else {
                    header.classList.remove('fixed');
                }
            });

            // 初回スクロールイベントを強制的に実行して状態を設定
            window.dispatchEvent(new Event('scroll'));
        });
    </script>

</head>

<body>
    <?php get_template_part('assets/parts/measurement-tag-second') ?>

    <main id="main" class="main">

        <div class="pc-header__cloud">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/cloud-left.svg" alt=""
                class="pc-header__cloud-left">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/cloud-right.svg" alt=""
                class="pc-header__cloud-right">
        </div>

        <div class="main-wrapper">

            <div class="pc-header__logo">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/logo_wh.png"
                    alt="飲食人大学">
            </div>
            <div class="pc-header__cta">
                <a href="#contact"><img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/pc-header-cta.png"
                        alt="請先索取資料"></a>
            </div>

            <!-- main images -->
            <div class="main-images">
                <!-- hero image -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/mv.png"
                    alt="日本首屈一指的壽司職人專門學校「飲食人大學」進駐台灣台北！" class="hero js-hero">
                <!-- CTA button -->
                <a href="#contact" class="header__cta-btn js-header__cta-btn"><img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/cta-button.png"
                        alt=""></a>
                <!-- about -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/about.png"
                    alt="About" id="about" class="main-images__item">
                <!-- features -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/features.png"
                    alt="Features" id="features" class="main-images__item">
                <!-- teacher -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/teacher.png"
                    alt="Teacher" id="teacher-section" class="main-images__item">
                <!-- program -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/program.png"
                    alt="Program" id="program-section" class="main-images__item">

                <!-- CTA section -->
                <div class="cta-section">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/cta-section.png"
                        alt="" class="cta-section__bg">
                    <a href="#contact" class="cta-section__btn">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/cta-section-btn.png"
                            alt="">
                    </a>
                </div>

                <!-- tuition -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/tuition.png" alt=""
                    id="tuition-section">
                <!-- access -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/access.png" alt=""
                    id="access" class="main-images__item">
                <!-- google map -->
                <a href="https://maps.app.goo.gl/rCUyTcCDDkdbRRiu8" target="_blank" class="access-link">GoogleMap</a>
                <!-- access-under-img -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/access-under-img.png"
                    alt="" class="main-images__item">
                <!-- faq -->
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/faq.png" alt=""
                    id="faq" class="main-images__item">
            </div>

            <!-- 資料請求フォーム -->
            <section id="contact" class="contact">
                <section class="contactForm Form">
                    <h2 class="contact__heading">索取資料</h2>
                    <?php echo do_shortcode('[contact-form-7 id="4286ff7" title="資料請求_tiwan"]'); ?>
                </section>
            </section>

        </div>
    </main>

    <!-- footer -->
    <footer class="footer-lp">
        <div class="footer-lp__inner">
            <div class="footer-lp__logo">
                <a href="#">
                    <picture>
                        <source
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/images/footer-logo.png"
                            media="(min-width: 1024px)">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/footer-logo_sp.png"
                            alt="飲食人大学のロゴ">
                    </picture>
                </a>
            </div>
            <div class="footer-lp-menu">
                <ul class="footer-lp-menu__items">
                    <li class="footer-lp-menu__item">
                        <ul>
                            <li><a href="#" class="footer-lp-menu___link footer-lp-menu___link--sub">TOP</a></li>
                            <li><a href="#about" class="footer-lp-menu___link footer-lp-menu___link--sub">About</a></li>
                            <li><a href="#features"
                                    class="footer-lp-menu___link footer-lp-menu___link--sub">Features</a>
                            </li>
                            <li><a href="#teacher-section"
                                    class="footer-lp-menu___link footer-lp-menu___link--sub">Technical
                                    Coach</a>
                            </li>
                            <li><a href="#program-section"
                                    class="footer-lp-menu___link footer-lp-menu___link--sub">Program</a>
                            </li>
                            <li><a href="#tuition-section"
                                    class="footer-lp-menu___link footer-lp-menu___link--sub">Tuition</a>
                            </li>
                            <li><a href="#access" class="footer-lp-menu___link footer-lp-menu___link--sub">Access</a>
                            </li>
                            <li><a href="#faq" class="footer-lp-menu___link footer-lp-menu___link--sub">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="footer-lp__sns-wrap">
                <p class="footer-lp__sns-title">Follow us!</p>
                <div class="footer-lp__sns">
                    <div class="footer-lp__sns-icon"><a
                            href="https://www.instagram.com/inshokujindaigaku.sushi?igshid=YmMyMTA2M2Y%3D"
                            target="_blank"><img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/instagram-icon.svg"
                                alt="instagramのアイコン"></a>
                    </div>
                    <div class="footer-lp__sns-icon"><a href="https://x.com/sushimeister_rh" target="_blank"><img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/taiwan_lp/x-icon.svg"
                                alt="Xのアイコン"></a>
                    </div>
                </div>
            </div>
            <div class="footer-lp__company">
                <a href="https://www.cix-hd.com/" target="_blank" class="footer-lp__company-info">Company</a>
                <a href="<?php echo esc_url(home_url('privacy')); ?>" target="_blank"
                    class="footer-lp__company-info">Privacy Policy</a>
            </div>
            <div class="footer-lp__foot">
                <small class="footer-lp__copyright">
                    COPYRIGHT&nbsp;&copy;&nbsp;INSYOKUJIN&nbsp;DAIGAKU,&nbsp;ALL&nbsp;RIGHTS&nbsp;RESERVED.
                </small>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>