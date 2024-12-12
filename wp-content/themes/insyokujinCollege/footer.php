<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__wrap">
      <div class="footer__info">
        <div class="footer__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <picture>
              <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer-logo.png"
                media="(min-width: 1024px)">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer-logo_sp.png"
                alt="飲食人大学のロゴ">
            </picture>
          </a>
        </div>
        <div class="footer__button footer__button--request md-none">
          <a href="<?php echo esc_url(home_url('request')); ?>">資料請求</a>
        </div>
        <div class="footer__button footer__button--contact md-none">
          <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合せ</a>
        </div>
        <!-- SNS PC用 -->
        <div class="footer__sns-wrap md-none">
          <p class="footer__sns-title">Follow us!</p>
          <div class="footer__sns">
            <div class="footer__sns-icon"><a href="https://www.instagram.com/inshokujindaigaku.sushi?igshid=YmMyMTA2M2Y%3D" target="_blank"><img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/instagram-icon.svg"
                  alt="instagramのアイコン"></a>
            </div>
            <div class="footer__sns-icon"><a href="https://x.com/sushimeister_rh" target="_blank"><img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/x-icon.svg" alt="Xのアイコン"></a>
            </div>
          </div>
        </div>
        <!-- / SNS PC用 -->
      </div>
      <div class="footer-menu">
        <div class="footer-menu__left">
          <h4 class="footer-menu__top"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></h4>
          <ul class="footer-menu__items">
            <li class="footer-menu__item">
              <ul>
                <li><a href="<?php echo esc_url(home_url('/#feature')); ?>" class="footer-menu___link footer-menu___link--sub">特徴</a></li>
                <li><a href="<?php echo esc_url(home_url('/#teacher')); ?>" class="footer-menu___link footer-menu___link--sub">講師紹介</a></li>
                <li><a href="<?php echo esc_url(home_url('/#program')); ?>" class="footer-menu___link footer-menu___link--sub">プログラム内容</a></li>
                <li><a href="<?php echo esc_url(home_url('/#access')); ?>" class="footer-menu___link footer-menu___link--sub">学校情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/#tuition')); ?>" class="footer-menu___link footer-menu___link--sub">授業料</a></li>
              </ul>
            </li>
            <li class="footer-menu__item"><a href="<?php echo esc_url(home_url('sushi-meister03')); ?>" class="footer-menu___link">海外就職コース</a></li>
            <li class="footer-menu__item"><a href="<?php echo esc_url(home_url('chinese-meister')); ?>" class="footer-menu___link">中華マイスター専科</a></li>
          </ul>
        </div>
        <div class="footer-menu__center">
          <ul class="footer-menu__items">
            <li class="footer-menu__item">
              <p class="footer-menu___link">記事一覧</p>
              <ul>
                <li><a href="<?php echo esc_url(home_url('/category/pickup/')); ?>" class="footer-menu___link footer-menu___link--sub">PICK UP</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/food-and-beverage-institute/')); ?>" class="footer-menu___link footer-menu___link--sub">飲食人大学研究所</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/voice/')); ?>" class="footer-menu___link footer-menu___link--sub">卒業生インタビュー</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="footer-menu___link footer-menu___link--sub">新着情報</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="footer-menu__right">
          <ul class="footer-menu__items">
            <!-- <li class="footer-menu__item"><a href="<?php echo esc_url(home_url('career')); ?>" class="footer-menu___link">就職サポート</a></li> -->
            <li class="footer-menu__item"><a href="<?php echo esc_url(home_url('recruiting')); ?>" class="footer-menu___link">採用担当の方へ</a></li>
            <li class="footer-menu__item"><a href="<?php echo esc_url(home_url('faq')); ?>" class="footer-menu___link">よくあるご質問</a></li>
          </ul>
        </div>
      </div>
      <!-- SNS SP用 -->
      <div class="footer__sns-wrap md-show">
        <p class="footer__sns-title">Follow us!</p>
        <div class="footer__sns">
          <div class="footer__sns-icon"><a href="https://www.instagram.com/inshokujindaigaku.sushi?igshid=YmMyMTA2M2Y%3D" target="_blank"><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/instagram-icon.svg"
                alt="instagramのアイコン"></a>
          </div>
          <div class="footer__sns-icon"><a href="https://x.com/sushimeister_rh" target="_blank"><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/x-icon.svg" alt="Xのアイコン"></a>
          </div>
        </div>
      </div>
      <!-- / SNS SP用 -->
    </div>
    <div class="footer__company">
      <a href="https://www.cix-hd.com/" target="_blank" class="footer__company-info">運営会社</a>
      <a href="<?php echo esc_url(home_url('privacy')); ?>" class="footer__company-info">プライバシーポリシー</a>
      <a href="<?php echo esc_url(home_url('term')); ?>" class="footer__company-info">特定商取引法に基づく表示</a>
    </div>
  </div>
  <div class="footer__foot">
    <small class="footer__copyright">
      COPYRIGHT&nbsp;&copy;&nbsp;INSYOKUJIN&nbsp;DAIGAKU,&nbsp;ALL&nbsp;RIGHTS&nbsp;RESERVED.
    </small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>