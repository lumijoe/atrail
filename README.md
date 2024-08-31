# atrail

お知らせ

<!-- お知らせ -->
<!-- <section class="section-contents" id="news">
  <div class="wrapper">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p>
    <ul class="news">
      <?php
      $news_posts = get_specific_posts('post', 'category', 'news', 3);
      if ($news_posts->have_posts()):
        while ($news_posts->have_posts()): $news_posts->the_post();
      ?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <?php echo $term_obj->name; ?>一覧を見る
      </button>
    </div>
  </div>
</section> -->

<!-- news test -->
<!-- <section class="section-contents" id="news">
  <div class="wrapper">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p> -->
<!-- ||| -->
<!-- <div class="page-inner full-width">
      <div class="page-main" id="pg-news">
        <div class="main-container">
          <div class="main-wrapper">
            <div class="newsLists">
              <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  get_template_part('content-archive');
                endwhile;
              endif;
              ?>
            </div>
            <div class="pager">
              <ul class="pagerList">
                <?php
                page_navi();
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <ul class="news">
      <?php
      $news_posts = get_specific_posts('post', 'category', 'news', 5);
      if ($news_posts->have_posts()):
        while ($news_posts->have_posts()): $news_posts->the_post();
      ?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <?php echo $term_obj->name; ?>一覧を見る
      </button>
    </div>
  </div>
</section> -->

## wp-config.php

/\*\*

- 開発者へ: WordPress デバッグモード
-
- この値を true にすると、開発中に注意 (notice) を表示します。
- テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
  \*/
  define('WP_DEBUG', false);

/_ 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 _/

/** Absolute path to the WordPress directory. \*/
if (!defined('ABSPATH'))
define('ABSPATH', dirname(**FILE**) . '/');
/** コンタクトフォームの P タグ不要 \*/
define('WPCF7_AUTOP', false);

/\*_ Sets up WordPress vars and included files. _/
require_once(ABSPATH . 'wp-settings.php');

p タグ不要の追加

## form

<!-- <section class="l-contact" id="contact">
  <div class="l-contact-inner l-section-inner-plf--20px l-section-inner">
    <h3 class="p-section_ttl--pb32">お問い合わせ</h3>
    <div class="p-section_ttlborder"></div>
    <p>ご質問などがございましたら、下記の《お問い合わせフォーム》へご入力ください。</p>
    <div class="l-form">
      <div class="l-form-inner">

        <form action="" method="get" class="form-example-box">
          <div class="form-example">
            <label for="name" class="form_label">お名前</label>
            <input type="text" name="name" id="name" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="email" class="form_label">メールアドレス</label>
            <input type="email" name="email" id="email" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="tel" class="form_label">電話番号</label>
            <input type="tel" name="tel" id="tel" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="textcontent" class="form_label">お問い合わせ内容</label>
            <input type="text" name="textcontent" id="textcontent" required class="form_input--freetxt" />
          </div>
          <div class="py25 l-flex-center">
            <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
            <label for="privacy-policy">プライバシーポリシーに同意する</label>
          </div>
          <div class="form-example">
            <input type="submit" value="入力内容を確認する" class="btn-submit" />
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="l-contact" id="contact">
  <div class="l-contact-inner l-section-inner-plf--20px l-section-inner">
    <h3 class="p-section_ttl--pb32">お問い合わせ</h3>
    <div class="p-section_ttlborder"></div>
    <p>ご質問などがございましたら、下記の《お問い合わせフォーム》へご入力ください。</p>
    <div class="l-form">
      <div class="l-form-inner">
        <form action="" method="get" class="form-example-box">
          <div class="form-example">
            <label for="name" class="form_label">お名前</label>
            <input type="text" name="name" id="name" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="email" class="form_label">メールアドレス</label>
            <input type="email" name="email" id="email" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="tel" class="form_label">電話番号</label>
            <input type="tel" name="tel" id="tel" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="textcontent" class="form_label">お問い合わせ内容</label>
            <input type="text" name="textcontent" id="textcontent" required class="form_input--freetxt" />
          </div>
          <div class="py25 l-flex-center">
            <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
            <label for="privacy-policy">プライバシーポリシーに同意する</label>
          </div>
          <div class="form-example">
            <input type="submit" value="入力内容を確認する" class="btn-submit" />
          </div>
        </form>
      </div>
    </div>
  </div>
</section> -->

## form

<section class="l-contact" id="contact">
  <div class="l-contact-inner l-section-inner-plf--20px l-section-inner">
    <h3 class="p-section_ttl--pb32">お問い合わせ</h3>
    <div class="p-section_ttlborder"></div>
<p>ご質問などがございましたら、下記の《お問い合わせフォーム》へご入力ください。</p>
    <div class="l-form">
      <div class="l-form-inner">
          <div class="form-example">
            <label for="name" class="form_label">お名前</label>
            [mwform_text name="your-name" id="your-name" class="form_input" placeholder="山田太郎" size="none"]
          </div>
　　　　　　<div class="form-example">
            <label for="email" class="form_label">メールアドレス</label>
            [mwform_email name="your-email" id="your-email" class="form_input" placeholder="xxx@xxxx.com" size="none"]
          </div>
          <div class="form-example">
            <label for="tel" class="form_label">電話番号</label>
            [mwform_tel name="your-tel" id="your-tel" class="form_input" placeholder="000-0000-0000" size="none"]
          </div>
          <div class="form-example">
            <label for="textcontent" class="form_label">お問い合わせ内容</label>
            [mwform_textarea name="your-textcontent" id="your-textcontent" class="form_input--freetxt" size="none"]
          </div>
          <div class="py25 l-flex-center">
            [mwform_checkbox name="privacy-policy" id="privacy-policy" children="プライバシーポリシーに同意する"]
          </div>
          <div class="form-example btn-center">
            [mwform_submitButton name="btn_confirmsubmit" confirm_value="確認画面へ" submit_value="送信する"]
          </div>
      </div>
    </div>
  </div>
</section>

## humburger

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
# theme_atrail
# theme_atrail

##header
の変更

