    <!-- footer-custom
    ====================================================================== -->
    <footer class="footer-custom">
      <div class="container">
        <div class="footer__head mb-md">
          <div class="footer__logo">
            <a href="<?php echo esc_url( home_url() ); ?>"
              ><img
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.svg"
                alt="ノースサイン合同会社"
                width="190"
                height="36"
                loading="lazy"
                decoding="async"
            /></a>
          </div>
          <ul class="footer__sns">
            <li>
              <a href="https://www.youtube.com/@northsign_jp" class="footer__sns-link lexend" target="_blank" rel="noopener">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-youtube-sm.svg" alt="" width="20" height="14" loading="lazy" decoding="async" />
                YouTube
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-arrow.svg" alt="" width="18" height="18" loading="lazy" decoding="async" />
              </a>
            </li>
            <li>
              <a href="https://note.com/northsign" class="footer__sns-link lexend" target="_blank" rel="noopener">
                note
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-arrow.svg" alt="" width="18" height="18" loading="lazy" decoding="async" />
              </a>
            </li>
          </ul>
        </div>
        <ul class="footer__menu mb-lg">
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('about'))); ?>" class="tx-3xs">私たちについて</a>
          </li>
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>" class="tx-3xs">サービス</a>
          </li>
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_post_type_archive_link('projects') ); ?>" class="tx-3xs">事例紹介</a>
          </li>
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_post_type_archive_link('news-events') ); ?>" class="tx-3xs">ニュース/イベント</a>
          </li>
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" class="tx-3xs">ブログ</a>
          </li>
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact'))); ?>" class="tx-3xs">相談する</a>
          </li>
          <li class="footer__menu-item">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('privacy-policy'))); ?>" class="tx-3xs">プライバシーポリシー</a>
          </li>
        </ul>
        <p class="footer__copyright lexend tx-3xs tx-center">
          <small lang="en"
            >&copy; Copyright North Sign LLC. All Rights Reserved.</small
          >
        </p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>