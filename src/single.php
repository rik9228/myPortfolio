<?php get_header(); ?>

<section class="single SECTION">
  <div class="WRAPPER--min">

    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>

        <h2 class="single__title"><?php the_title(); ?></h2>
        <div class="single__wrapper">

        <figure class="single__image">
          <?php
          $img = get_field('site_image');
          $url = $img['url'];
          $alt = $img['alt'];
          ?>
          <img src="<?php echo $url ?>" alt=<?php echo $alt; ?>>

        </figure>


          <ul class="single__listFrame single__listFrame--first">
            <li class="single__listItem">サイト名<a target="_blank" href="<?php the_field('site_url'); ?>" class="single__link"><strong><?php the_field('site_name'); ?></strong></a>
            </li>
            <li class="single__listItem">github<a target="_blank" href="<?php the_field('github'); ?>" class="single__link"><?php the_field('github'); ?></a></li>
          </ul>
          <!-- single__listFrame end-->

          <ul class="single__listFrame">
            <?php $value = get_field('site_summary');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>概要</strong>
                <p class="single__text single__text--deco"><?php the_field('site_summary'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_duration');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>制作期間</strong>
                <p class="single__text single__text--deco"><?php the_field('site_duration'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_tool');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>使用言語、ツール</strong>
                <p class="single__text single__text--deco"><?php the_field('site_tool'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_charge');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>担当</strong>
                <p class="single__text single__text--deco"><?php the_field('site_charge'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_background');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>制作にあたっての背景</strong>
                <p class="single__text single__text--deco"><?php the_field('site_background'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_composition');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>サイト構成</strong>
                <p class="single__text single__text--deco"><?php the_field('site_composition'); ?></p>
              </li>
            <?php endif; ?>
            <?php $value = get_field('site_concept');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>コンセプト</strong>
                <p class="single__text single__text--deco"><?php the_field('site_concept'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_target');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>ターゲット</strong>
                <p class="single__text single__text--deco"><?php the_field('site_target'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_appeal');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>必要な訴求・課題</strong>
                <p class="single__text single__text--deco"><?php the_field('site_appeal'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
            <?php $value = get_field('site_purpose');
            if (empty($value)) : else : ?>
              <li class="single__listItem single__listItem--deco"><strong>目的</strong>
                <p class="single__text single__text--deco"><?php the_field('site_purpose'); ?></p>
              </li>
              <!-- single__listItem end -->
            <?php endif; ?>
          </ul>
          <!-- single__listFrame  end -->

          <ul class="single__listFrame">
            <li class="single__listItem single__listItem--content">
              <p class="single__text"><?php the_content(); ?></p>
            </li>
            <!-- single__listItem end -->
          </ul>
          <!-- single__listFrame end-->

        </div>
        <!-- single__wrapper end-->

      <?php endwhile; ?>
    <?php endif; ?>



    <?php get_template_part('template-parts/backContact'); ?>


  </div>
  <!-- WRAPPER--min end -->
</section>

<!-- end  contents -->
</main>

<?php get_footer(); ?>
