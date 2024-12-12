<?php
/*
Template Name: (wip)サンクスページ台湾校LP
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
    <main class="thanks">

    <section class="thanks_top post_top">
    <div class="overTxt">
    <p class="over_ttl_en">COMPLEAT</p>
    <p class="over_txt">發送完成</p>
    <p class="">[user] 先生/女士</p>
    <p class="">詢問已成功發送。</p>
    </div>
    </section>
    <section class="thankMessage">
    <h2 class="thanksTtl serif">感謝您的申請。</h2>
    非常感謝您索取資料。<br class="page">我們已向 [mail] 發送了郵件。<br class="page">相關負責人將在2-3個工作日內與您聯繫。<br class="page">若超過一週仍未收到回覆，煩請您再次聯繫我們，不便之處敬請見諒。

    </section>
    <section class="SNSinfoWrap">
    <article class="topInstagram">
    <p class="TitleDeco">INSTAGRAM</p>

    <h3>Instagram</h3>
    <p class="thanksInstagram">您可以查看課程的相關情況。<br class="page">請務必關注我們！</p>

    <ul>
        <li><a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" rel="noopener"><img src="img/top/thum_top_instagram01.png" alt=""></a></li>
        <li><a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" rel="noopener"><img src="img/top/thum_top_instagram02.png" alt=""></a></li>
        <li><a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" rel="noopener"><img src="img/top/thum_top_instagram03.png" alt=""></a></li>
        <li><a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" rel="noopener"><img src="img/top/thum_top_instagram04.png" alt=""></a></li>
        <li><a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" rel="noopener"><img src="img/top/thum_top_instagram05.png" alt=""></a></li>
        <li><a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" rel="noopener"><img src="img/top/thum_top_instagram06.png" alt=""></a></li>
    </ul>
    <a href="https://www.instagram.com/inshokujindaigaku/" target="_blank" class="instagram" rel="noopener"><img src="img/common/ico_instagram.png" alt=""></a>
    </article>
    </section>

    </main>


    <?php wp_footer(); ?>
</body>

</html>