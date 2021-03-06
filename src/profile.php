<?php
/*
Template Name: プロフィール
*/
?>

<?php get_header(); ?>
<section class="about SECTION" id="about">
  <h2 class="TITLE" data-txt="PROFILE">プロフィール</h2>
  <div class="WRAPPER--min">

    <div class="about__wrapper">
      <div class="about__card">
        <h2 class="about__name">森下&emsp;陸</h2>
        <p class="about__job">WEBデザイナー</p>
        <dl class="about__list">
          <div class="about__box">
            <dt class="about__term" data-content="：">生年月日</dt>
            <dd class="about__description">1997年</dd>
          </div>
          <!-- about__box end -->
          <div class="about__box">
            <dt class="about__term" data-content="：">出身地</dt>
            <dd class="about__description">兵庫県</dd>
          </div>
          <!-- about__box end -->
          <div class="about__box">
            <dt class="about__term" data-content="：">最終学歴</dt>
            <dd class="about__description">甲南大学経営学部</dd>
          </div>
          <!-- about__box end -->
          <div class="about__box about__box--deco">
            <dt class="about__term">好きなもの</dt>
            <dd class="about__description about__description--deco">
              写真&nbsp;／音楽&nbsp;／&nbsp;洋服&nbsp;／&nbsp;映画&nbsp;／&nbsp;コーヒー&nbsp;／&nbsp;ゆとりのある空間
            </dd>
          </div>
          <!-- about__box about__box--deco end -->
          <div class="about__box about__box--deco">
            <dt class="about__term">座右の銘</dt>
            <dd class="about__description about__description--deco">千里の道も一歩から</dd>
          </div>
          <!-- about__box about__box--deco end -->
        </dl>
        <!-- about__list end-->
      </div>
      <!-- about__card end-->

      <div class="figure about__image">
               <img src="<?php echo get_template_directory_uri(); ?>/dist/img/profile.jpg" alt="プロフィール画像" />
        <svg id="Name" class="about__sign" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 147.12 26.53">
          <path class="cls-1" d="M2.62,13.42l-1-1a4.68,4.68,0,0,1-1-2,5.34,5.34,0,0,1,.88-4.1L2,5.46A4.89,4.89,0,0,1,4.59,3.14l3-1.69.12,0L9.87.91A5,5,0,0,1,13,.63l3.15.73a5.36,5.36,0,0,1,2.51,1.27,5,5,0,0,1,.63,6.44l-.47.66a5.66,5.66,0,0,1-.55.66l-2.32,2.36a5.32,5.32,0,0,1-2,1.28l-3.05,1.11-2.78,1L4.62,17.42" />
          <path class="cls-2" d="M23.62,18.42a11.2,11.2,0,0,1-3,4,8.92,8.92,0,0,1-4,2,3.16,3.16,0,0,1-2,0c-1.72-.76-2-3.64-2-4-.16-2.06.66-3,0-4a2.78,2.78,0,0,0-2-1" />
          <path class="cls-2" d="M11.62,4.42,4,25.39Z" />
          <path class="cls-3" d="M22.62,20.42a3.77,3.77,0,0,0,2,1,4.2,4.2,0,0,0,3.88-1.79.61.61,0,0,0,.07-.14L31.62,9.42l-3,13" />
          <path class="cls-4" d="M25.62,12.42a.7.7,0,0,0,0-1,.69.69,0,0,0-1,0C24.48,11.73,25.3,12.56,25.62,12.42Z" />
          <path class="cls-5" d="M29.62,18.42c.2-.39,1.67-3.11,3.43-3,.13,0,.84.05,1.07.5s-.13,1.12-.5,1.5c-.72.73-1.45.34-2,1a1.93,1.93,0,0,0-.18,2c.15.29.51.48,1.22.85a4.7,4.7,0,0,0,1,.46,3.57,3.57,0,0,0,1.6.09c1.58-.31,2.3-2.32,2.33-2.4,1.17-2.53,1.82-3.78,1.94-3.73s-.34,1.57-1.41,4.54a.45.45,0,0,0,0,.36l.45.83,2-.79a.46.46,0,0,0,.21-.18l1.83-3c.55-.11.7.38.18.85a.47.47,0,0,0-.16.38l.22,2.21a.42.42,0,0,0,.31.37l1.15.32,2.06-.77c.53-.81,1.06-1.62,1.6-2.43" />
          <line class="cls-3" x1="24.34" y1="16.52" x2="23.37" y2="18.94" />
          <path class="cls-3" d="M56.28,14l-3-1.79a.39.39,0,0,1-.2-.28l-.78-3.55V8.22a4.14,4.14,0,0,1,1.33-2.8l.93-.89.08-.1a7.05,7.05,0,0,1,3-2l1.77-.3a.46.46,0,0,1,.26,0l1.7.29a.42.42,0,0,1,.34.3l.75,2.46a.45.45,0,0,1,0,.2l-.83,5.09c-.1.68-.27,1.74-.53,3-.57,2.86-1.07,4.25-1.47,6A28.63,28.63,0,0,0,58.9,26l2.49-6,0-.05,4.66-8.3a.22.22,0,0,1,0-.08l6-6.71.73.81a.42.42,0,0,1,.09.44c-.51,1.27-1.29,3.1-2.34,5.28-.51,1-.8,1.58-1,2a23.05,23.05,0,0,0-2.15,8.52l2.24-2.71,0-.05c.45-.39,1.11-1,1.87-1.76a33.93,33.93,0,0,0,4-5,24.61,24.61,0,0,1,1.8-2.76,15.2,15.2,0,0,1,1.89-2,.43.43,0,0,1,.59,0l.51.51a.43.43,0,0,1,.08.48l-1.68,3.75-2.74,6.17a.44.44,0,0,0,0,.28l1.11,4.54a.44.44,0,0,0,.36.32l2.83.4a.51.51,0,0,0,.32-.08L83.46,22a.94.94,0,0,0,.1-.1l3.69-5.39a.44.44,0,0,1,.74,0l.49.91a.44.44,0,0,1-.06.51l-1,1,1,.81.76.25-2.45,1.66a.44.44,0,0,1-.57-.07A18.47,18.47,0,0,1,84.85,20" />
          <path class="cls-5" d="M88.63,17.73l1,.69-.27,1.19a.44.44,0,0,0,.29.51l.88.27a.44.44,0,0,0,.2,0L93,20a.41.41,0,0,0,.27-.17l2.36-3.4v-1l.75-1.22" />
          <path class="cls-3" d="M95.62,16.42l2.12,1.18-.12.82-.68.69a.9.9,0,0,0-.15.88l.66,1.32c.12,0,.27.13.46.17l1,.19a.57.57,0,0,0,.53-.16l2.1-2a.27.27,0,0,0,.09-.12,2.9,2.9,0,0,0,1-.93,3,3,0,0,0,.42-2l-.39,3.72a.58.58,0,0,0,.17.48l.8.8.83.31,2.09-1.27.07-.05a10.18,10.18,0,0,0,2-2l1-2.9h0a.13.13,0,0,1,0-.12l1-.95" />
          <polygon class="cls-3" points="104.31 11.76 104.64 11.44 104.81 12.26 104.41 12.21 104.31 11.76" />

          <path class="cls-3" d="M109.62,16.42l1,2.93a.35.35,0,0,1,0,.14v1.59a.44.44,0,0,1-.33.42l-.94.23-.73-.31" />
          <path class="cls-3" d="M109.83,21.61l1.56.71a.44.44,0,0,0,.43,0L115,20.07a.37.37,0,0,0,.16-.21c.51-1.47,1-2.95,1.51-4.44q.87-2.61,1.71-5.19l-3.16,11.5,2.43-3.28a.1.1,0,0,1,0-.05l1.55-1.55.43.57.15.95v.07l-.11,1.83a.38.38,0,0,0,.08.27l.72,1a1.25,1.25,0,0,0,.19.15c.73.44,1.81-.2,2-.3l-.21,0c.06-.08.13-.1.18-.08l0,0,1-2a.08.08,0,0,1,0,0l1.89-3L125,19a.41.41,0,0,0,0,.19l.52,2a.44.44,0,0,0,.36.32l1.62.24a.42.42,0,0,0,.39-.16l1.68-2.08a.56.56,0,0,1,0-.08l2.49-5.18c.4-.92.81-1.83,1.21-2.75" />
          <polyline class="cls-3" points="126.38 11.57 126.7 12.17 126.54 11.34 126.62 11.42 126.62 11.42" />

          <path class="cls-3" d="M129.53,14.5a6.87,6.87,0,0,1,3.21-.24,5.31,5.31,0,0,0,1.88.16A4.51,4.51,0,0,0,136,14" />
          <path class="cls-3" d="M130.45,17.69l.47,3.48a.42.42,0,0,0,.36.36l2,.3a.36.36,0,0,0,.27,0l2.73-1.49a.39.39,0,0,0,.16-.15l.17-.72,2.18-3a.35.35,0,0,1,.18-.16l.83-.41.48-.23a.39.39,0,0,1,.29,0,.39.39,0,0,1,.25.17l1.09,1.53" />
          <path class="cls-3" d="M137,19.33l.53,1.69a.44.44,0,0,0,.53.29l1.46-.41a.42.42,0,0,0,.29-.26l.85-2.22v1.82a.43.43,0,0,0,.12.31l.81.8a.34.34,0,0,0,.16.1l1,.36a.39.39,0,0,0,.24,0l1.45-.36a.44.44,0,0,0,.26-.18l1.91-2.86" />
        </svg>
      </div>
      <!-- about__box end -->
    </div>
    <!-- about__wrapper end-->
  </div>
  <!-- WRAPPER--min end -->
