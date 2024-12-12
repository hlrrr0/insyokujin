<aside class="widget-area" id="secondary">

    <!-- <div class="header_search">
    <?php get_search_form(true); ?>
  </div> -->
    <div class="widget_content">
        <h2 class="archive_title">CATEGORY</h2>
        <ul class="archive_list">

            <?php
            // 除外したいカテゴリーのスラッグを配列で指定
            $exclude_slugs = ['world', 'item', 'infomation', 'recip'];
            $exclude_ids = [];

            // スラッグからカテゴリーIDを取得
            foreach ($exclude_slugs as $slug) {
                $category = get_category_by_slug($slug);
                if ($category) {
                    $exclude_ids[] = $category->term_id;
                }
            }

            // カテゴリーIDがある場合に除外して表示
            wp_list_categories([
                'exclude' => $exclude_ids,
                'title_li' => '',  // リストのタイトルを非表示
            ]);
            ?>

        </ul>
    </div>
</aside>