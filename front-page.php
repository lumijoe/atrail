<?php get_header(); ?>
<!-- nav -->
<div>
  <nav class="global-nav nav-list">
    <?php
    wp_nav_menu([
      'theme_location' => 'place_global',
      'container' => false,
    ]);
    ?>
  </nav>
</div>




<!-- ------------------------------
//////////// 事業案内 shop
------------------------------- -->
<section class="section-contents" id="shop">
  <div class="wrapper">


    <!----------------------------
    /////// 使用するページの要素を取得するphp
    ----------------------------->
    <?php
    // 固定ページを表示させる（引数：ページのスラッグ）
    $shop_obj = get_page_by_path('shop');
    // 投稿記事
    $post = $shop_obj;
    // 固定ページの投稿記事を使用する宣言（引数：関数定義）
    setup_postdata($post);
    // タイトルを取得
    $shop_title = get_the_title();
    ?>
    <!----------------------------
    // 取得したphpなどのhtml予約
    ----------------------------->
    <!-- 英語のタイトル -->
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <!-- ❶タイトル -->
    <h2 class="section-title"><?php the_title(); ?></h2>
    <!-- 本文 -->
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <!-- ❸投稿表示ループ終わりの宣言 -->
    <?php wp_reset_postdata(); ?>




    <ul class="shops">
      <!----------------------------
      /////// 使用するページの要素を取得するphp
      ----------------------------->
      <?php
      // 記事が続く限り、でも４つまで
      $shop_pages = get_child_pages(4, $shop_obj->ID);
      if ($shop_pages->have_posts()) :
        while ($shop_pages->have_posts()) : $shop_pages->the_post();
      ?>
          <li class="shops-item">
            <a class="shop-link" href="<?php the_permalink(); ?>">
              <div class="shop-image"><?php the_post_thumbnail('common'); ?></div>
              <div class="shop-body">
                <!-- ❶タイトル -->
                <p class="name"><?php the_title(); ?></p>
                <!-- 引数：❷ACFのフィールド名 -->
                <p class="location"><?php the_field('location'); ?></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">詳しくは→</button>
                </div>
              </div>
            </a>
          </li>
          <!-- ❸投稿表示ループ終わりの宣言 -->
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul> <!--ulここまで-->
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('shop')); ?>';">
        <?php echo $shop_title; ?>一覧を見る
      </button>
    </div>
  </div>
</section>
<!-- 施工事例ここから -->
<section class="section-contents" id="contribution">
  <div class="wrapper">
    <?php
    $contribution_obj = get_page_by_path('contribution');
    $post = $contribution_obj;
    setup_postdata($post);
    $contribution_title = get_the_title();
    ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <?php wp_reset_postdata(); ?>
    <div class="articles">
      <?php
      $contribution_pages = get_specific_posts('daily_contribution', 'event', '', 3);
      if ($contribution_pages->have_posts()) :
        while ($contribution_pages->have_posts()) : $contribution_pages->the_post();
      ?>
          <article class="article-card">
            <a class="card-link" href="<?php the_permalink(); ?>">
              <div class="card-inner">
                <div class="card-image"><?php the_post_thumbnail('front-contribution'); ?></div>
                <div class="card-body">
                  <p class="title"><?php the_title(); ?></p>
                  <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">詳しくは→</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>

    <!-- 施工事例 -->
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('contribution')); ?>';">
        <?php echo $contribution_title; ?>一覧を見る
      </button>
    </div>
  </div>
</section>
<!-- cta -->
<section class="l-cta">
  <button class="p-cta-btn">
    <a href="#contact">お問い合わせ→</a>
  </button>
</section>



<!-- お知らせ -->
<section class="section-contents" id="news">
  <div class="wrapper maxw600">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p>

    <div class="page-inner full-width">
      <div class="page-main" id="pg-news">
        <div class="main-container">
          <div class="main-wrapper">
            <div class="newsLists">
              <?php
              $news_posts = get_specific_posts('post', 'category', 'news', 4);
              if ($news_posts->have_posts()):
                while ($news_posts->have_posts()): $news_posts->the_post();
              ?>
                  <div>
                    <a class="news-link" href="<?php the_permalink(); ?>">
                      <div class=news-body>
                        <time class="release"><?php the_time('Y.m.d'); ?></time>
                        <p class="title"><?php the_title(); ?></p>
                      </div>
                    </a>
                  </div>
              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pager">
      <ul class="pagerList">
        <?php
        page_navi();
        ?>
      </ul>
    </div>
  </div>

  <div class="section-buttons">
    <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
      <?php echo $term_obj->name; ?>一覧を見る
    </button>
  </div>
  </div>
</section>



<!-- 会社概要 -->
<!----------------------------------
        company
----------------------------------->
<section class="section-contents" id="company">
  <div class="wrapper maxw600">
    <?php
    $company_page = get_page_by_path('company');
    $post = $company_page;
    setup_postdata($post);
    ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <div class="l-company-table">
      <table>
        <tr>
          <th>社名</th>
          <td>アトレイル株式会社</td>
        </tr>
        <tr>
          <th>代表者</th>
          <td>代表取締役 西田 博</td>
        </tr>
        <tr>
          <th>本社所在地</th>
          <td>〒663-8227 兵庫県西宮市今津出在家 6 番 1 号</td>
        </tr>
        <tr>
          <th>TEL</th>
          <td>00-0000-0000</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>1,000,000 円</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2023年</td>
        </tr>
        <tr>
          <th>取引銀行</th>
          <td>●●●●銀行 ●●支店</td>
        </tr>
      </table>
    </div>
  </div>
</section>
<!-- ↑ -->

<!-- お問い合わせ -->
<!----------------------------------
        form
----------------------------------->
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
</section>



<?php get_footer(); ?>