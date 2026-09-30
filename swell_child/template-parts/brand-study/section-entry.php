<?php
/**
 * 無料ブランド勉強会LP：申込フォーム（Entry）
 */
$questions = [
  [ 'title' => 'お名前・会社名・役職・<br class="brand-study-only-sp" />メールアドレス', 'note' => '' ],
  [ 'title' => '会社のWebサイトURL', 'note' => '' ],
  [ 'title' => 'いま、会社の見え方や<br class="brand-study-only-sp" />ブランドについて感じていること', 'note' => '箇条書きや、まとまっていない言葉でも構いません' ],
  [ 'title' => 'ご希望の日時', 'note' => '候補の中からお選びください。合わない場合は、ご希望の日時をご記入いただけます' ],
  [ 'title' => '従業員規模・設立時期（任意）', 'note' => '' ],
];
?>
<section id="entry" class="brand-study-entry brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">お申し込み</h2>
      <p class="brand-study-heading__en" lang="en">Entry</p>
    </div>

    <p class="brand-study-entry__lead">お申し込みは、Googleフォームで<br class="brand-study-only-sp" />受け付けています。<br class="brand-study-only-pc" />ご希望の日時も、<br class="brand-study-only-sp" />フォームでお選びいただけます。</p>

    <div class="brand-study-entry__box">
      <div class="brand-study-entry__questions">
        <h3 class="brand-study-entry__title">フォームでお伺いすること</h3>
        <ul class="brand-study-entry__list">
          <?php foreach ( $questions as $question ) : ?>
            <li class="brand-study-check">
              <?php echo wp_kses( $question['title'], [ 'br' => [ 'class' => [] ] ] ); ?>
              <?php if ( $question['note'] ) : ?>
                <span class="brand-study-entry__note"><?php echo esc_html( $question['note'] ); ?></span>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="brand-study-entry__action">
        <a <?php echo $args['entry_link']; ?> class="brand-study-button brand-study-button--entry">申込フォームへ進む</a>
        <p class="brand-study-entry__action-note">Googleフォームが開きます。入力は1ページで完了します。</p>
      </div>
    </div>

    <p class="brand-study-entry__footnote">勉強会は、経営者・事業責任者の方を対象としています。お申し込み内容を拝見し、ノースサインより確認のご連絡をお送りします。</p>
  </div>
</section>
