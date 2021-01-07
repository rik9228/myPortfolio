<?php $url =  $_SERVER["REQUEST_URI"]; ?>

<!-- 現在のURLに'thanks'もしくは'contact'がある場合 -->
<?php if (preg_match("/thanks|contact/", $url)) : ?>

  <div class="BUTTON__wrapper">
    <a href="<?php echo esc_url(home_url('./')); ?>" class="BUTTON BUTTON--back">BACK TO TOP</a>
  </div>

  <!-- 現在のURLに'workがある場合 -->
<?php elseif (preg_match("/work/", $url)) : ?>

  <div class="single-prevNext__wrapper">

    <!-- 次の記事がなかった時 -->
    <?php if (get_next_post()) : ?>
      <?php next_post_link('%link', '%title'); ?>
    <?php else : ?>
      <p class="BUTTON single__next" style="visibility:hidden;opacity:0;"></p>
    <?php endif; ?>
    <div class="BUTTON__wrapper">
      <a href="<?php echo esc_url(home_url('./#works')); ?>" class="BUTTON BUTTON--back">BACK TO TOP</a>
    </div>
    <!-- 前の記事がなかったとき -->
    <?php if (get_previous_post()) : ?>
      <?php previous_post_link('%link', '%title'); ?>
    <?php else : ?>
      <p class="BUTTON single__prev" style="visibility:hidden;opacity:0;"></p>
    <?php endif; ?>
  </div>
  <!-- CONTACT -->
  <section class="contact" id="contact">
    <h2 class="TITLE" data-txt="CONTACT">お問い合わせはこちら</h2>
    <div class="contact__border"></div>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="BUTTON BUTTON--deco">CONTACT ME</a>
  </section>
  <!-- CONTACT ここまで -->

  <!-- それ以外のページ -->
<?php elseif (preg_match("/profile/", $url)) : ?>

  <div class="BUTTON__wrapper">
    <a href="<?php echo esc_url(home_url('./')); ?>" class="BUTTON BUTTON--back">BACK TO TOP</a>
  </div>

  <!-- CONTACT -->
  <section class="contact" id="contact">
    <h2 class="TITLE" data-txt="CONTACT">お問い合わせはこちら</h2>
    <div class="contact__border"></div>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="BUTTON BUTTON--deco">CONTACT ME</a>
  </section>
  <!-- CONTACT ここまで -->

<?php else : ?>

  <!-- CONTACT -->
  <section class="contact" id="contact">
    <!-- INNER -->
    <div class="INNER">
      <h2 class="TITLE" data-txt="CONTACT">お問い合わせはこちら</h2>
      <div class="contact__border"></div>
      <a href="<?php echo esc_url(home_url('contact')); ?>" class="BUTTON BUTTON--deco">CONTACT ME</a>
    </div>
      <!-- INNER ここまで -->
  </section>
  <!-- CONTACT ここまで -->


<?php endif; ?>
