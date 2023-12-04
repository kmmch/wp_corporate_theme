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
    }

    return '';
}