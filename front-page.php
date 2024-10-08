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

<!----------------------------------
        gallery
        ----------------------------------->
<section class="l-gallery-section">
  <ul class="l-section-inner l-section-inner-plf--20px l-gallery-section-inner">
    <li class="l-gallery">
      <img src="https://dummyimage.com/400x310/d9d9d9/fff" alt="" srcset="">
      <p>（ダミー）私たちは、暮らしに自由を感じ、理想の住まいを見つけるお手伝いを致します。
        自由な発見、広がる空間、理想の暮らし。それが私たちの約束です。豊富な物件ラインナップと専門的な知識を持ち、お客様の夢を形にします。自分らしいライフスタイルを見つけましょう。
        ご要望に合わせて柔軟なプランを提供し、理想の住まいに出会えるよう努めます。未来の住まいに、自由な可能性を感じさせる物件がきっと見つかります。新しい一歩を踏み出すなら、ウェルホーム不動産がそばにいます。自由な未来、理想の住まいを一緒に見つけましょう。「暮らしに自由を」、それが私たちのコミットメントです。</p>
    </li>
    <li class="l-gallery">
      <img src="https://dummyimage.com/400x310/d9d9d9/fff" alt="" srcset="">
      <p>（ダミー）コンテナハウスは、船舶やトラックで輸送されるためのコンテナを再利用して建設された住宅や建築物の形態です。持続可能でコスト効率が高く、迅速に建設できる選択肢として注目されています。
        1. コスト効率 : 新しい建材を使用するよりも比較的低コストです。
        2. 迅速な建設 : 短期間で住宅や建築物を完成させることが可能です。 􀀃. モジュール性と拡張性 : コンテナは標準化されておりモジュールとして簡単に組み立てられ、柔軟なプランニングが可能です。
        3. 耐久性と強度 : コンテナは非常に強固で耐久性があります。これによ
        り、地震や自然災害に対する強い耐性を持っています。
        4. 移動可能性 : コンテナハウスは基本的に移動可能で、様々な場所で
        利用でき、移動型住宅や仮設施設としての利用が可能です。
        5. 現代的なデザイン : モダンで洗練された外観を持って独自のスタイリッシュなデザインを実現できます。
      </p>
    </li>
    <li class="l-gallery">
      <img src="https://dummyimage.com/400x310/d9d9d9/fff" alt="" srcset="">
      <p>（ダミー）私たちは、暮らしに自由を感じ、理想の住まいを見つけるお手伝いを致します。
        自由な発見、広がる空間、理想の暮らし。それが私たちの約束です。豊富な物件ラインナップと専門的な知識を持ち、お客様の夢を形にします。自分らしいライフスタイルを見つけましょう。
        ご要望に合わせて柔軟なプランを提供し、理想の住まいに出会えるよう努めます。未来の住まいに、自由な可能性を感じさせる物件がきっと見つかります。新しい一歩を踏み出すなら、ウェルホーム不動産がそばにいます。自由な未来、理想の住まいを一緒に見つけましょう。「暮らしに自由を」、それが私たちのコミットメントです。</p>
    </li>
    <li class="l-gallery">
      <img src="https://dummyimage.com/400x310/d9d9d9/fff" alt="" srcset="">
      <p>（ダミー）コンテナハウスは、船舶やトラックで輸送されるためのコンテナを再利用して建設された住宅や建築物の形態です。持続可能でコスト効率が高く、迅速に建設できる選択肢として注目されています。
        1. コスト効率 : 新しい建材を使用するよりも比較的低コストです。
        2. 迅速な建設 : 短期間で住宅や建築物を完成させることが可能です。 􀀃. モジュール性と拡張性 : コンテナは標準化されておりモジュールとして簡単に組み立てられ、柔軟なプランニングが可能です。
        3. 耐久性と強度 : コンテナは非常に強固で耐久性があります。これによ
        り、地震や自然災害に対する強い耐性を持っています。
        4. 移動可能性 : コンテナハウスは基本的に移動可能で、様々な場所で
        利用でき、移動型住宅や仮設施設としての利用が可能です。
        5. 現代的なデザイン : モダンで洗練された外観を持って独自のスタイリッシュなデザインを実現できます。
      </p>
    </li>
  </ul>
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
    <a href="https://lkcodetest.sakura.ne.jp/atrail/contact">お問い合わせ→</a>
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
<?php echo apply_shortcodes('[mwform_formkey key="263"]'); ?>



<?php get_footer(); ?>