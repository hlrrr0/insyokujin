<?php
/*
Template Name: よくある質問
*/
get_header();
?>

<div id="container">
  <main>

    <section class="faq_top post_top"></section>

    <?php get_template_part('assets/parts/cta-button') ?>

    <section class="faq faq--page" id="faq">
      <div class="faq__inner inner">
        <div class="section-title section-title--center">
          <p class="section-title__sub">FAQ</p>
          <h2 class="section-title__main">よくあるご質問</h2>
        </div>
        <div class="faq__items">
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">卒業後の進路について相談は可能ですか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">当校の運営会社では、飲食業界専門のお仕事紹介事業を運営しています。 卒業される方のスキルに合わせたお仕事先をご紹介しています。
                既に卒業された方は、当校よりご紹介した企業に入社されて頑張っておられますよ！
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('career')); ?>">就職サポート</a>をご覧ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">誰でも入学できるのですか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">どなた様でも入学可能ですが、当校での技術習得は、卒業後にしっかりとした飲食の現場で通用する学びです。
                そこに焦点を当てた授業内容となっており、お稽古事の感覚で入学されると非常に大変だと思います。 よって、目的意識の合致している方に限定させて頂いてます。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('/#tuition')); ?>">学科・コース紹介</a>をご覧ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">今まで包丁を握ったことがなくても授業についていけますか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">包丁の扱い方から調理の基礎など、全くの未経験の方でも細かく丁寧に指導します。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('/#tuition')); ?>">学科・コース紹介</a>をご覧ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">3ヶ月で技術を学ぶことが出来るのですか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">調理技術・作法・考え方など現場で通用する基礎的な技術を習得可能です。
                数々の現場でキャリアを積んだ一流の講師陣による実践的なカリキュラムをぜひ体験して下さい。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('/#tuition')); ?>">学科・コース紹介</a>をご覧ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">遠方に住んでいるのですが、寮などの宿泊施設はありますか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">寮などの宿泊設備はご用意しておりませんが、在学中の滞在場所として お住いのご紹介をしておりますので、お気軽にご相談下さい。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('contact')); ?>">お問い合せ</a>ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">学費の分割払いは可能ですか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">一部、分割でのお支払のご相談も受け賜わっておりますので、お気軽にご相談下さい。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('/#tuition')); ?>">入学の流れ・費用</a>をご覧ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">通学定期を買いたいのですが、学生証はもらえますか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">学生証の発行は行っておりません。当校は通学定期は対象外となります。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('contact')); ?>">お問い合せ</a>ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">年齢制限はありますか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">特に設けておりません。10代から70代の方まで幅広い年齢層の方までご入学可能です。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('contact')); ?>">お問い合せ</a>ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">現在海外に住んでいるのですが、入学時の面接はどの様にすればよろしいでしょうか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">海外にお住いの方はSkypeで面接をさせていただいております。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('contact')); ?>">お問い合せ</a>ください</p>
              </div>
            </div>
          </div>
          <div class="faq__item">
            <div class="faq__question">
              <div class="faq__question-icon">Q</div>
              <div class="faq__question-text">日本語が全く読み書き出来ないのですが、英語の授業はありますか？</div>
            </div>
            <div class="faq__answer">
              <div class="faq__answer-icon">A</div>
              <div class="faq__answer-text">授業は全て日本語で行っております。
                <p class="faq__link">詳しくは<a href="<?php echo esc_url(home_url('contact')); ?>">お問い合せ</a>ください</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('assets/parts/request-foot') ?>

  </main>
</div>

<?php get_footer(); ?>