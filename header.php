<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.png" class="main-logo" alt="ATRAIL" />
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/logo.png" class="fixed-logo" alt="ATRAIL" />
            <p>アトレイル株式会社</p>
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <!-- <nav class="global-nav">
            <?php
            wp_nav_menu([
              'theme_location' => 'place_global',
              'container' => false,
            ]);
            ?>
          </nav> -->
          <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
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
    <!-- front-page.phpの場合 -->
    <?php if (is_front_page()): ?>
      <section class="section-contents" id="keyvisual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-dummy.png" alt="">
        <div class="wrapper">
          <h1 class="site-title">Your Style</h1>
          <p class="site-caption">(ダミー)自由な発想の建物で<br>暮らしに自由を</p>
        </div>
      </section>
      <!-- front-page.php以外のphpページの場合 -->
    <?php else: ?>
      <div class="wrap">
        <div id="primary" class="content-area">
          <main>
            <div class="page-contents">
              <div class="page-head">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-page-dummy.png" alt="">

                <div class="wrapper">
                  <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
                  <h2 class="page-title"><?php echo get_main_title(); ?></h2>
                </div>
              </div>
              <div class="page-container">
                <div class="bread_crumb">
                  <?php
                  if (function_exists('bcn_display')) {
                    bcn_display();
                  }
                  ?>
                </div>
              <?php endif; ?>