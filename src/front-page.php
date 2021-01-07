<?php get_header(); ?>

<div class="loading" id="loading">
  <p class="loading__text active" data-txt="Welcome Morishita Riku Portfolio.">Welcome<br> Morishita Riku<br> Portfolio.</p>
</div>

<!-- start contents -->
<section class="mainVisual" id="mainVisual">
  <div class="mainVisual__image"></div>

  <div class="INNER">
    <div class="mainVisual__wrapper">
      <h2 class="mainVisual__mainCopy">Morishita<br />Riku</h2>
      <p class="mainVisual__subCopy">Portfolio</p>
    </div>
    <p class="mainVisual__text">Code<br />Design</p>
  </div>
  <div class="mainVisual__background">
    <div class="mainVisual__scroll"></div>
  </div>
</section>

<!-- WORKS -->
<section class="works" id="works">
  <h2 class="TITLE" data-txt="WORKS">制作実績</h2>
  <div class="WRAPPER">
    <div class="works__wrapper">
      <?php
      $args = array(
        'post_type' => 'work', /* カスタム投稿名を複数表示*/
        'posts_per_page' => 5, /* 表示する数 */
        'orderby' => 'menu_order', /* 表示する数順番 */
        'order' => 'ASC', /* 表示する数順番 */
      ); ?>

      <?php $my_query = new WP_Query($args); ?>
      <?php while ($my_query->have_posts()) : $my_query->the_post();
        $loopcount++; ?>

        <?php if ($loopcount <= 1) : ?>
          <div class="works__card works__card--first">

            <!-- ▽ ループ開始 ▽ -->
            <?php
            if (has_post_thumbnail()) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              echo get_thumb_img('full', 'works__image');
            } else {
              // なければnoimage画像をデフォルトで表示
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" class="works__image" alt="">';
            }
            ?>
            <div class="works__box">
              <h2 class="works__title"><?php the_title(); ?></h2>
              <ul class="works__listFrame">
                <li class="works__listItem">
                  <?php
                  $posttags = get_the_tags();
                  foreach ($posttags as $tag) {
                    echo '<p class="works__category">' . $tag->name . '</p>';
                  }
                  ?>
                </li>
              </ul>
              <p class="works__caption"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="BUTTON">VIEW DETAILS</a>
            </div>
            <!-- △ ループ終了 △ -->
          </div>

          <div class="works__box--second">

            <!-- 2件目以降の実績 -->
          <?php else : ?>

            <div class="works__card works__card--child">
              <!-- ▽ ループ開始 ▽ -->
              <?php
              if (has_post_thumbnail()) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                echo get_thumb_img('large', 'works__image');
              } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" class="works__image" alt="">';
              }
              ?>
              <h2 class="works__title"><?php the_title(); ?></h2>
              <ul class="works__listFrame">
                <li class="works__listItem">
                  <?php
                  $posttags = get_the_tags();
                  foreach ($posttags as $tag) {
                    // echo $tag->name . ' ';
                    echo '<p class="works__category">' . $tag->name . '</p>';
                  }
                  ?>
                </li>
              </ul>
              <a href="<?php the_permalink(); ?>" class="BUTTON">VIEW DETAILS</a>
              <!-- △ ループ終了 △ -->
            </div>
            <!-- works__box end-->
          <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

          </div>
          <!-- works__box second end -->

    </div>
    <!-- works__wrapper end-->
  </div>
  <!-- WRAPPER end-->
</section>
<!-- WORKS ここまで -->

<!-- profile -->
<section class="profile" id="profile">
  <div class="WRAPPER">
    <h2 class="TITLE" data-txt="PROFILE">私について</h2>
    <div class="profile__wrapper">
      <div class="profile__card">
        <h3 class="profile__name">森下 陸<span class="profile__name--en">Morishita Riku</span></h3>
        <p class="profile__job">WEB Designer</p>
        <p class="profile__age">age:23</p>
        <p class="profile__text">- 何事にも、全力で。</p>
        <a href="<?php echo esc_url(home_url('profile')); ?>" class="BUTTON">READ MORE</a>
      </div>
      <!-- profile__card end-->
    </div>
    <!--profile__wrapper end-->
  </div>
  <!-- WRAPPER end-->
</section>
<!-- profile ここまで -->