</section>
<!-- about end -->

<!-- character -->
<section class="character" id="character">
  <div class="WRAPPER--min">
    <h2 class="TITLE TITLE--deco" data-txt="CHARACTER">私はこんな人です。</h2>
    <div class="character__wrapper">
      <div class="character__card">
        <h3 class="character__title character__title--talk">お話しすることが好きです。</h3>
        <p class="character__text">
          接客経験があり、コミュニケーションを取ることが好きです。人と話す上で大切にしていることは相手の人柄を深く知ることです。お互いに気持ちの良いコミュニケーションの雰囲気を作ることを意識しています。
        </p>
      </div>
      <div class="character__card">
        <h3 class="character__title character__title--up">負けず嫌いで、常に上昇志向です。</h3>
        <p class="character__text">
          現状に満足することなく、常に上を目指して励みます。現在は100本ノックを目指してサイトのレビューを綴ったり、twitterなどで学んだことや勉強したことを発信しています。
        </p>
      </div>
      <div class="character__card">
        <h3 class="character__title character__title--activities">活動的です。</h3>
        <p class="character__text">
          やりたいと思ったことがあれば、すぐに行動を起こします。この活動的な性格もあって、これまでに大規模なプロジェクトや個人案件にも携わることができました。
        </p>
      </div>
    </div>
  </div>
