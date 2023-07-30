<?php
//ウィジェット
function my_widgets_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',     /* ←追加したいウィジェットの名前 */
        'description' => 'サイドバーウィジェット',  /* ←追加したいウィジェットの概要 */
        'id' => 'sidebar',           /* ←追加したいウィジェットのID */
        'before_widget' => '<div id="%1$s" cladd="widget %2$s">', /* ←追加したいウィジェットを囲う開始タグ */
        'after_widget' => '</div>', /* ←追加したいウィジェットを囲う閉じタグ */
        'before_title' => '<div class="widget-title">',   /* ←追加したいウィジェットのタイトルを囲う開始タグ */
        'after_title' => '</div>'    /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
    ));
}
add_action('widgets_init', 'my_widgets_init');

function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

//cssやjavascript読み込み
function my_script_init()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&family=Kiwi+Maru:wght@400;500&display=swap', array(), null);
    wp_enqueue_style("slick-cdn", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), "1.8.1", "all");
    wp_enqueue_style("slick-theme", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css", array(), "1.8.1", "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path("css/style.css")), "all");
    // WordPressのjQueryを読み込まない
    wp_deregister_script('jQuery');
    // 標準のjQueryをCDNで読み込み
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0", false);
    wp_enqueue_script("slick", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), "1.8.1", false);
    wp_enqueue_script("script", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path("js/script.js")), false);
}
add_action("wp_enqueue_scripts", "my_script_init");

//特定のscriptにdefer付与
function add_defer($tag, $handle)
{
    // deferで読み込みたいJavaScriptの、wp_enqueue_scriptで指定したハンドル名を指定
    if ('script' == $handle) {
        return str_replace('src', ' defer src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_defer', 10, 2);

/********************
 *Breacrumb navXT関連
 ***********************/
/*
// Breacrumb navXT のトップページの表記を書き換える
add_filter('bcn_breadcrumb_title', 'nskw_bcn_breadcrumb_title_filter', 10, 2);
function nskw_bcn_breadcrumb_title_filter($title, $type = null)
{
    if ('home' === $type[0]) {
        $title = 'ホーム';
    }
    return $title;
}
*/

/********************
 *Contact Form 7関連
 ***********************/
// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}
/*
// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
    $contact = home_url('/contact/thanks/');
    $download = home_url('/download/thanks/');
    echo <<< EOC
    <script>
        var thanksPage = {
            65: '{$contact}',
            5: '{$download}',
        };
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = thanksPage[event.detail.contactFormId];
        }, false );
    </script>
    EOC;
}
*/

/********************
 *API
 ***********************/
// 日本時間取得(年月日)
function get_japan_time($time)
{
    $date = null;
    switch ($time) {
        case 'year':
            $date = wp_date('Y', null, new DateTimeZone('Asia/Tokyo'));
            break;
        case 'month':
            $date = wp_date('n', null, new DateTimeZone('Asia/Tokyo'));
            break;
        case 'day':
            $date = wp_date('j', null, new DateTimeZone('Asia/Tokyo'));
            break;
    }
    return $date;
}

// 日本時間取得(曜日)
function get_japan_dayofweek()
{
    $day = wp_date('N', null, new DateTimeZone('Asia/Tokyo'));
    $day_of_week = 'MON';
    switch ($day) {
        case 1:
            $day_of_week = 'MON';
            break;
        case 2:
            $day_of_week = 'THU';
            break;
        case 3:
            $day_of_week = 'WED';
            break;
        case 4:
            $day_of_week = 'THR';
            break;
        case 5:
            $day_of_week = 'FRI';
            break;
        case 6:
            $day_of_week = 'STA';
            break;
        case 7:
            $day_of_week = 'SUN';
            break;
    }
    return $day_of_week;
}

// 開園日かどうか
function is_openGarden()
{
    $is_open = false;
    $day = wp_date('N', null, new DateTimeZone('Asia/Tokyo'));
    if ($day < 6) {
        $is_open = true;
    }
    return $is_open;
}

//画像の挿入
function get_image_html($image_url, $alt_text)
{
    // 画像のソースURLをesc_url関数を使ってエスケープします
    $image_src = esc_url(get_template_directory_uri() . $image_url);

    // alt属性のテキストをesc_attr関数を使ってエスケープします
    $alt_text = esc_attr($alt_text);

    // 画像とテキストのHTMLを組み合わせます
    $image_html = '<img src="' . $image_src . '" alt="' . $alt_text . '" />';
    return $image_html;
}

// アーカイブタイトル書き換え
function my_archive_title($title)
{

    if (is_category()) { // カテゴリーアーカイブの場合
        $title = single_cat_title('', false);
    } elseif (is_tag()) { // タグアーカイブの場合
        $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) { // タームアーカイブの場合
        $title = single_term_title('', false);
    } elseif (is_author()) { // 作者アーカイブの場合
        $title = get_the_author();
    } elseif (is_date()) { // 日付アーカイブの場合
        $title = '';
        if (get_query_var('year')) {
            $title .= get_query_var('year') . '年';
        }
        if (get_query_var('monthnum')) {
            $title .= get_query_var('monthnum') . '月';
        }
        if (get_query_var('day')) {
            $title .= get_query_var('day') . '日';
        }
    }
    return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

//カテゴリー名の入力（リンク付与）
function my_the_post_category($anchor = true)
{
    $category = get_the_category();
    if ($category[0]) {
        if ($anchor) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
        } else {
            echo $category[0]->cat_name;
        }
    }
}

function my_get_tag_items($id = 0)
{
    global $post;

    if ($id == 0) {
        $id = $post->ID;
    }

    $post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            echo '<div class="entry-tag-item"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></div>';
        }
    }
}

/**
 * 検索結果から固定ページを除外する
 */
function my_posts_search($search, $wp_query)
{
    // 検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
    if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {
        // 検索結果を投稿タイプに絞る
        $search .= " AND post_type = 'post' ";
        return $search;
    }
    return $search;
}
add_filter('posts_search', 'my_posts_search', 10, 2);

function my_shortcode($attrs, $content = '')
{
    return '<div class="entry-btn"><a class="btn" href="' . $attrs['link'] . '">' . $content . '</a></div>';
}

add_shortcode('btn', 'my_shortcode');

function my_searchform_shortcode($attrs, $content = '')
{
    return get_search_form(false);
}

add_shortcode('search_form', 'my_searchform_shortcode');
