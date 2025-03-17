<?php

////contact form 7の内容をslackに飛ばす。
add_action('wpcf7_mail_sent', 'send_contact_form_to_slack');

function send_contact_form_to_slack($contact_form)
{
    // Slack Webhook URL
    $webhook_url = 'https://hooks.slack.com/services/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';

    // Contact Form 7 submission instance
    $submission = WPCF7_Submission::get_instance();

    if ($submission) {
        // Get submission data
        $posted_data = $submission->get_posted_data();

        // Create message
        $message = "New contact form submission:\n";
        foreach ($posted_data as $field_name => $field_value) {
            if (is_array($field_value)) {
                $message .= $field_name . ':' . implode(',', $field_value) . "\n";
            } else {
                $message .= $field_name . ':' . $field_value . "\n";
            }
        }

        // Send message to Slack
        $response = wp_remote_post(
            $webhook_url,
            array(
                'body' => wp_json_encode(array('text' => $message)),
                'headers' => array('Content-Type' => 'application/json'),
            )
        );
    }
}

// function google_recaptcha_v3() {
// //   // 単体のページ
// // 	if (!is_page('contact')) {
// //   複数のページ
//   if (!is_page(array(
// 	  'contact', 
// 	  'experience-session',
// 	  'triallesson',
// 	  'request',
// 	  'tour',
// 	  'entryform'
//   ))) {
//     wp_deregister_script('google-recaptcha');
//   }
// }
// add_action('wp_enqueue_scripts', 'google_recaptcha_v3', 99);

/*
Author: 
*/
//ログインバー：非表示
// add_filter('show_admin_bar', '__return_false');

//画像パス：親テーマの場合
function imagepassshort($arg)
{
    $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/assets/img/', $arg);
    return $content;
}
add_action('the_content', 'imagepassshort');

// 固定ページのみ自動整形機能を無効化します。
function disable_page_wpautop()
{
    if (is_page())
        remove_filter('the_content', 'wpautop');
}
add_action('wp', 'disable_page_wpautop');

//ビジュアルエディタ無効化
function disable_visual_editor_in_page()
{
    global $typenow;
    if ($typenow == 'page') {
        add_filter('user_can_richedit', 'disable_visual_editor_filter');
    }
}
function disable_visual_editor_filter()
{
    return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');

//余計なテキストの無効化カテゴリー:タグ:カスタム投稿一覧のアーカイブ:タクソノミー:月別:
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：' . esc_html(get_search_query(false));
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {
    }
    return $title;
});

//ウィジェットの有効化
function my_theme_widgets_init()
{
    register_sidebar(
        array(
            'name' => 'サイドバー',
            'id' => 'side-widget',
            'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="side_ttl">',
            'after_title' => '</h6>'
        )
    );
    register_sidebar(
        array(
            'name' => '投稿下部のLP導線',
            'id' => 'post-under-widget',
            'before_widget' => '<div id="%1$s" class="%2$s post-under-wrapper">',
            'after_widget' => '</div>'
        )
    );
}
add_action('widgets_init', 'my_theme_widgets_init');

//アイキャッチ画像の使用
add_theme_support('post-thumbnails');
//アイキャッチ画像がないときの処理
function default_thumbnail($post_id)
{
    $post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);
    $default_thumbnail_id = '685'; //　画像のポストIDを指定
    if (!wp_is_post_revision($post_id)) {
        if (empty($post_thumbnail)) {
            update_post_meta($post_id, $meta_key = '_thumbnail_id', $meta_value = $default_thumbnail_id);
        }
    }
}
add_action('save_post', 'default_thumbnail');

