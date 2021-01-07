<?php
$twitterLink = 'https://twitter.com/GT0b4';
$instaLink = 'https://www.instagram.com/?hl=ja';
$noteLink = 'https://note.com/rank228130';
?>

<!-- footer -->
<footer class="footer" id="footer">
  <div class="footer__wrapper">
    <ul class="footer__listFrame">
      <li class="footer__listItem"><a href="<?php echo $twitterLink; ?>" class="footer__snsLink footer__snsLink--twitter" target="_blank"></a></li>
      <li class="footer__listItem"><a href="<?php echo $instaLink; ?>" class="footer__snsLink footer__snsLink--instagram" target="_blank"></a></li>
      <li class="footer__listItem"><a href="<?php echo $noteLink; ?>" class="footer__snsLink footer__snsLink--note" target="_blank"></a></li>
    </ul>

    <p class="footer__copyright"><small>&copy;2020 Morishita Riku Portfolio</small></p>
  </div>
</footer>
<!-- footer ここまで -->
<!-- end wrapper -->

<?php wp_footer(); ?>
</body>

</html>