<!-- SKILL -->
<section class="skill" id="skill">
  <div class="INNER">
    <h2 class="TITLE">SKILL</h2>
    <p class="skill__description">制作にあたって私ができることを記載しています。<span class="skill__description--deco">※下のパネルを押すと対応するブロックに移動します。</span></p>

    <div class="skill__wrapper">
      <div class="skill__box--first">
        <ul class="skill__listFrame">
          <li class="skill__listItem"><a class="skill__link skill__link--html" href="#code" data-txt="HTML"><img class="skill__icon--html" src="<?php echo get_template_directory_uri(); ?>/img/html.svg" alt="HTMLアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--css" href="#css" data-txt="CSS"><img class="skill__icon--css" src="<?php echo get_template_directory_uri(); ?>/img/css.svg" alt="CSSアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--scss" href="#css" data-txt="SCSS"><img class="skill__icon--scss" src="<?php echo get_template_directory_uri(); ?>/img/scss.svg" alt="scssアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--js" href="#js" data-txt="Javascript"><img class="skill__icon--js" src="<?php echo get_template_directory_uri(); ?>/img/javascript.svg" alt="Javascriptアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--jq" href="#js" data-txt="jQuery"><img class="skill__icon--jq" src="<?php echo get_template_directory_uri(); ?>/img/jquery.svg" alt="jQueryアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--gulp" href="#code" data-txt="gulp"><img class="skill__icon--gulp" src="<?php echo get_template_directory_uri(); ?>/img/gulp.svg" alt="gulpアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--wp" href="#wp" data-txt="WordPress"><img class="skill__icon--wp" src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt="wordpressアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--php" href="#wp" data-txt="PHP"><img class="skill__icon--php" src="<?php echo get_template_directory_uri(); ?>/img/php.svg" alt="phpアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--git" href="#git" data-txt="Git"><img class="skill__icon--git" src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt="githubアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--psd" href="#psd" data-txt="Ps"><img class="skill__icon--psd" src="<?php echo get_template_directory_uri(); ?>/img/psd.svg" alt="psdアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--xd" href="#psd" data-txt="XD"><img class="skill__icon--xd" src="<?php echo get_template_directory_uri(); ?>/img/xd.svg" alt="XDアイコン" /></a></li>
          <li class="skill__listItem"><a class="skill__link skill__link--figma" href="#psd" data-txt="Figma"><img class="skill__icon--figma" src="<?php echo get_template_directory_uri(); ?>/img/figma.svg" alt="figmaアイコン" /></a></li>
        </ul>
        <!-- skill__listFrame end -->
      </div>
      <!-- skill__box--first end -->
      <div class="skill__box--second">
        <div class="skill__card skill__card--wide skill__card--css" id="css">
          <h3 class="skill__name--first">CSS</h3>
          <h4 class="skill__name--child">SCSS</h4>
          <p class="skill__caption">変数やmixin,for文などを用いた柔軟なコーディングが可能です。また、管理がしやすいディレクトリ構造にも心掛けています。</p>
          <h4 class="skill__name--child">CSS設計</h4>
          <p class="skill__caption">BEMの考え方をベースにしております。 再利用性と柔軟性に長けた管理のしやすい設計を目指し、日々勉強中です。またCSSクリックイベントを用いた、アコーディオンやドロワーメニューの作成が可能です。</p>
        </div>
        <!-- skill__card skill__card--wide end-->
        <div class="skill__card skill__card--js" id="js">
          <h3 class="skill__name--first">Javascript / jQuery</h3>
          <p class="skill__caption">
            ストップウォッチやTodoListなどのミニアプリの制作が可能です。また、ライトボックスのような画像ギャラリーのようなものであればフルスクラッチで実装することができます。
          </p>
        </div>
        <!-- skill__card end-->
        <div class="skill__card skill__card--wp" id="wp">
          <h3 class="skill__name--first">WordPress / PHP</h3>
          <p class="skill__caption">
            カスタム投稿やカスタムフィールドなどを用いた保守・管理に強いテーマ構築が可能です。サイト制作後の修正まで意識した制作を行います。既存テーマの修正対応も可能です。
          </p>
        </div>
        <!-- skill__card end-->
        <div class="skill__card skill__card--psd" id="psd">
          <h3 class="skill__name--first">PhotoShop / XD / Figma</h3>
          <p class="skill__caption">
            画像編集、ロゴやバナーの作成のほか、デザインカンプ、ワイヤーフレームの作成が可能です。デザインカンプはコーディングに配慮した制作を心掛けています。Figmaでは共有機能を活かしたチーム制作の経験があります。
          </p>
        </div>
        <!-- skill__card end-->
        <div class="skill__card skill__card--git" id="git">
          <h3 class="skill__name--first">Git / Github</h3>
          <p class="skill__caption">Git、Githubを用いたバージョン管理が可能です。<br>現在、複数人での使用を円滑にするため勉強中です。</p>
        </div>
        <!-- skill__card end-->
      </div>
      <div class="skill__box--third">
        <div class="skill__card skill__card--code" id="code">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/code.svg" alt="コーディングのイラスト" />
          <h3 class="skill__name--second">コーディング</h3>
          <p class="skill__caption">
            デザインカンプ上の細かな余白や装飾を意識し、忠実に再現します。HTMLの文書構造に配慮した、セマンティックで管理のしやすいコーディングを心掛けています。ニュースやブログなどの更新頻度の高いサイトではワードプレスを用いたCMS実装まで対応可能です。
            また、タスクランナー（gulp）を使用した実装環境で、効率の良いコーディングを行います。
          </p>
        </div>
        <!-- skill__card end-->
        <div class="skill__card skill__card--design" id="design">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/design.svg" alt="デザインのイラスト" />
          <h3 class="skill__name--second">デザイン</h3>
          <p class="skill__caption">
            ヒアリングに基づいた内容に沿って、デザインを作成します。見やすさや使いやすさを意識し、目的達成を円滑にするデザイン設計を心掛けています。お客様の思いやこだわりをWEBサイトに落とし込み、ユーザーにとっても分かりやすいサイトデザインを作成します。
          </p>
        </div>
        <!-- skill__card end-->
      </div>
      <!-- skill__box--third end-->
    </div>
    <!-- skill__wrapper end-->
  </div>
</section>
<!-- SKILL ここまで -->

<!-- BLOG -->
<section class="blog" id="blog">
  <div class="INNER">
    <div class="blog__wrapper">
      <a class="blog__link" href="https://note.com/rank228130" target="_blank">
        <div class="blog__box--first">
          <p class="blog__copy SP--none">サイトレビュー100本ノック、更新中！</p>
          <h2 class="TITLE">BLOG</h2>
          <p class="blog__caution PC--none">※noteに遷移します</ｐ>
            <p class="blog__text">Read More<span class="blog__caution SP--none">※noteに遷移します。</span></p>
        </div>
      </a>
      <div class="blog__box--second">
        <!-- note 投稿画像 -->

        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
            <?php the_content(); ?>
          <?php
          endwhile; ?>
        <?php
        endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- BLOG ここまで -->

<?php get_template_part('template-parts/backContact'); ?>

</main>

<?php get_footer(); ?>
