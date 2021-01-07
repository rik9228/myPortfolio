<!DOCTYPE html>
<!--[if lt IE 9]>
	<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
	<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=10,initial-scale=1.0" />
  <meta property="base_url" content="./" id="base_url" />

  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SXRLTBZ1TL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SXRLTBZ1TL');
  </script>

</head>

<?php $url =  $_SERVER["REQUEST_URI"]; ?>
<?php if (preg_match("/thanks|contact|profile|work/", $url)) : ?>

  <body id="lower" <?php body_class(); ?>>

  <?php else : ?>

    <body id="top" <?php body_class(); ?>>

    <?php endif; ?>

    <main>
      <header class="header">
        <!-- <div class="header__wrapper"> -->
        <div class="header__button">MENU</div>
        <!-- </div> -->

        <nav class="gNav">

          <h1 id="logo">
            <a class="header__homeLogo" href="<?php echo esc_url(home_url('./')); ?>">Morishita Riku<span class="header__homeLogo--deco">Portfolio</span></a>
          </h1>

          <div class="gNav__wrapper">

            <?php
            wp_nav_menu(array(
              'theme_location'  => 'gNav',
              'container'       => 'ul',
              'menu_class'      => 'gNav__listFrame--first',
            ));
            ?>

            <ul class="gNav__listFrame--second">
              <li><a href="https://twitter.com/GT0b4" class="gNav__snsLink gNav__snsLink--twitter" data-txt="twitter" target="_blank"></a></li>
              <li><a href="https://www.instagram.com/rikky__0822/?hl=ja" class="gNav__snsLink gNav__snsLink--instagram" data-txt="instagram" target="_blank"></a></li>
              <li><a href="https://note.com/rank228130" class="gNav__snsLink gNav__snsLink--note" data-txt="note" target="_blank"></a></li>
            </ul>
          </div>
        </nav>
      </header>
