<?php

function my_enqueue_scripts() {
    $url = esc_url( get_template_directory_uri() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bundle_js', $url .'/assets/js/bundle.js', array() );
    wp_enqueue_style( 'my_styles', $url . '/assets/css/styles.css', [] );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );


// ヘッダー、フッターのカスタムメニュー化
register_nav_menus( 
    array(
        'place_global' => 'グローバル',
        'place_footer' => 'フッターナビ'
    )
);


// メイン画像上にテンプレートごとの文字を表示
function get_main_title() {
    if(is_singular( 'post' )) {
        $category_obj = get_the_category(  );
        return $category_obj[0]->name;
    } elseif(is_page(  )) {
        return get_the_title(  );
    } elseif(is_category(  )) {
        return single_cat_title(  );
    }

    return '';
}


// 子ページを取得する関数
function get_child_pages( $number = -1 ) {
    $parent_id = get_the_ID(  );
    $args = array(
        'posts_per_page' => $number,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
    );
    $child_pages = new WP_Query($args);
    return $child_pages;
}


// アイキャッチを利用できるようにする
add_theme_support( 'post-thumbnails' );

// トップページのメイン画像用サイズ設定
add_image_size( 'top', 1077, 622, true );

// 地域貢献活動一覧用の画像サイズ
add_image_size( 'contribution', 557, 280, true );

// トップページ>地域貢献活動で使用する画像サイズ
add_image_size( 'front-contribution', 255, 189, true );

// 企業情報一覧、店舗情報一覧の画像サイズ
add_image_size( 'common', 465, 252, true );

// 各ページのメイン画像用サイズ
add_image_size( 'detail', 1100, 330, true );

// 検索一覧の画像サイズ
add_image_size( 'search', 168, 168, true );