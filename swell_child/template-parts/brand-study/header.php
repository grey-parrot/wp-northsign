<?php
/**
 * 無料ブランド勉強会LP：LP専用ヘッダー（ロゴ＋申込ボタン）
 */
?>
<header class="brand-study-header">
  <p class="brand-study-header__logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
      ><img
        src="<?php echo esc_url( $args['icon'] ); ?>/logo.svg"
        alt="ノースサイン合同会社"
        width="190"
        height="36"
    /></a>
  </p>
  <a <?php echo $args['entry_link']; ?> class="brand-study-button brand-study-button--header">
    <span class="brand-study-only-pc">無料勉強会に申し込む</span>
    <span class="brand-study-only-sp">申し込む</span>
  </a>
</header>
