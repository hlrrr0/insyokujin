<?php get_header(); ?>

<main>
    <!-- mv -->
    <div class="mv">
        <div class="mv__inner">
            <div class="mv__slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/MV-1.jpg"
                                media="(min-width: 1024px)">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mv-sp-1.jpg"
                                alt="">
                        </picture>
                    </div>
                    <!-- <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/MV-2.jpg"
                                media="(min-width: 1024px)">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mv-sp-2.jpg"
                                alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/MV-3.jpg"
                                media="(min-width: 1024px)">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mv-sp-3.jpg"
                                alt="">
                        </picture>
                    </div> -->
                </div>
                <div class="mv__title-wrap">
                    <p class="mv__title-head">実践型カリキュラムと<br class="md-show">圧倒的な技術指導</p>
                    <div class="mv-hr"></div>
                    <h1 class="mv__title">
                        未経験<span>から<br class="md-show">たった</span>3ヶ月<span>で叶える<br></span>寿司職人<span>への道</span>
                    </h1>
                    <?php get_template_part('assets/parts/cta-button_nofixed') ?>
                </div>
            </div>
        </div>
    </div>


    <!-- 各種バナー -->
    <section id="banner-section" class="banner-section">
        <div class="banner__wrapper">
            <div class="banner__slider">
                <div class="banner__slide">
                    <a href="<?php echo esc_url(get_field('banner-link-1')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_field('banner-img-1')); ?>" alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(get_field('banner-link-2')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_field('banner-img-2')); ?>" alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(get_field('banner-link-3')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_field('banner-img-3')); ?>" alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(get_field('banner-link-4')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_field('banner-img-4')); ?>" alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(get_field('banner-link-5')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_field('banner-img-5')); ?>" alt="" />
                    </a>
                </div>
            </div>

            <!-- <div class="banner__slider-sp md-show">
                <div class="banner__slide">
                    <a href="https://page.line.me/698atfkj?openQrModal=true" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner-line.jpg"
                            alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(home_url('triallesson')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner-mister.jpg"
                            alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(home_url('tour')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner-school.jpg"
                            alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(home_url('experience-session')); ?>" target="_blank"
                        class="banner__link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner-grip.jpg"
                            alt="" />
                    </a>
                </div>
                <div class="banner__slide">
                    <a href="<?php echo esc_url(home_url('triallesson')); ?>" target="_blank" class="banner__link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner-fukuoka.jpg"
                            alt="" />
                    </a>
                </div>
            </div> -->

        </div>
    </section>

    <!-- メディア出演 -->
    <section id="media" class="media">
        <div class="media__wrapper">
            <div class="section-title section-title--center">
                <p class="section-title__sub">Media</p>
            </div>
            <h2 class="section-title section-title__main section-title--center concept__title">メディア出演</h2>
            <div class="slider-wrapper">
                <ul class="slider">
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nikkei-mj.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/asahi-news.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/miyaneya.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/news-every.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/matsuko-kaigi.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/prime-sunday.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/kamigimon.png"
                            alt="" />
                    </li>
                </ul>
                <ul class="slider">
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nikkei-mj.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/asahi-news.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/miyaneya.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/news-every.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/matsuko-kaigi.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/prime-sunday.png"
                            alt="" />
                    </li>
                    <li class="slide">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/kamigimon.png"
                            alt="" />
                    </li>
                </ul>
            </div>

            <!-- Reverse -->
            <div class="slider-wrapper">
                <ul class="slider slider--right">
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nikkei-mj.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/asahi-news.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/miyaneya.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/news-every.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/matsuko-kaigi.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/prime-sunday.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/kamigimon.png"
                            alt="" />
                    </li>
                </ul>
                <ul class="slider slider--right">
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nikkei-mj.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/asahi-news.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/miyaneya.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/news-every.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/matsuko-kaigi.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/prime-sunday.png"
                            alt="" />
                    </li>
                    <li class="slide md-show">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/kamigimon.png"
                            alt="" />
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <div class="first-contents">

        <!-- Feature -->
        <section id="feature" class="feature">
            <div class="feature__inner inner">
                <div class="section-title section-title--center">
                    <p class="section-title__sub">Features</p>
                    <h2 class="section-title__main"><span>未経験からプロの寿司職人になれる</span><br>飲食人大学4つの特徴・強み</h2>
                </div>
                <p class="feature__text section-text">
                    飲食人大学は、3ヶ月で未経験からプロの寿司職人になるための、短期集中の修行の場です。
                    <br>確かな技術で愛される寿司店・和食店をオープンする卒業生を輩出しています。
                </p>

                <div class="feature__items">
                    <div class="feature__item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature-1.png" alt=""
                            class="feature__item-image">
                    </div>
                    <div class="feature__item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature-2.png" alt=""
                            class="feature__item-image">
                    </div>
                    <div class="feature__item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature-3.png" alt=""
                            class="feature__item-image">
                    </div>
                    <div class="feature__item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature-4.png" alt=""
                            class="feature__item-image">
                    </div>
                </div>
            </div>
            <?php get_template_part('assets/parts/cta-button_nofixed') ?>
        </section>

        <!-- teacher -->
        <section class="teacher" id="teacher">
            <div class="teacher__inner inner">
                <div class="section-title section-title--center">
                    <p class="section-title__sub">Technical Coach</p>
                    <h2 class="section-title__main">経験豊富な講師陣</h2>
                </div>
                <p class="teacher__text section-text">
                    未経験でも成功できる理由の一つとして、現場経験を豊富に積んできた一流の講師から直接教わるプログラムにあります。<br>現場目線で指導を行い、卒業後も随時ご相談していただけます。
                </p>

                <div class="scroll-text">
                    <p>スクロールしてご覧いただけます</p>
                </div>

                <div class="teacher__items">
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-1.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">ミシュラン三ツ星店<br>京料理「菊乃井」本店 勤務</p>
                        <p class="teacher__name">小林 真也</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>辻調理師専門学校卒業後、ミシュラン三ツ星店、京料理「菊乃井」本店にて勤務。<br>
                                仲卸鮮魚店、ふぐ料理、日本料理、割烹懐石の経験を経て、飲食人大学名古屋校立上げに従事。<br>
                                江戸前鮨の伝統的な技術と日本料理の食文化を指導。<br>
                                一般的な鮨用の鮮魚のみならず、マグロ解体、ふぐ調理、すっぽん、鱧など、多様な食材に精通している。</p>
                        </div>
                    </div>
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-2.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">東京 高級寿司店<br>26歳で店長 就任</p>
                        <p class="teacher__name">尾上 唯雄</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>
                                東京の高級寿司店で修行し、26歳で店長に就任。店舗運営やスタッフ教育、人材採用などの知識を生かし、国内外で寿司店の立ち上げやプロデュースにも携わる。寿司職人としての現場経験は24年に及び、お客様に喜んでいただける店舗作りと教育に注力し、寿司店ならではの「おもてなし」の指導を行う。
                            </p>
                        </div>
                    </div>
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-3.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">とろ安本店、海月館<br>鳴門グランドホテル海月 勤務</p>
                        <p class="teacher__name">小川 達也</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>
                                高等学校での教員経験を積んだ後、音楽・タレント・イベント企画業界に携わるなど様々な職歴を持つ。蕎麦打ち師範資格を取得し、飲食店の立ち上げ・店舗運営を行い、2015年にはミラノ国際博覧会での日本館徳島ウィークで蕎麦打ちの講演を行う。2021年に新たな挑戦として、飲食人大学
                                寿司マイスター専科で寿司技術を習得し、当校提携店舗（とろ安本店・海月館）や徳島県の鳴門グランドホテル海月で寿司職人の技術を磨く。多岐にわたる経験を生かし、日々生徒に向き合い、熱心な指導を行う。
                            </p>
                        </div>
                    </div>
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-4.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">元『金沢まいもん寿司』<br>マークイズ福岡店 店長</p>
                        <p class="teacher__name">青木 信二</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>
                                寿司職人としての現場経験は18年に及ぶ、寿司のプロフェッショナル。37歳で寿司業界に入り、行列の出来る大人気店、『金沢まいもん寿司』マークイズ福岡店の店長として立ち上げから携わる。『目標達成思考』の教育と『人間力』形成をモットーに人財(材)育成に日々全力を注ぐ。
                            </p>
                        </div>
                    </div>
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-5.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">兵庫県淡路島洲本温泉 「海月館」<br>統括総料理長</p>
                        <p class="teacher__name">河津 啓佑</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>18歳から日本料理の世界へ入り、京都完全予約制料亭阪口会館、割烹　蔵、ホテル鷗風亭、夜寿司など、様々な職場を経験。28歳に七洲園（現鳴門海月）の料理長に就任。34歳に海月館グループ本館の料理長に就任。
                                現在、兵庫県淡路島洲本温泉 海月館の統括総料理長を務める。 また2020年からは、母校の尼崎育成学園調理師科で特別講師を務める。</p>
                        </div>
                    </div>
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-6.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">国内外で料理長・育成を経験<br>現場経験歴32年</p>
                        <p class="teacher__name">北川 信太郎</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>現場経験32年。18歳から日本料理店、高級寿司店などで修行を重ね、数々の店舗で料理長を務める。その後、海外（香港・ベトナム）で新店舗立ち上げや現地スタッフ育成に携わり、日本の食文化と伝統を広める活動に従事。豊富な現場実績や海外経験などから、高度な技術と日本料理への向き合い方の指導に重きを置いている。
                            </p>
                        </div>
                    </div>
                    <div class="teacher__item">
                        <div class="teacher__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/teacher-7.png"
                                alt="" class="teacher-img">
                        </div>
                        <p class="teacher__title">和食・日本料理<br>数々の有名店で職人歴42年</p>
                        <p class="teacher__name">藤野 弘幸</p>
                        <p class="teacher__accordion-title js-accordion-title">プロフィールを見る</p>
                        <div class="teacher__accordion-content">
                            <p>福岡県の水産高校を卒業後、地元で漁師を経験しその後飲食業界へ。
                                和食と日本料理を中心に数々の有名店で職人として経験を積むこと42年。市場からの情報に強く旬の鮮魚を使った四季折々の料理を指導の中で惜しみなく教示している。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- program -->
        <section class="program" id="program">
            <div class="program__image-sp">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/program-image_sp.jpg"
                    alt="実技指導を受けている様子">
            </div>
            <div class="program__inner inner">
                <div class="program__content">
                    <div class="section-title section-title--left">
                        <p class="section-title__sub">Program</p>
                        <h2 class="section-title__main"><span
                                class="section-title__main--small">60日420時間の実技指導で、未経験でも安心して通える!</span><br>プログラム内容</h2>
                    </div>
                    <ul class="program__lists">
                        <li class="program__list">40種類以上の魚を徹底して捌く</li>
                        <li class="program__list">毎週、小テストを実施</li>
                        <li class="program__list">ラスト１ヶ月で現場を意識した実践授業(提供実習)に取り組む</li>
                    </ul>
                </div>
                <div class="program__image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/program-image.jpg"
                        alt="実技指導を受けている様子">
                </div>
            </div>
        </section>

        <!-- schedule -->
        <section class="schedule" id="schedule">
            <div class="schedule__inner inner">
                <ul class="schedule__tab-list tab-list">
                    <li class="schedule__tab-menu tab-menu js-tab current">1ヶ月目</li>
                    <li class="schedule__tab-menu tab-menu js-tab">2ヶ月目</li>
                    <li class="schedule__tab-menu tab-menu js-tab">3ヶ月目</li>
                </ul>
                <div class="schedule__content-wrap">
                    <div class="schedule__content-group">
                        <div class="schedule__content-box js-content">
                            <h3 class="schedule__title">基礎学習</h3>
                            <div class="schedule__menu-wrap">
                                <ul class="schedule__menu training-menu">
                                    <li class="training-menu__list">飲食人、社会人の心構え</li>
                                    <li class="training-menu__list">基礎訓練実習
                                        <ul>
                                            <li>包丁の研ぎ方 / 米の種類と見分け方 / 酢の種類と応用</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">魚を比較検証し、構造と味の違いを知る
                                        <ul>
                                            <li>アジ・海老、基礎知識、切りつけ込み、握り、食べる</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">解体見学</li>
                                    <li class="training-menu__list">海苔
                                        <ul>
                                            <li>軍艦巻き、軍艦巻き種類、軍艦巻きスキルと改善点</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">マグロの解体見学（課外授業）
                                        <ul>
                                            <li>マグロの形態・構造、切りつけ込み、握り</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">魚の知識、捌きの基本</li>
                                </ul>
                                <ul class="schedule__menu training-menu">
                                    <li class="training-menu__list">浜締め、野締めの違い検証</li>
                                    <li class="training-menu__list">天然と養殖の違い検証</li>
                                    <li class="training-menu__list">お造り・鮨
                                        <ul>
                                            <li>タイ・ハマチ・マグロ・イカ</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">冷凍と生の違い検証</li>
                                    <li class="training-menu__list">たまごについて
                                        <ul>
                                            <li>管理方法、たまご切りつけ、握りパターン</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">魚介類の捌き、握りパターン
                                        <ul>
                                            <li>ヒラメ・ハゲ・チヌ・カツオ・タコ・サバ・車エビ<br>・アワビ・サザエ・スズキ・タチウオ・青物酢締め等々</li>
                                        </ul>
                                    </li>
                                    <li class="training-menu__list">押し寿司・棒寿司 / バッテラなどのパターン</li>
                                    <li class="training-menu__list">包丁技術向上</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="schedule__content-box js-content">
                        <h3 class="schedule__title">応用実習</h3>
                        <ul class="schedule__menu training-menu">
                            <li class="training-menu__list">魚の選別方法から調理までの反復実践</li>
                            <li class="training-menu__list">魚市場見学（課外授業）
                                <ul>
                                    <li>市場にて自分で魚の仕入れ実習</li>
                                </ul>
                            </li>
                            <li class="training-menu__list">魚の目利き</li>
                            <li class="training-menu__list">一尾の魚を最後まで仕上げる応用実習訓練
                                <ul>
                                    <li>猛者エビ・トビウオの捌き・握りパターン、応用握り、薬味パターン穴子の捌き、握りパターン、仕込み／アジ握り、巻き、酢締め
                                        ヒラメ昆布締め・イカ湯引き・炙り／マグロ・たたき
                                        サーモン・イクラの仕込み方、握り、軍艦／ハゲ薄造り・肝 スズキ昆布締め・塩締め</li>
                                </ul>
                            </li>
                            <li class="training-menu__list">あら汁の実技いろいろ</li>
                            <li class="training-menu__list">姿造り実技</li>
                            <li class="training-menu__list">お造り一式・小鉢・逸品</li>
                        </ul>
                    </div>
                    <div class="schedule__content-box js-content">
                        <h3 class="schedule__title">実践実習</h3>
                        <ul class="schedule__menu training-menu">
                            <li class="training-menu__list">漁港・せり見学（課外授業）
                                <ul>
                                    <li>市場にて鮮魚を箱買い／購入したあらゆる鮮魚を捌き 煮付け・あら炊き</li>
                                </ul>
                            </li>
                            <li class="training-menu__list">鮮魚買い付け</li>
                            <li class="training-menu__list">購入した鮮魚で実習</li>
                            <li class="training-menu__list">コースを組むときのメニュー作成から握りまでの実践実習訓練
                                <ul>
                                    <li>コースの組み方／メニュー構成の考え方／メニューのデザイン</li>
                                </ul>
                            </li>
                            <li class="training-menu__list">実際のお客（招待）様への対面授業</li>
                            <li class="training-menu__list">経営・管理について
                                <ul>
                                    <li>流通の仕組みから実店舗立ち上げについて</li>
                                </ul>
                            </li>
                            <li class="training-menu__list">高級寿司店へ出向き体験実習（課外授業）</li>
                            <li class="training-menu__list">実店舗での実習（課外授業）</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <?php get_template_part('assets/parts/document-request') ?>

    <div class="second-contents">

        <!-- quality -->
        <section class="quality" id="quality">
            <div class="quality__inner inner">
                <div class="section-title section-title--center">
                    <p class="section-title__sub">Quality</p>
                    <h2 class="section-title__main">業界最高水準のクオリティ</h2>
                </div>
                <p class="quality__text section-text">
                    一番大切にしていることは、捌く力。業界最高水準のクオリティ。<br>
                    当校では入学式当日からを実技授業が始まり、40種類以上の魚を徹底して捌きます。
                </p>

                <div class="scroll-text md-show">
                    <p>スクロールしてご覧いただけます</p>
                </div>

                <!-- table -->
                <div class="quality__table">
                    <div class="table-scroll">
                        <table class="table_design13">
                            <thead>
                                <tr>
                                    <th class="fixed01"></th>
                                    <th class="fixed02">飲食人大学</th>
                                    <th>調理師学校A</th>
                                    <th>寿司職人養成<br>スクールA</th>
                                    <th>寿司職人養成<br>スクールB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="fixed01">授業内容</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/double-circle.svg"
                                            alt="">
                                        <p>江戸前技法を学び、魚の目利き・捌き・握りの技術を実践的に学ぶ。コース料理に不可欠な和食、原価計算、店舗経営についても学びます</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p>和食に関する技術・知識を学びます<br class="md-none">（座学半分）</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p>短期間で寿司を握る技術のみに<br class="md-none">特化して学びます</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p>自宅でオンライン教材を<br class="md-none">使って学びます</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">修学期間</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/double-circle.svg"
                                            alt="">
                                        <p class="font-28">3<span class="font-24">ヶ月</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-21">24<span class="font-18">ヶ月</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-21">2<span class="font-18">ヶ月</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-21">6<span class="font-18">ヶ月</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">授業時間</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/double-circle.svg"
                                            alt="">
                                        <p>週6日(月-土) 9:00-16:00<br>日・祝または水休<br>総時間数 <span class="font-16">420時間</span>
                                        </p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p>週5日(月-金) 9:00-16:20<br>総時間数 <br class="md-show"><span
                                                class="font-16">約3,500時間</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p>週5日(月-土) 9:30-15:30<br>総時間数 <br class="md-show"><span
                                                class="font-16">約200時間</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p>週2日選択<br>総時間数 <br class="md-show"><span class="font-16">約100時間</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">学費<br>（授業料＋入学金）</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/circle.svg"
                                            alt="">
                                        <p class="font-16">授業料：968,000<span class="font-11">円</span><br>入学金：0<span
                                                class="font-11">円</span>
                                        </p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-14">授業料：3,540,000<span
                                                class="font-11">円</span><br>入学金：250,000<span class="font-11">円</span>
                                        </p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-14">授業料：715,000<span class="font-11">円</span><br>入学金：165,000<span
                                                class="font-11">円</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-double-circle.svg"
                                            alt="">
                                        <p class="font-14">授業料：440,000<span class="font-11">円</span><br>入学金：0<span
                                                class="font-11">円</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">1時間あたりの<br>授業料</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/circle.svg"
                                            alt="">
                                        <p class="font-20">約2,305円 / 1時間</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-double-circle.svg"
                                            alt="">
                                        <p class="font-18">約1,083円 / 1時間</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-18">約4,400円 / 1時間</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-18">約4,400円 / 1時間</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">魚の仕入れ状況</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/double-circle.svg"
                                            alt="">
                                        <p class="font-12"><span class="font-16">40</span>種類以上の豊富な魚介類を<br
                                                class="md-none">捌く前の<span class="font-16">新鮮</span>な状態で仕入れて授業で使う</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-12">基本的な魚を学習、<br class="md-none">大量の魚を仕入れて授業で使う</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-12">捌かれた状態の魚（柵）で<br class="md-none">仕入れて授業で使う</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-12">週２回クール便で<br>自宅に届いた魚介類を授業で使う</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">各クラス定員</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/double-circle.svg"
                                            alt="">
                                        <p class="font-28">15<span class="font-24">名</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-21">40<span class="font-18">名</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-21">20<span class="font-18">名</span></p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-12">オンラインのため、人数設定なし</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="fixed01">就職先紹介<br>キャリア支援</th>
                                    <td class="fixed02">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/double-circle.svg"
                                            alt="">
                                        <p class="font-12">専属のキャリアコーディネーターが<br class="md-none">就職サポート、授業期間中に定期相談実施</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-16">学校に集まった求人票から選択</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-circle.svg"
                                            alt="">
                                        <p class="font-16">専門の<br class="md-show">求人サイト</p>
                                    </td>
                                    <td>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/caramel-triangle.svg"
                                            alt="">
                                        <p class="font-16">就職実績なし</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- tuition -->
        <section class="tuition" id="tuition">
            <div class="tuition__inner inner">
                <div class="tuition__wrapper">
                    <div class="section-title section-title--vertical">
                        <p class="section-title__sub md-show">Tuition</p>
                        <h2 class="section-title__main section-title__main--vertical"><span
                                class="md-show">1時間2,500円！でプロの道へ<br></span>学費と支払い方法</h2>
                        <p class="section-title__sub md-none">Tuition</p>
                    </div>
                    <div class="scroll-text md-show">
                        <p>スクロールしてご覧いただけます</p>
                    </div>
                    <div class="tuition__table">
                        <div class="tuition__table-image-wrap">
                            <div class="tuition__table-image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/tuition-table.png"
                                    alt="昼間コースと夜間コースそれぞれの授業料と授業時間">
                            </div>
                        </div>
                        <div class="tuition__text-wrap">
                            <p class="tuition__text">夜間コースは和食調理実務経験2年以上、又は和食以外の調理実務経験3年以上の方を対象とした2ヶ月コースとなります</p>
                            <p class="tuition__text-annotation">※金額の表記は全て税込になります</p>
                            <p class="tuition__text-annotation">※別途、教材や制服などの準備に60,761円がかかります</p>
                            <p class="tuition__text-annotation">※お支払いは銀行振込（一括）、学費ローン（分割払い）、クレジット決済をお選びいただけます</p>
                        </div>
                    </div>
                </div>
                <div class="tuition__vector">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vector-1.svg" alt="">
                </div>
            </div>
            <?php get_template_part('assets/parts/cta-button_nofixed') ?>
        </section>

        <!-- Interview -->
        <section class="interview" id="interview">
            <div class="interview__vector">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vector-1_sp.svg" alt="vector">
            </div>
            <div class="interview__inner inner">
                <div class="section-title section-title--center">
                    <p class="section-title__sub">Interview</p>
                    <h2 class="section-title__main">卒業生の声</h2>
                    <p class="quality__text section-text">
                        飲食人大学を卒業し、国内就職・開業、また海外就職・開業と、夢を掴んだ卒業生のインタビューをご紹介
                    </p>
                </div>
                <div class="interview__cards">
                    <div class="interview__card">
                        <a href="<?php echo esc_url(home_url('/pickup/4032/')); ?>" class="interview__link">
                            <div class="interview__card-image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/interview-img-1.jpg"
                                    alt="">
                                <div class="interview__card-category">国内就職</div>
                            </div>
                            <div class="interview__card-text">
                                目指すは世界！高校卒業後、飲食人大学で寿司職人の道を切り開いた村上智紀さんの挑戦
                            </div>
                        </a>
                    </div>
                    <div class="interview__card">
                        <a href="<?php echo esc_url(home_url('/pickup/4070/')); ?>" class="interview__link">
                            <div class="interview__card-image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/interview-img-2.jpg"
                                    alt="">
                                <div class="interview__card-category">国内開業</div>
                            </div>
                            <div class="interview__card-text">
                                母のお店を救いたい。お笑い芸人として活動しながら、寿司技術を身につけ、笑顔と美味しさを届ける中川秀人さんの生きがいとは
                            </div>
                        </a>
                    </div>
                    <div class="interview__card">
                        <a href="<?php echo esc_url(home_url('/pickup/1027/')); ?>" class="interview__link">
                            <div class="interview__card-image">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/interview-img-3.jpg"
                                    alt="">
                                <div class="interview__card-category">海外開業</div>
                            </div>
                            <div class="interview__card-text">
                                「今こそ自分に投資するとき」海の向こうで寿司店を営む 早川芳美さん
                            </div>
                        </a>
                    </div>
                </div>
                <div class="interview__button">
                    <a href="<?php echo esc_url(home_url('/category/voice/')); ?>"
                        class="interview__button-link">もっと見る</a>
                </div>
            </div>
        </section>
    </div>

    <?php get_template_part('assets/parts/abroad') ?>

    <!-- access -->
    <section class="access" id="access">
        <div class="access__inner inner">
            <div class="access__contents">
                <div class="section-title section-title--vertical">
                    <p class="section-title__sub md-show">Access</p>
                    <h2 class="section-title__main section-title__main--vertical">学校情報</h2>
                    <p class="section-title__sub md-none">Access</p>
                </div>
                <div class="access__wrapper">
                    <ul class="access__tab-list tab-list">
                        <li class="access__tab-menu tab-menu js-tab-second current-second">東京校</li>
                        <li class="access__tab-menu tab-menu js-tab-second">大阪校</li>
                        <li class="access__tab-menu tab-menu js-tab-second">淡路島校</li>
                        <li class="access__tab-menu tab-menu js-tab-second">福岡校</li>
                        <li class="access__tab-menu tab-menu js-tab-second">台北校</li>
                    </ul>
                    <div class="access__content-wrap">
                        <div class="access__content-box js-content-second">
                            <div class="access__school-info school-info">
                                <div class="school-info__img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-tokyo.jpg"
                                            media="(min-width: 768px)">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-tokyo_sp.jpg"
                                            alt="飲食人大学東京校">
                                    </picture>
                                </div>
                                <div class="school-info__wrap">
                                    <div class="school-info__title-group">
                                        <h3 class="school-info__title">東京校</h3>
                                        <p class="school-info__status">入学申込受付中</p>
                                    </div>
                                    <div class="school-info__reception reception">
                                        <p class="reception__title">開講スケジュール・受付状況</p>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('tokyo-schedule-1')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('tokyo-reception-1')); ?><span><?php echo esc_html(get_field('tokyo-reception-detail-1')); ?></span>
                                            </p>
                                        </div>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('tokyo-schedule-2')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('tokyo-reception-2')); ?>
                                                <span><?php echo esc_html(get_field('tokyo-reception-detail-2')); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="school-info__address">
                                        <p class="school-info__address-text">〒150-0021<br>東京都渋谷区恵比寿西1-21-3 グレイス代官山202号
                                        </p>
                                        <a href="https://maps.app.goo.gl/rpm5yFS5FLhiCVbn9" target="_blank"
                                            class="school-info__maplink">GoogleMap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="access__content-box js-content-second">
                            <div class="access__school-info school-info">
                                <div class="school-info__img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-osaka.jpg"
                                            media="(min-width: 768px)">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-osaka_sp.jpg"
                                            alt="飲食人大学大阪校">
                                    </picture>
                                </div>
                                <div class="school-info__wrap">
                                    <div class="school-info__title-group">
                                        <h3 class="school-info__title">大阪校</h3>
                                        <p class="school-info__status">入学申込受付中</p>
                                    </div>
                                    <div class="school-info__reception reception">
                                        <p class="reception__title">開講スケジュール・受付状況</p>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('osaka-schedule-1')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('osaka-reception-1')); ?>
                                                <span><?php echo esc_html(get_field('osaka-reception-detail-1')); ?></span>
                                            </p>
                                        </div>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('osaka-schedule-2')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('osaka-reception-2')); ?>
                                                <span><?php echo esc_html(get_field('osaka-reception-detail-2')); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="school-info__address">
                                        <p class="school-info__address-text">〒544-0034<br>大阪府大阪市生野区桃谷5丁目5-37
                                            いくのパークC棟1-10</p>
                                        <a href="https://maps.app.goo.gl/MRXpZoLc13JGV8ZJ6" target="_blank"
                                            class="school-info__maplink">GoogleMap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="access__content-box js-content-second">
                            <div class="access__school-info school-info">
                                <div class="school-info__img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-awaji.jpg"
                                            media="(min-width: 768px)">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-awaji_sp.jpg"
                                            alt="飲食人大学淡路島校">
                                    </picture>
                                </div>
                                <div class="school-info__wrap">
                                    <div class="school-info__title-group">
                                        <h3 class="school-info__title">淡路島校</h3>
                                        <p class="school-info__status">入学申込受付中</p>
                                    </div>
                                    <div class="school-info__reception reception">
                                        <p class="reception__title">開講スケジュール・受付状況</p>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('awaji-schedule-1')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('awaji-reception-1')); ?>
                                                <span><?php echo esc_html(get_field('awaji-reception-detail-1')); ?></span>
                                            </p>
                                        </div>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('awaji-schedule-2')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('awaji-reception-2')); ?>
                                                <span><?php echo esc_html(get_field('awaji-reception-detail-2')); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="school-info__address">
                                        <p class="school-info__address-text">〒656-2311<br>兵庫県淡路市久留麻2743番地 淡路島東浦サンパーク内
                                        </p>
                                        <a href="https://maps.app.goo.gl/vpn1yix9ynB3amp86" target="_blank"
                                            class="school-info__maplink">GoogleMap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="access__content-box js-content-second">
                            <div class="access__school-info school-info">
                                <div class="school-info__img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-fukuoka.jpg"
                                            media="(min-width: 768px)">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-fukuoka_sp.jpg"
                                            alt="飲食人大学福岡校">
                                    </picture>
                                </div>
                                <div class="school-info__wrap">
                                    <div class="school-info__title-group">
                                        <h3 class="school-info__title">福岡校</h3>
                                        <p class="school-info__status">入学申込受付中</p>
                                    </div>
                                    <div class="school-info__reception reception">
                                        <p class="reception__title">開講スケジュール・受付状況</p>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('fukuoka-schedule-1')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('fukuoka-reception-1')); ?>
                                                <span><?php echo esc_html(get_field('fukuoka-reception-detail-1')); ?></span>
                                            </p>
                                        </div>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('fukuoka-schedule-2')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('fukuoka-reception-2')); ?>
                                                <span><?php echo esc_html(get_field('fukuoka-reception-detail-2')); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="school-info__address">
                                        <p class="school-info__address-text">〒814-0002<br>福岡県福岡市早良区西新5丁目15-28 New8西新
                                            1F-3</p>
                                        <a href="https://maps.app.goo.gl/mUgL4SnqNXLLasnL6" target="_blank"
                                            class="school-info__maplink">GoogleMap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="access__content-box js-content-second">
                            <div class="access__school-info school-info">
                                <div class="school-info__img">
                                    <picture>
                                        <source
                                            srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-taiwan.jpg"
                                            media="(min-width: 768px)">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/school-taiwan_sp.jpg"
                                            alt="飲食人大学台北校" style="height: 100%">
                                    </picture>
                                </div>
                                <div class="school-info__wrap">
                                    <div class="school-info__title-group">
                                        <h3 class="school-info__title">台北校</h3>
                                        <p class="school-info__status">入学申込受付中</p>
                                    </div>
                                    <div class="school-info__reception reception">
                                        <p class="reception__title">開講スケジュール・受付状況</p>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('taiwan-schedule-1')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('taiwan-reception-1')); ?><span><?php echo esc_html(get_field('taiwan-reception-detail-1')); ?></span>
                                            </p>
                                        </div>
                                        <div class="reception__period">
                                            <p class="reception__period-text">
                                                <?php echo esc_html(get_field('taiwan-schedule-2')); ?>
                                            </p>
                                            <p class="reception__period-status">
                                                <?php echo esc_html(get_field('taiwan-reception-2')); ?>
                                                <span><?php echo esc_html(get_field('taiwan-reception-detail-2')); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="school-info__address">
                                        <p class="school-info__address-text">台北市松山区復興北路313巷14号
                                        </p>
                                        <a href="https://maps.app.goo.gl/rCUyTcCDDkdbRRiu8" target="_blank"
                                            class="school-info__maplink">GoogleMap</a>
                                        <a href="<?php echo esc_url(home_url('taipei')); ?>" target="_blank" class="school-info__taiwan" style="max-width: 170px; display: block; margin-top: 12px" ><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/taiwan-btn.png" alt="台北校HPはこちら"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('assets/parts/cta-button_nofixed') ?>
    </section>

    <!-- faq -->
    <section class="faq" id="faq">
        <div class="faq__vector">
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vector-2.svg"
                    media="(min-width: 1024px)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vector-2_sp.svg" alt="">
            </picture>
        </div>
        <div class="faq__inner inner">
            <div class="faq__decoration-upper"></div>
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
                            既に卒業された方は、当校よりご紹介した企業に入社されて頑張っておられますよ！</div>
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
                            そこに焦点を当てた授業内容となっており、お稽古事の感覚で入学されると非常に大変だと思います。 よって、目的意識の合致している方に限定させて頂いてます。</div>
                    </div>
                </div>
                <div class="faq__item">
                    <div class="faq__question">
                        <div class="faq__question-icon">Q</div>
                        <div class="faq__question-text">今まで包丁を握ったことがなくても授業についていけますか？</div>
                    </div>
                    <div class="faq__answer">
                        <div class="faq__answer-icon">A</div>
                        <div class="faq__answer-text">包丁の扱い方から調理の基礎など、全くの未経験の方でも細かく丁寧に指導します。</div>
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
                            数々の現場でキャリアを積んだ一流の講師陣による実践的なカリキュラムをぜひ体験して下さい。</div>
                    </div>
                </div>
            </div>
            <div class="faq__more">
                <a href="<?php echo esc_url(home_url('faq')); ?>" class="faq__more-link">もっと見る</a>
            </div>
            <div class="faq__line">
                <a href="https://page.line.me/698atfkj?openQrModal=true" target="_blank" class="faq__line-link">
                    <p>お気軽にご相談ください</p>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/line-icon.svg"
                        alt="LINEアイコン">
                </a>
            </div>
            <div class="faq__decoration-under"></div>
        </div>
    </section>

    <!-- message -->
    <section class="message" id="message">
        <div class="message-gra"></div>
        <div class="message__img">
            <picture>
                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img-hayakawa.jpg"
                    media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img-hayakawa_sp.jpg"
                    alt="早川芳美さんが寿司を握る様子">
            </picture>
        </div>
        <div class="message__wrap">
            <div class="message__content">
                <div class="message__title">「自分にできるだろうか」</div>
                <div class="message__text">
                    卒業生1300名全員が、<br>
                    最初はそう思いました。<br>
                    <br>
                    途中で挫折しそうになることも<br class="md-show">あると思います。<br>
                    <br>
                    「できるかどうか」で悩むのではなく、<br>
                    「どうしたら、できるのか」<br class="md-show">を考えてみましょう。<br>
                    <br>
                    そして、何度も、何度も、何度も、<br>
                    練習しましょう。<br>
                    <br>
                    未来のお客様の笑顔を想像しながら。<br>
                    <br>
                    飲食人大学は、<br>
                    寿司の技術を教えるだけの<br class="md-show">教育機関ではありません。<br>
                    <br>
                    たった3ヶ月でも、<br>
                    劇的に成長する自分自身と<br>
                    出会える場所でありたいです。<br>
                    <br>
                    皆様の大きな挑戦が、<br>
                    確かな技術になることを心から願っています。
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('assets/parts/request-foot') ?>

</main>

<?php get_footer(); ?>