</section>
<!-- character end -->

<!-- career -->
<section class="career" id="career">
  <div class="WRAPPER--min">
    <h2 class="TITLE" data-txt="CAREER">経歴</h2>
    <div class="career__wrapper">
      <div class="career__card">
        <h3 class="career__title"><time class="career__time" datetime="2014-2019">2014 ~ 2019</time>商業高校卒業後、4年制大学に入学</h3>
        <p class="career__text">
          ・高校では簿記を始めとする商業科目のほか、情報処理やCOBOLなどといったプログラミング言語の勉強をする。商業高校規定の<span class="BORDER">検定試験に9つのうち7つ合格。</span>学年トップの成績で表彰される。<br />
          ・大学では文系の大学に進学、経営学を学ぶ。一度はWEB業界の道を考えたが、自分には畑違いだと思い、販売の仕事に進むことを決める。<br />
          <strong>→コツコツ努力することの大切さを学んだ。</strong>
        </p>
      </div>
      <!-- career__card end-->
      <div class="career__card">
        <h3 class="career__title"><time class="career__time" datetime="2019.04">2019.04</time>大学を卒業後、寝具メーカーに入社</h3>
        <p class="career__text">
          ・百貨店にて自社の寝具製品の販売業に従事する。<span class="BORDER">お客様の悩みに寄り添った提案販売を心掛け、店舗の売上に貢献。</span><br />
          ・店内で商品のレイアウトを組んだり、POPを作る機会があり、そこで自分の作ったものを評価していただくことがあった。また、以前よりあったWEBの仕事に対しての思いが捨てきれず、クリエイティブな仕事に付きたいと思うようになる。<br />
          <strong>→ヒアリング能力の大切さ、人の悩みに寄り添う力を養った。</strong>
        </p>
      </div>
      <!-- career__card end-->
      <div class="career__card">
        <h3 class="career__title"><time class="career__time" datetime="2019.11">2019.11</time>WEBデザインの勉強を始める。</h3>
        <p class="career__text">
          WEBデザイナーという仕事があることを知る。勉強をしてみたところコーディングの楽しさにハマり、本格的にこの仕事に携わりたいという思いが強くなる。WEBデザインのスクールに通い始め、本格的に勉強を開始。4ヶ月間のワークでは、
          <span class="BORDER">課題やグループワークなどを用いた実践的なフローを受けた。</span><br />
          <strong>→WEB制作の基礎を学んだ。</strong>
        </p>
      </div>
      <!-- career__card end-->
      <div class="career__card">
        <h3 class="career__title"><time class="career__time" datetime="2020.06">2020.06</time>WEBデザイナーに転職する</h3>
        <p class="career__text">
          スクール卒業をして、2ヶ月後に企業の制作部に入社。インハウスWEBデザイナーに転身する。 現在は主に
          <span class="BORDER">自社サイトの新規制作や既存サイトの保守・メンテナンスに携わっている。</span>
        </p>
        <div class="career__box">
          <ul class="career__listFrame">
            <li class="career__listItem">■使用ツール、言語</li>
            <li class="career__listItem">ツール：Photoshop ／ Illustrator ／ XD ／ VS code</li>
            <li class="career__listItem">言語：HTML ／ CSS（SCSS） ／ Javascript（jQuery） ／ PHP</li>
            <li class="career__listItem">CMS：WordPress</li>
            <li class="career__listItem">OS環境：Mac（Windowsの使用も可能）</li>
          </ul>
          <!-- career__listFrame end-->
          <ul class="career__listFrame">
            <li class="career__listItem">■これまで関わってきたサイトの業態</li>
            <li class="career__listItem">・飲食業</li>
            <li class="career__listItem">・リフォーム業</li>
            <li class="career__listItem">・レンタカー・カーコーティング業</li>
            <li class="career__listItem">・美容・理容業&emsp;など</li>
          </ul>
          <!-- career__listFrame end-->
        </div>
        <!-- career__box end-->
        <p class="career__text career__text--deco">
          案件によっては既存のWFからデザインを組み、コーディングまで一人で制作することもございます。既存の自社サイトにはWPを導入しているサイトが多く、CMSの構築から修正まで携わることもあります。また、サイトで扱うバナーの制作もすることがあり、デザインからコーディングまで幅広い業務に携わっています。
        </p>
        <p class="career__text">日々の業務では以下のことを意識しております。</p>
        <div class="career__box career__box--deco">
          <ul class="career__listFrame career__listFrame--deco">
            <li class="career__listItem career__listItem--deco">・デザイン：実装に困らないデザインカンプの作成（余白を明示的に表示するなど）をする。</li>
            <li class="career__listItem career__listItem--deco">・コーティング：後々の管理や修正に支障をきたさないよう、保守のしやすい実装を心掛ける。</li>
          </ul>
          <!-- career__listFrame end-->
        </div>
        <!-- career__box end-->
        <p class="career__text">
          デザインとコーディングの両方の業務に携わっているからこそ、<span class="BORDER">各工程の前後を俯瞰して見ることができます。</span>これらの配慮や気遣いはサイト制作をする上で非常に大切であると考えています。
        </p>
      </div>
      <!-- career__card end-->
    </div>
    <!-- career__wrapper end-->
  </div>
  <!-- WRAPPER--min end-->