//アーカイブの設定
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'post'; // スラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//冒頭部分の調整
function new_excerpt_mblength($length)
{
    return 80; //抜粋する文字数を50文字に設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

//続きを読むに変更する
function new_excerpt_more($more)
{
    return '<span class="read_more">' . '… more' . '</span>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//絶対パス→相対パス
function make_href_root_relative($input)
{
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}


/// ↓ブログカードのパーマリンクが働かなくなるためコメントアウトしています。 written by kanai 240603
//パーマリンク絶対パス→相対パス
// function root_relative_permalinks($input)
// {
//   return make_href_root_relative($input);
// }
// add_filter('the_permalink', 'root_relative_permalinks');



//検索結果から固定ページを除外（今回は投稿とカスタム投稿）
function my_posts_per_page($query)
{
    if (is_search()) {
        $query->set('post_type', array('post', 'work-info'));
    }
}
add_action('pre_get_posts', 'my_posts_per_page');
function my_posy_search($search)
{
    if (is_search()) {
        // post_type='news'も検索結果に含める
        $search .= " AND (post_type = 'post' OR post_type='news,voice')";
    }
    return $search;
}
add_filter('posts_search', 'my_posy_search');

//ダッシュボードのカスタマイズ
//サムネイルカラム追加
function customize_manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');

//サムネイル画像表示
function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'small', array('style' => 'width:100px;height:auto;'));
    }
    if (isset($thum) && $thum) {
        echo $thum;
    } else {
        echo __('None');
    }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);

/* 固定ページ一覧にスラッグを追加 */
function add_page_column_title($columns)
{
    $columns['slug'] = "スラッグ";
    return $columns;
}
function add_page_column($column_name, $post_id)
{
    if ($column_name == 'slug') {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo esc_attr($slug);
    }
}
add_filter('manage_pages_columns', 'add_page_column_title');
add_action('manage_pages_custom_column', 'add_page_column', 10, 2);

