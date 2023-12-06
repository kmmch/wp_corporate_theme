<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo esc_html( wp_get_document_title()); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="<?php echo home_url(); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/biztech/sub-logo.png" class="main-logo" alt="Biz Tech" />
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/biztech/main-logo.png" class="fixed-logo" alt="Biz Tech" />
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <nav class="global-nav">
<?php
wp_nav_menu( 
  array(
    'theme_location' => 'place_global',
    'container' => false,
  )
);
?>
          </nav>
          <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url(  ) ); ?>">
            <div class="search-box">
              <input type="text" class="search-input" name="s" placeholder="キーワードを入力してください" />
              <button type="submit" class="button-submit"></button>
            </div>
            <div class="search-buttons">
              <button type="button" class="close-icon js-searchIcon"></button>
              <button type="button" class="search-icon js-searchIcon"></button>
            </div>
          </form>
        </div>
      </div>
    </header>
<?php
if(is_front_page(  )):
?>
    <section class="section-contents" id="keyvisual">
      <?php echo get_main_image(); ?>
      <div class="wrapper">
        <h1 class="site-title">Innovate For Success.</h1>
        <p class="site-caption"><?php echo get_the_excerpt(  ); ?></p>
      </div>
    </section>
<?php
else:
?>
<div class="wrap">
  <div id="primary" class="content-area">
    <main>
      <div class="page-contents">
        <div class="page-head">
          <?php echo get_main_image(); ?>
          <div class="wrapper">
            <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
            <h2 class="page-title"><?php echo get_main_title(); ?></h2>
          </div>        
        </div>
        <div class="page-container">
          <div class="bread_crumb">
<?php
if(function_exists('bcn_display')) {
  bcn_display();
}
?>
          </div>
<?php
endif;
?>