</section>
<!-- career end -->

<!-- vision -->
<section class="vision" id="vision">
  <div class="WRAPPER--min">
    <h2 class="TITLE" data-txt="VISION">今後のこと</h2>
    <div class="vision__wrapper">
      <h3 class="vision__title"><span class="vision__title--deco">デ</span>ザインにも理解の持てるマークアップエンジニア</h3>
      <p class="vision__text">
        <span class="BORDER">デザイナーの目線に立って課題の解決ができる実装者</span>として成長していきます。
        <br />また、デザインカンプを忠実に再現するだけでなく、適切なマークアップや保守性、表示速度などにも気を使い、ユーザビリティを常に意識したスキルを磨きます。
      </p>
    </div>
    <div class="vision__wrapper vision__wrapper--deco">
      <h3 class="vision__title vision__title--second"><span class="vision__title--deco">フ</span>ロントエンドのプロフェッショナルとして</h3>
      <p class="vision__text">
        ゆくゆくはフロントエンドエンジニアとしてWEBサービスの開発までできる人材を目指します。<br />
        <span class="BORDER">デザインと実装、双方の観点からアプローチをかけることができるフロントエンドのプロフェッショナル</span>を目指し、日々精進していきます。
      </p>
    </div>
  </div>
</section>
<!-- vision end -->

<!-- photos -->
<section class="photos" id="photos">
  <div class="modal">
    <figure class="modal__wrapper--first">
      <img src="" alt="" class="modal__image" />
    </figure>

    <div class="modal__wrapper--second">
      <span class="modal__prev"></span>
      <p class="modal__caption"></p>
      <span class="modal__next"></span>
    </div>

    <div class="modal__close"></div>
  </div>
  <div class="WRAPPER--min">
    <h2 class="TITLE" data-txt="PHOTO">写真撮影が好きです！<br />これまで撮ってきた写真をご覧ください。</h2>
    <ul class="photos__listFrame">
      <!-- ループ開始 -->
      <?php $image_group = SCF::get('画像');
      foreach ($image_group as $field_name => $field_value) : ?>

        <li class="photos__listItem">
          <?php echo wp_get_attachment_image($field_value['gallery_image'], 'full'); ?>
          <?php echo $field_value['gallery_caption']; ?>
        </li>
        <!-- △ ループ終了 △ -->
      <?php endforeach; ?>
    </ul>
    <!-- photos__listFrame end -->

    <?php get_template_part('template-parts/backContact'); ?>

  </div>
</section>

<!-- photos end -->

<!-- end  contents -->
</main>

<?php get_footer(); ?>