//ショートコードを使ったphpファイルの呼び出し方法
function Include_my_php($params = array())
{
    extract(
        shortcode_atts(
            array(
                'file' => 'default'
            ),
            $params
        )
    );
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/assets/parts/infomation.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');

// get_name_val関数の定義
function get_user_val()
{
    // パラメーター「user」の値を取得
    $val = (isset($_GET['user']) && $_GET['user'] != '') ? $_GET["user"] : '';
    // エスケープ処理
    $val = htmlspecialchars($val, ENT_QUOTES);

    // $valを戻り値として設定（ショートコードの値となる）
    return $val;
}
function get_mail_val()
{
    $val = (isset($_GET['mail']) && $_GET['mail'] != '') ? $_GET["mail"] : '';
    $val = htmlspecialchars($val, ENT_QUOTES);
    return $val;
}
function get_tel_val()
{
    $val = (isset($_GET['tel']) && $_GET['tel'] != '') ? $_GET["tel"] : '';
    $val = htmlspecialchars($val, ENT_QUOTES);
    return $val;
}

// ショートコードに関数をセット
add_shortcode('user', 'get_user_val');
add_shortcode('mail', 'get_mail_val');
add_shortcode('tel', 'get_tel_val');

// パンくずリスト
if (!function_exists('custom_breadcrumb')) {
    function custom_breadcrumb()
    {
        // トップページでは何も出力しないように
        if (is_front_page())
            return false;
        //そのページのWPオブジェクトを取得
        $wp_obj = get_queried_object();
        echo '<div id="breadcrumb">' .  //id名などは任意で
            '<ul>' .
            '<li>' .
            '<a href="' . esc_url(home_url('/')) . '"><span>ホーム</span></a>' .
            '</li>';
        if (is_attachment()) {
            /**
             * 添付ファイルページ ( $wp_obj : WP_Post )
             * ※ 添付ファイルページでは is_single() も true になるので先に分岐
             */
            $post_title = apply_filters('the_title', $wp_obj->post_title);
            echo '<li><span>' . esc_html($post_title) . '</span></li>';
        } elseif (is_single()) {
            /**
             * 投稿ページ ( $wp_obj : WP_Post )
             */
            $post_id = $wp_obj->ID;
            $post_type = $wp_obj->post_type;
            $post_title = apply_filters('the_title', $wp_obj->post_title);
            // カスタム投稿タイプかどうか
            if ($post_type !== 'post') {
                $the_tax = "";  //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい
                // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
                $tax_array = get_object_taxonomies($post_type, 'names');
                foreach ($tax_array as $tax_name) {
                    if ($tax_name !== 'post_format') {
                        $the_tax = $tax_name;
                        break;
                    }
                }
                $post_type_link = esc_url(get_post_type_archive_link($post_type));
                $post_type_label = esc_html(get_post_type_object($post_type)->label);
                //カスタム投稿タイプ名の表示
                echo '<li>' .
                    '<a href="' . $post_type_link . '">' .
                    '<span>' . $post_type_label . '</span>' .
                    '</a>' .
                    '</li>';
            } else {
                $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示
            }
            // 投稿に紐づくタームを全て取得
            $terms = get_the_terms($post_id, $the_tax);
            // タクソノミーが紐づいていれば表示
            if ($terms !== false) {
                $child_terms = array();  // 子を持たないタームだけを集める配列
                $parents_list = array();  // 子を持つタームだけを集める配列
                //全タームの親IDを取得
                foreach ($terms as $term) {
                    if ($term->parent !== 0) {
                        $parents_list[] = $term->parent;
                    }
                }
                //親リストに含まれないタームのみ取得
                foreach ($terms as $term) {
                    if (!in_array($term->term_id, $parents_list)) {
                        $child_terms[] = $term;
                    }
                }
                // 最下層のターム配列から一つだけ取得
                $term = $child_terms[0];
                if ($term->parent !== 0) {
                    // 親タームのIDリストを取得
                    $parent_array = array_reverse(get_ancestors($term->term_id, $the_tax));
                    foreach ($parent_array as $parent_id) {
                        $parent_term = get_term($parent_id, $the_tax);
                        $parent_link = esc_url(get_term_link($parent_id, $the_tax));
                        $parent_name = esc_html($parent_term->name);
                        echo '<li>' .
                            '<a href="' . $parent_link . '">' .
                            '<span>' . $parent_name . '</span>' .
                            '</a>' .
                            '</li>';
                    }
                }
                $term_link = esc_url(get_term_link($term->term_id, $the_tax));
                $term_name = esc_html($term->name);
                // 最下層のタームを表示
                echo '<li>' .
                    '<a href="' . $term_link . '">' .
                    '<span>' . $term_name . '</span>' .
                    '</a>' .
                    '</li>';
            }
            // 投稿自身の表示
            echo '<li><span>' . esc_html(strip_tags($post_title)) . '</span></li>';
        } elseif (is_page() || is_home()) {
            /**
             * 固定ページ ( $wp_obj : WP_Post )
             */
            $page_id = $wp_obj->ID;
            $page_title = apply_filters('the_title', $wp_obj->post_title);
            // 親ページがあれば順番に表示
            if ($wp_obj->post_parent !== 0) {
                $parent_array = array_reverse(get_post_ancestors($page_id));
                foreach ($parent_array as $parent_id) {
                    $parent_link = esc_url(get_permalink($parent_id));
                    $parent_name = esc_html(get_the_title($parent_id));
                    echo '<li>' .
                        '<a href="' . $parent_link . '">' .
                        '<span>' . $parent_name . '</span>' .
                        '</a>' .
                        '</li>';
                }
            }
            // 投稿自身の表示
            echo '<li><span>' . esc_html(strip_tags($page_title)) . '</span></li>';
        } elseif (is_post_type_archive()) {
            /**
             * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
             */
            echo '<li><span>' . esc_html($wp_obj->label) . '</span></li>';
        } elseif (is_date()) {
            /**
             * 日付アーカイブ ( $wp_obj : null )
             */
            $year = get_query_var('year');
            $month = get_query_var('monthnum');
            $day = get_query_var('day');
            if ($day !== 0) {
                //日別アーカイブ
                echo '<li>' .
                    '<a href="' . esc_url(get_year_link($year)) . '"><span>' . esc_html($year) . '年</span></a>' .
                    '</li>' .
                    '<li>' .
                    '<a href="' . esc_url(get_month_link($year, $month)) . '"><span>' . esc_html($month) . '月</span></a>' .
                    '</li>' .
                    '<li>' .
                    '<span>' . esc_html($day) . '日</span>' .
                    '</li>';
            } elseif ($month !== 0) {
                //月別アーカイブ
                echo '<li>' .
                    '<a href="' . esc_url(get_year_link($year)) . '"><span>' . esc_html($year) . '年</span></a>' .
                    '</li>' .
                    '<li>' .
                    '<span>' . esc_html($month) . '月</span>' .
                    '</li>';
            } else {
                //年別アーカイブ
                echo '<li><span>' . esc_html($year) . '年</span></li>';
            }
        } elseif (is_author()) {
            /**
             * 投稿者アーカイブ ( $wp_obj : WP_User )
             */
            echo '<li><span>' . esc_html($wp_obj->display_name) . ' の執筆記事</span></li>';
        } elseif (is_archive()) {
            /**
             * タームアーカイブ ( $wp_obj : WP_Term )
             */
            $term_id = $wp_obj->term_id;
            $term_name = $wp_obj->name;
            $tax_name = $wp_obj->taxonomy;
            /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */
            // 親ページがあれば順番に表示
            if ($wp_obj->parent !== 0) {
                $parent_array = array_reverse(get_ancestors($term_id, $tax_name));
                foreach ($parent_array as $parent_id) {
                    $parent_term = get_term($parent_id, $tax_name);
                    $parent_link = esc_url(get_term_link($parent_id, $tax_name));
                    $parent_name = esc_html($parent_term->name);
                    echo '<li>' .
                        '<a href="' . $parent_link . '">' .
                        '<span>' . $parent_name . '</span>' .
                        '</a>' .
                        '</li>';
                }
            }
            // ターム自身の表示
            echo '<li>' .
                '<span>' . esc_html($term_name) . '</span>' .
                '</li>';
        } elseif (is_search()) {
            /**
             * 検索結果ページ
             */
            echo '<li><span>「' . esc_html(get_search_query()) . '」で検索した結果</span></li>';
        } elseif (is_404()) {
            /**
             * 404ページ
             */
            echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';
        } else {
            /**
             * その他のページ（無いと思うけど一応）
             */
            echo '<li><span>' . esc_html(get_the_title()) . '</span></li>';
        }
        echo '</ul></div>';  // 冒頭に合わせた閉じタグ
    }
}


// ブログカードカスタマイズ用 written by kanai 240603
// wp-embed-template.cssを読み込む
function custom_embed_style()
{
    wp_enqueue_style('wp-embed-template-org', get_stylesheet_directory_uri() . '/assets/css/wp-embed-template.min.css');
}
add_filter('embed_head', 'custom_embed_style');


/* CSSとJavaScriptの読み込み */
function my_script_init(){

    // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');

    // jQueryの読み込み(CDN)
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);

    // JSの読み込み（TOPページのみ読み込ませる）
    if (!is_home() || !is_front_page()) {
        wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '1.0.1', true);
    }

    // CSSの読み込み (TOPページには読み込ませない)
    if (!is_home() || !is_front_page()) {
        wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.1');
    }

    // /lpa以外で読み込み
    if (!is_page('lpa')) {
        wp_enqueue_style('style-top-css', get_template_directory_uri() . '/assets/css/top-style.min.css', array(), '1.0.1');
    }
}
add_action('wp_enqueue_scripts', 'my_script_init');



function add_files(){
    // WordPress本体のjquery.jsを読み込まない
    wp_deregister_script('jquery');

    // 指定したjQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', false);

    //郵便番号自動入力
    // wp_enqueue_script('ajaxzip3', get_stylesheet_directory_uri() . '/assets/js/ajaxzip3.js');

    wp_enqueue_script('yubinbango', get_stylesheet_directory_uri() . '/assets/js/yubinbango.js');

    // 流入時のパラメーター取得
    wp_enqueue_script( 'custom-session-script', get_template_directory_uri() . '/assets/js/custom-session.js', array(), '1.0', true );

    //カナ自動入力
    // wp_enqueue_script('autoKana', get_stylesheet_directory_uri() . '/assets/js/jquery.autoKana.js');

    //index.js
    wp_enqueue_script('index', get_stylesheet_directory_uri() . '/assets/js/index.js');
}
add_action('wp_enqueue_scripts', 'add_files');
