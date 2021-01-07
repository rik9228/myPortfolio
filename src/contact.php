<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
<!-- start contents -->

<section class="contact SECTION">
  <div class="INNER--min">
    <h2 class="TITLE" data-txt="CONTACT">お問い合わせ</h2>
    <p class="contact__text">
      採用活動に関わるご連絡等、ご不明な点等ございましたらお気軽にご連絡ください。 <br />
      「Twitter」からご連絡いただいても構いません。<br />
      原則<strong>1-3営業日以内</strong>に返信いたします。
    </p>

    <?php echo do_shortcode('[contact-form-7 id="1234" title="Contact form 1"]'); ?>

    <?php get_template_part('template-parts/backContact'); ?>

  </div>
  <!-- INNER--min end -->
</section>

<!-- end  contents -->

</main>

<?php get_footer(); ?>
